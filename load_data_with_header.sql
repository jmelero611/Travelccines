# Per executar el script des del terminal directament:
# mysql --local-infile -u (user) -p(password) < ./load_data_with_header.sql
# Poseu el vostre user sense parèntesi i la vostra passwowrd també sense parèntesi després del -p(sense espai entre -p i la password!!!)


use Traveccines; #si teniu un altre nom per la base de dades, fer servir el nom que tingueu.

LOAD DATA LOCAL INFILE '/path/table.tbl'
	INTO TABLE table_name
	IGNORE 1 LINES; #la capçalera. Si no en té, elimineu o comenteu aquesta línia
