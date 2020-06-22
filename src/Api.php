<?php
namespace VOPRO;

use VOPRO\Jsonconversie as Jsonconversie;
use Unirest\Request as Request;

class Api
{
    private $input;
    private $key = "86dff1ac42mshb72e16d1ea5da03p1af417jsnfe3f86abc684";
    private $host = "covid-193.p.rapidapi.com";

    public function getAllCountries()
    {
        $this->input = "countries";

        $data = Request::get("https://covid-193.p.rapidapi.com/" . $this->input,
            [
                "X-RapidAPI-Host" => $this->host,
                "X-RapidAPI-Key" => $this->key
            ]
        );

        $array = new Jsonconversie( $data->body->response );
        $array->convertToJson();
        $array->convertToPHParray();
        return $array->getData();
    }

    public function getStatsFromCountry( $country )
    {
        $data = Request::get("https://covid-193.p.rapidapi.com/statistics?country=" . $country,
            [
                "X-RapidAPI-Host" => $this->host,
                "X-RapidAPI-Key" => $this->key
            ]
        );

        $array = new Jsonconversie( $data->body->response );
        $array->convertToJson();
        $array->convertToPHParray();
        $arraycopy = $array->getData();

        return $arraycopy[0];// This is done to remove surrounding array
    }

    public function getHistory( $country, $dateYMD )
    {
        $data = Request::get("https://covid-193.p.rapidapi.com/" . $country,
            [
                "X-RapidAPI-Host" => $this->host,
                "X-RapidAPI-Key" => $this->key
            ]
        );

        $array = new Jsonconversie( $data->body->response );
        $array->convertToJson();
        $array->convertToPHParray();
        return $array->getData();
    }

}