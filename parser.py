#!/bin/env python 3
import re
import urllib.request as urquest
import time
from os import chdir, system
import sys
from pandas import DataFrame
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
                    match = re.search(r'<p>(.*)',line).group(1)
                    match = remove_flags(match)
                    vaccinable[current_disease]["transmission"] += match
                    continue

                elif transmission_flag:
                    if not re.search(r'</td>',line):
                        if not re.search(r'class=".*',line):
                            line = remove_flags(line)
                            vaccinable[current_disease]["transmission"] += line

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
                patient_counseling[current_counseling] = ""
                continue

            elif re.search(r'class="sub_section_body inner-content inner-content-collapsable"',line):
                counseling_new = True

            elif counseling_new:
                if re.search(r'href="javascript:void(0);">hide', line) or re.search(r'Additional Resources', line):
                    counseling_new = False
                else:
                    line = remove_flags(line)
                    patient_counseling[current_counseling] += line

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
def save_tables(dhasc = False, country_table = False, c_has_rec = False):
    if dhasc:
        with open('disease_has_country.tbl', "w") as fh:
            fh.write('disease\tidCountry\n')
            for dc_pair in dhasc:
                fh.write('%s\t%s\n' %(dc_pair[0], dc_pair[1]))
    if country_table:
        with open('country.tbl', "w") as c:
            c.write('idCountry\tCountry_name\tmap\tDevelopment\n')
            for country in country_table:
                c.write('%s\t%s\t%s\t%s\n' %(country[0], country[1], country[2], country[3]))
    if c_has_rec:
        with open('country_has_recomendations.tbl', "w") as c:
            c.write('idCountry\tRecomendations\n')
            for cr_pair in c_has_rec:
                c.write('%s\t%s\n' %(cr_pair[0], cr_pair[1]))
def html_to_table(list_of_countries):
    name_to_three = dict_name_to_three()
    d_has_c = []
    country_table = []
    c_has_rec = []
    for country in list_of_countries:
        print('Working on %s...' %country)
        c_vaccinable, c_patient_counseling, c_other_diseases = parse_html('https://wwwnc.cdc.gov/travel/destinations/clinician/none/%s' %country)
        for disease in c_vaccinable:
            d_has_c.append((disease, name_to_three[country]))
        for recomendation in c_patient_counseling:
            c_has_rec.append((recomendation, name_to_three[country]))
        #get_maps(country)
        country_table.append((name_to_three[country], country, 'maps/map-%s' %country, 1))
        time.sleep(5)

    save_tables(dhasc = d_has_c, country_table = country_table, c_has_rec = c_has_rec)

with open('cdc_paises.txt') as infile:
    list = infile.read().split('\n')
    html_to_table(list)
