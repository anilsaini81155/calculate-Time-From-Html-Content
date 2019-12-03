<?php

//Author -> Anil Saini (anilsaini81155@gmail.com)
//Created Application for calculating time required to read a web content or an set of lines or blog.
//Please Feel Free to Contact for any queires.

Class CalculateTimeFromHtmlContent {

    var $ci;

    function __construct() {
        $this->ci = & get_instance();
    }

    function getTimeRequiredFromHtml($htmlData) {
        $htmlData = strip_tags($htmlData);
        $noOfWordsReadableInOneMin = 200;
        $parsedData = explode(' ', $htmlData);
        $countOfWords = count($parsedData);
        $timeRequiredToCountContent = ceil($countOfWords / $noOfWordsReadableInOneMin);
        return $timeRequiredToCountContent . " Min Read";
    }
   

}
