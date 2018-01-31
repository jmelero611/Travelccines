#!/bin/env python 3
def dict_name_to_three():
    name_to_three = {}
    with open('three_to_country.txt', 'r') as c_t_3:
        for line in c_t_3:
            line = line.strip()
            line = line.split('\t')
            name_to_three[line[1].lower()] = line[0]
    return name_to_three
def dict_three_to_num_pretty_two ():
    three_to_string = {}
    with open('countris_iso_table.tbl', 'r') as t_to_num:
        for line in t_to_num:
            line = line.strip()
            line = line.split('\t')
            three_to_string[line[2][:-1]] = '%s\t%s\t%s'%(line[0][:-1], line[3], line[1][:-1])
    return three_to_string

if __name__ == '__main__':
    name_to_three = dict_name_to_three()
    all_dict = dict_three_to_num_pretty_two()
    all_dict_keys = all_dict.keys()
    with open('cdc_paises.txt') as infile:
        with open('full_conversion_country.tbl', "w") as outfile:
            outfile.write('DB_name\tLessucky_name\tnum\tTwo_letters\tThree_letters\n')
            for line in infile:
                line = line.rstrip()
                if name_to_three[line] in all_dict_keys:
                    outfile.write('%s\t%s\t%s\n' %(line, all_dict[name_to_three[line]], name_to_three[line]))