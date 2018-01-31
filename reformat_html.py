import re
with open("jj.html","r") as fl:
	with open("index.html","w") as out:
		for line in fl:
			if re.search(r'</path><path',line):
				line = re.sub('</path><path',"</path>\n<path",line)
			elif re.search(r'</option><option',line):
				line = re.sub('</option><option',"</option>\n<option",line)
			out.write(line)


