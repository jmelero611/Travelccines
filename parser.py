import re


def remove_flags(string):
    """
    :param string:
    :return:The string without Html flags and extra spaces
    """
    string = re.sub(r'<.*?>', "", string)
    string = re.sub(r'\s+', " ", string)
    string = re.sub(r'^\s', "", string)
    return(string)


def parse_html(file_name):
    """
    :param file_name of the file to parse:
    :return 3 dictionarys:
            1- vaccinable: dictionary of dictionarys. The first one
            has as keys the diseases, an the second one has as keys "recommendations" and "transmission"
            2- patient_counseling: this one has the recomendations as keys and the explanation as value
            3- other_diseases: this one has the non-vaccinable diseases as keys and the recommendations
            as values
    """

    file = file_name
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

    with open(file) as fd:
        for line in fd:
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
                        match = re.search(r'>(.*)<span class', line)
                        if match:
                            current_disease = match.group(1)
                            vaccinable[current_disease] = {"recommendations":"",
                                                           "transmission":""}
                            clinical_flag = False
                            continue
                    elif re.search(r'class="clinician-disease"', line):
                        clinical_flag = True
                        continue

                    elif re.search(r'class="clinician-recommendations"', line):
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

            elif re.search(r'^\s*Patient Counseling$',line):
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









