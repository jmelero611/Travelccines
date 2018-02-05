SELECT DISTINCT v.vaccine_name, v.disease_name  FROM Traveccines.Country c, Traveccines.Country_has_Diseases cd, Diseases d, Country_has_Recommendations cr, Diseases_has_Transmission dt, Recommendations r, S_effect s, Transmission t, Vaccines v, Vaccines_has_S_effect vs
	WHERE c.idCountry = cd.idCountry
	#AND c.idCountry = cr.idcountry
	#AND cr.idCRecommendation = r.idCRecommendation
	#AND d.disease_name = cd.disease_name
	#AND d.disease_name = dt.disease_name
	#AND dt.idTransmition = t.idTransmition
	#AND v.disease_name = d.disease_name
	#AND v.vaccine_name = vs.vaccine_name
	#AND vs.idEffect = s.idEffect

	AND c.country_name = 'target'
	AND cd.disease_name NOT IN (
		SELECT cd.disease_name FROM Traveccines.Country_has_Diseases cd, Traveccines.Country c WHERE
			c.country_name = 'origin' AND
			c.idCountry = cd.idCountry
		)
	
	AND v.status = 'Licensed' #IF not_licensed_vaccines == FALSE
