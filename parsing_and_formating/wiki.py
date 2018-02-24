import re
import urllib.request as urquest

def url_to_html(url):
    try:
        html_FILEHANDLE = urquest.urlopen(url)
    except:
        url = re.sub("-", " ", url)
        try:
            html_FILEHANDLE = urquest.urlopen(url)
        except:
            return None
    for line in html_FILEHANDLE:
        yield(line.decode("utf8"))
    html_FILEHANDLE.close()
def wiki(country):
    cap_flag = None
    box_flag = None
    pop_flag = None
    ar_flag = None
    print(country)
    url = 'https://en.wikipedia.org/wiki/%s' %country
    for linia in url_to_html(url):
        linia = linia.strip()
        #print(linia)
        if box_flag:
            if re.search(r'>Capital<', linia) and cap_flag is None:
                cap_flag = 'Ys'
                print('   Capital')
            elif cap_flag:
                match1 = re.search(r'title="(.*)">\1</a>', linia)
                if match1:
                    print("        %s"%match1.group(1))
                    cap_flag = False
            if re.search(r'>Area<', linia) and ar_flag is None:
                ar_flag = 'Ys'
                print('   Area')
            elif ar_flag:
                match2 = re.search(r'(([0-9]{3}|[0-9]{2})\,[0-9]{3})', linia)
                if match2:
                    print("        %s"%match2.group(1))
                    ar_flag = False
            if re.search(r'>Population<', linia) and pop_flag is None:
                pop_flag = 'Ys'
                print('   Population')
            elif pop_flag:
                match3 = re.search(r'(([0-9]{1,3})(\,[0-9]{3}){1,})', linia)
                if match3:
                    print("       %s"%match3.group(1))
                    pop_flag = False
        elif re.search(r'<table class="infobox geography vcard"', linia):
            box_flag = 'Ys'
        else:
            continue




with open('cdc_paises.txt') as cdc:
    list = cdc.read().split('\n')
    for country in list:
        country = country.strip()
        wiki(country)