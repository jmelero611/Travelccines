import re
equival = {}
with open('full_country.tbl') as dat:
	for line in dat:
		line = line.rstrip()
		info = line.split('\t')
		equival[int(info[2])] = info


with open('index.html') as fl:
	with open('final_index.html',"w") as out:
		for line in fl:
			if re.match('<path',line):
				idpais = int(re.search(r'data-countryid="(.*?)" d',line).group(1))
				if idpais in equival:
					data = line.split()
					for i in range(len(data)):
						if re.match('title',data[i]):
							print('yes')
							data[i] = 'title="%s"' % equival[idpais][1]
					out.write(" ".join(data))
				else:
					out.write(line)
			else:
				out.write(line)
