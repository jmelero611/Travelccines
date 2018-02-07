#!/bin/env python 3
import re
import urllib.request as urquest
import time
from os import chdir, system, mkdir, path

def url_to_html(url):
    html_FILEHANDLE = urquest.urlopen(url)
    for line in html_FILEHANDLE:
        yield(line.decode("utf8"))
    html_FILEHANDLE.close()
def remove_flags(string):
    """
    :param string:
    :return:The string without Html flags and extra spaces
    """
    string = re.sub(r'<.*?>', "", string)
    string = re.sub(r'\s+', " ", string)
    string = re.sub(r'^\s', "", string)
    string = re.sub(r'&quot;', "", string)
    string = re.sub(r'&ndash;', '-', string)
    string = re.sub(r'&ldquo;| &rdquo;', '"', string)
    string = re.sub(r'&amp;', '', string)
    string = re.sub(r'&.*;', '', string)
    return(string)
def parse_html(file):
    """
    :param file_name of the file to parse:
    :return 3 dictionarys:
            1- vaccinable: dictionary of dictionarys. The first one
            has as keys the diseases, an the second one has as keys "recommendations" and "transmission"
            2- patient_counseling: this one has the recomendations as keys and the explanation as value
            3- other_diseases: this one has the non-vaccinable diseases as keys and the recommendations
            as values
    """

    tbody_flag = False
    vam_flag = False
    clinical_flag = False
    recommendations_flag = False
    transmission_flag = False
    vaccinable = {}
    patient_counseling = {}
    other_diseases = {}
    counseling_flag = False
    current_disease = ""
    counseling_new = False
    non_vaccine_flag = False
    new_other_flag = False
    other_body_flag = False
    other_disease_name = ""
    current_counseling = ""

    for line in url_to_html(file):
        line.rstrip()
        if re.search(r"\"vaccines-and-medicines\"",line):
            vam_flag = True
            continue

        elif vam_flag:
            if not tbody_flag:
                if re.search(r"<tbody>",line):
                    tbody_flag = True
                    continue
            else:
                if clinical_flag:
                    match = re.search(r'>(.*)</a>', line)
                    if match:
                        current_disease = match.group(1)
                        vaccinable[current_disease] = {"recommendations":"",
                                                       "transmission":""}
                        clinical_flag = False
                        continue
                elif re.search(r'class="clinician-disease"', line):
                    clinical_flag = True
                    continue

                elif re.search(r'class="clinician-recomendations"', line):
                    recommendations_flag = True
                    continue

                elif recommendations_flag:

                    if not re.search(r'</td>', line):
                        if not re.search(r'class=".*', line):
                            line = remove_flags(line)
                            vaccinable[current_disease]["recommendations"] += line

                    else:
                        recommendations_flag = False

                elif re.search(r'class="clinician-transmission"', line):
                    transmission_flag = True
                    try:
                        match = re.search(r'<p>(.*)',line).group(1)
                        match = remove_flags(match)
                        vaccinable[current_disease]["transmission"] = [match]
                        continue
                    except:
                        vaccinable[current_disease]["transmission"] = ['Contaminated water']
                        continue

                elif transmission_flag:
                    if not re.search(r'</td>',line):
                        if not re.search(r'class=".*',line):
                            line = remove_flags(line)
                            vaccinable[current_disease]["transmission"].append(line)

                    else:
                        transmission_flag = False

                elif re.search(r'</tbody>',line):
                    tbody_flag = False
                    vam_flag = False

        elif re.search(r'^\s+Patient Counseling',line):
            counseling_flag = True
            continue

        elif re.search(r'Healthy Travel Packing List',line):
            counseling_flag = False
            continue

        elif counseling_flag:
            match_name = re.search(r'class="no-image">(.*)<',line)
            if match_name:
                counseling_new = False
                current_counseling = match_name.group(1)
                patient_counseling[current_counseling] = []
                continue

            elif re.search(r'class="sub_section_body inner-content inner-content-collapsable"',line):
                counseling_new = True

            elif counseling_new:
                if re.search(r'href="javascript:void(0);">hide', line) or re.search(r'Additional Resources', line):
                    counseling_new = False
                else:
                    line = remove_flags(line)
                    patient_counseling[current_counseling].append(line)

        elif re.search(r'<h3>Non-Vaccine-Preventable Diseases',line):
            non_vaccine_flag = True
            continue

        elif non_vaccine_flag:
            match_name = re.search(r'<td class="other-clinician-disease">(.*)</td>',line)
            if match_name:
                other_disease_name = match_name.group(1)
                other_diseases[other_disease_name] = ""
                new_other_flag = True
                continue
            elif new_other_flag and re.search(r'<td class="other-clinician-notes">',line):
                other_body_flag = True

            elif other_body_flag:
                if not re.search(r'</td>', line):
                    line = remove_flags(line)
                    other_diseases[other_disease_name] += line
                else:
                    new_other_flag = False
                    other_body_flag = False
                    continue
            elif re.search(r'<a href="#" class="tp-link-policy">Top</a>',line):
                non_vaccine_flag = False
    return vaccinable ,patient_counseling ,other_diseases
def dict_name_to_three():
    name_to_three = {}
    with open('three_to_country.txt', 'r') as c_t_3:
        for line in c_t_3:
            line = line.strip()
            line = line.split('\t')
            name_to_three[line[1].lower()] = line[0]
    return name_to_three
