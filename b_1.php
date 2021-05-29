<?php
  
     $xml=new DomDocument('1.0');
     $xml->formatOutput=true;

    //  create element using createElement()
    //  append child to parent using appendChild

    $Store=$xml->createElement("CD_Store");
    $xml->appendChild($Store);

    //parent->appendChild(child);


    $Movie=$xml->createElement("Movie");
    $Store->appendChild($Movie);

    $Title=$xml->createElement("Title" ,"Mr. India");
    $Movie->appendChild($Title);
    $Release_Year=$xml->createElement("Release_Year" ,"1987");
    $Movie->appendChild($Release_Year);

    $Movie=$xml->createElement("Movie");
    $Store->appendChild($Movie);

    $Title=$xml->createElement("Title" ,"Holiday");
    $Movie->appendChild($Title);
    $Release_Year=$xml->createElement("Release_Year" ,"2014");
    $Movie->appendChild($Release_Year);

    $Movie=$xml->createElement("Movie");
    $Store->appendChild($Movie);

    $Title=$xml->createElement("Title" ,"LOC");
    $Movie->appendChild($Title);
    $Release_Year=$xml->createElement("Release_Year" ,"2003");
    $Movie->appendChild($Release_Year);




    echo "<xmp>" . $xml->saveXML() . "</xmp>";


?>