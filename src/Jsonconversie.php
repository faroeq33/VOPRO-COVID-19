<?php
namespace VOPRO;

class Jsonconversie
{
    private $input;
    private $json;
    private $data;

    public function __construct($input) 
    {
        $this->input = $input;

    }

    public function convertToPHParray( ) 
    {
        $phpFileContents = json_decode($this->input, true);// json to php array conversion

        $this->data = $phpFileContents;
    }

    public function getData() 
    {
        return $this->data;
    }
}