def get_maps(country):
    '''
    :param country:
    :obs ojo que no ha funcionado con todos los paises!!
    '''
    chdir('maps')
    system('wget https://wwwnc.cdc.gov/travel/images/map-%s.png' %country)
    chdir('..')
def save_tables(dhasc = False, country_table = False, c_has_rec = False, disease_table = False, d_has_t = False,
                c_rec_table = False, trans_table = False, c_in_disease = False):
    if not path.isdir('tables'):
        mkdir('tables')
    if dhasc:
        with open('tables/disease_has_country.tbl', "w") as dc:
            dc.write('disease\tidCountry\n')
            for dc_pair in dhasc:
                dc.write('%s\t%s\n' %(dc_pair[0], dc_pair[1]))
    if country_table:
        with open('tables/country.tbl', "w") as c:
            c.write('idCountry\tCountry_name\tmap\tDevelopment\n')
            for country in country_table:
                c.write('%s\t%s\t%s\t%s\n' %(country[0], country[1], country[2], country[3]))
    if c_has_rec:
        with open('tables/country_has_recomendations.tbl', "w") as cr:
            cr.write('idCountry\tidCRecomendation\n')
            for cr_pair in c_has_rec:
                cr.write('%s\t%s\n' %(cr_pair[1], cr_pair[0]))
    if disease_table:
        with open('tables/disease.tbl', "w") as d:
            d.write('Disease_name\tPatogen\tImportance\tVaccine\n')
            for disease in disease_table:
                d.write('%s\t%s\t%s\t%s\n' %(disease, disease_table[disease][0], disease_table[disease][1], disease_table[disease][2]))
    if d_has_t:
        with open('tables/disease_has_transmission.tbl', "w") as dt:
            dt.write('Disease_name\tidTransmission\n')
            for dt_pair in d_has_t:
                dt.write('%s\t%s\n' %(dt_pair[0], dt_pair[1]))
    if c_rec_table:
        with open('tables/country_recomendation_table.tbl', "w") as crt:
            crt.write('idCRecomendation\tCRecomendation\n')
            for i in range(len(c_rec_table)):
                crt.write('%s\t%s\n' %(i, c_rec_table[i]))
    if trans_table:
        with open('tables/transmission_table.tbl', "w") as t:
            t.write('idTransmission\tTrans_name\n')
            for i in range(len(trans_table)):
                t.write('%s\t%s\n' %(i, trans_table[i]))
    if c_in_disease:
        union = set()
        with open('tables/c_in_disease.tbl', "w") as cid:
            for dis in c_in_disease:
                cid.write('%s: %s\n' %(dis, c_in_disease[dis]))
                union = union.union( c_in_disease[dis])
            cid.write('Union\t%s\n' %union)

def dict_three_to_num():
    ttn = {}
    with open('countris_iso_table.tbl', 'r') as t_to_numm:
        for line in t_to_numm:
            line = line.strip()
            line = line.split('\t')
            ttn[line[2][:-1]] = int(line[3])
    return ttn

def html_to_table(list_of_countries):
    name_to_three = dict_name_to_three()
    three_to_num = dict_three_to_num()
    d_has_c = []
    country_table = []
    c_has_rec = []
    diseases_table = {}
    d_has_t = set()
    c_rec = []
    trans_table = []
    countries_in_disease = dict()
    for country in list_of_countries:
        print('Working on %s...' %country)
        c_vaccinable, c_patient_counseling, c_other_diseases = parse_html('https://wwwnc.cdc.gov/travel/destinations/clinician/none/%s' %country)
        for disease in c_vaccinable:
            d_has_c.append((disease, name_to_three[country]))
            diseases_table[disease] = ('patogen', 'importance', 'yes')
            if name_to_three[country] in three_to_num:
                countries_in_disease.setdefault(disease, set()).add(three_to_num[name_to_three[country]])
            for transmission in c_vaccinable[disease]['transmission']:
                if transmission != '':
                    if transmission not in trans_table:
                        trans_table.append(transmission)
                    d_has_t.add((disease, trans_table.index(transmission)))
        for other_disease in c_other_diseases:
            diseases_table[other_disease] = ('patogen', 'importance', 'no')
            d_has_c.append((other_disease, name_to_three[country]))
            if name_to_three[country] in three_to_num:
                countries_in_disease.setdefault(other_disease, set()).add(three_to_num[name_to_three[country]])
        for r_typ in c_patient_counseling:
            for recomendation in c_patient_counseling[r_typ]:
                if recomendation not in c_rec :
                    c_rec.append(recomendation)
                index = c_rec.index(recomendation)
                if (index, name_to_three[country]) not in c_has_rec and len(recomendation)>10 and \
                                recomendation != 'Travelers should: ' and recomendation != 'Helpful resources ':
                    c_has_rec.append((index, name_to_three[country]))
        #get_maps(country)
        country_table.append((name_to_three[country], country, 'maps/map-%s' %country, 1))

    save_tables(dhasc = d_has_c, country_table = country_table, c_has_rec = c_has_rec, disease_table = diseases_table,
                d_has_t = d_has_t, c_rec_table = c_rec, trans_table = trans_table, c_in_disease = countries_in_disease)


with open('cdc_paises.txt') as cdc:
    list = cdc.read().split('\n')
    html_to_table(list)
