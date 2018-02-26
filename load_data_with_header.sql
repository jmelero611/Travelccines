# Per executar el script des del terminal directament:
# mysql --local-infile -u (user) -p(password) < ./load_data_with_header.sql
# Poseu el vostre user sense parèntesi i la vostra passwowrd també sense parèntesi després del -p(sense espai entre -p i la password!!!)


use Traveccines; #si teniu un altre nom per la base de dades, fer servir el nom que tingueu.

LOAD DATA LOCAL INFILE '/home/user/Dropbox/Apunts_master/DBW/project/tables/country_sin_comillas.tbl'
	INTO TABLE Country
	IGNORE 1 LINES; #la capçalera. Si no en té, elimineu o comenteu aquesta línia


LOAD DATA LOCAL INFILE '/home/user/Dropbox/Apunts_master/DBW/project/tables/diseases.tbl'
	INTO TABLE Diseases
	IGNORE 1 LINES; #la capçalera. Si no en té, elimineu o comenteu aquesta línia


LOAD DATA LOCAL INFILE '/home/user/Dropbox/Apunts_master/DBW/project/tables/seffect.tbl'
	INTO TABLE S_effect
	IGNORE 1 LINES; #la capçalera. Si no en té, elimineu o comenteu aquesta línia

LOAD DATA LOCAL INFILE '/home/user/Dropbox/Apunts_master/DBW/project/tables/vaccines.tbl'
	INTO TABLE Vaccines
	IGNORE 1 LINES; #la capçalera. Si no en té, elimineu o comenteu aquesta línia

LOAD DATA LOCAL INFILE '/home/user/Dropbox/Apunts_master/DBW/project/tables/transmission.tbl'
	INTO TABLE Transmission
	IGNORE 1 LINES; #la capçalera. Si no en té, elimineu o comenteu aquesta línia

LOAD DATA LOCAL INFILE '/home/user/Dropbox/Apunts_master/DBW/project/tables/wiki.tbl'
	INTO TABLE Wiki
	IGNORE 1 LINES; #la capçalera. Si no en té, elimineu o comenteu aquesta línia



LOAD DATA LOCAL INFILE '/home/user/Dropbox/Apunts_master/DBW/project/tables/country_has_diseases.tbl'
	INTO TABLE Country_has_Diseases
	IGNORE 1 LINES; #la capçalera. Si no en té, elimineu o comenteu aquesta línia



LOAD DATA LOCAL INFILE '/home/user/Dropbox/Apunts_master/DBW/project/tables/disease_has_transmission.tbl'
	INTO TABLE Diseases_has_Transmission
	IGNORE 1 LINES; #la capçalera. Si no en té, elimineu o comenteu aquesta línia


LOAD DATA LOCAL INFILE '/home/user/Dropbox/Apunts_master/DBW/project/tables/vaccines_has_seffect.tbl'
	INTO TABLE Vaccines_has_S_effect
	IGNORE 1 LINES; #la capçalera. Si no en té, elimineu o comenteu aquesta línia





