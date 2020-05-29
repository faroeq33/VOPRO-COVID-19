<?php
require_once ('Jsonconversie.php');

		$curl = curl_init();

		curl_setopt_array($curl, array(
			CURLOPT_URL => "https://covid-193.p.rapidapi.com/statistics",
			CURLOPT_RETURNTRANSFER => true,
			CURLOPT_FOLLOWLOCATION => true,
			CURLOPT_ENCODING => "",
			CURLOPT_MAXREDIRS => 10,
			CURLOPT_TIMEOUT => 30,
			CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
			CURLOPT_CUSTOMREQUEST => "GET",
			CURLOPT_HTTPHEADER => array(
				"x-rapidapi-host: covid-193.p.rapidapi.com",
				"x-rapidapi-key: 86dff1ac42mshb72e16d1ea5da03p1af417jsnfe3f86abc684"
			),
		));

		$response = curl_exec($curl);
		$err = curl_error($curl);

		curl_close($curl);

		if ($err) {
			echo "cURL Error #:" . $err;
		} else {

			$coronadata = new Jsonconversie($response);
			$coronadata->convertToPHParray();
			$coronadata->getData();
			$coronanew = $coronadata->getData();

			echo "<pre>";
 var_dump($coronanew);
			echo "</pre>";
		}
