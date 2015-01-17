<?php
      function checkEmailAdress($email) { 
        if( (preg_match('/(@.*@)|(\.\.)|(@\.)|(\.@)|(^\.)/', $email)) || 
            (preg_match('/^.+\@(\[?)[a-zA-Z0-9\-\.]+\.([a-zA-Z]{2,3}|[0-9]{1,3})(\]?)$/',$email)) ) { 
            return true;
        }
        return false;
    }
    
    function checkContactForm($values){
        $error = "";
        if(isset($values)){
                if(trim($values['cFirstName'])=="")
                    $error .= "Campul nume nu poate fi vid!<br/>";
                if(trim($values['cLastName'])=="")
                    $error .= "Campul prenume nu poate fi vid!<br/>";
                if(trim($values['cPhone'])=="")
                    $error .= "Campul telefon nu poate fi vid!<br/>";
                if(trim($values['cEmail'])=="" && !checkEmailAdress($values['cEmail']))
                    $error .= "Campul email nu poate fi vid!<br/>";
                if(trim($values['cMessage'])=="")
                    $error .= "Campul mesaj nu poate fi vid!<br/>";
        }
    return $error;
    }

    function checkOfferForm($values){
        $error = "";
        if(isset($values)){
                if(trim($values['firstName'])=="")
                    $error .= "Campul nume nu poate fi vid!<br/>";
                if(trim($values['lastName'])=="")
                    $error .= "Campul prenume nu poate fi vid!<br/>";
                if(trim($values['phone'])=="")
                    $error .= "Campul telefon nu poate fi vid!<br/>";
                if(trim($values['email'])=="" && !checkEmailAdress($values['email']))
                    $error .= "Campul email nu poate fi vid!<br/>";
                if(trim($values['period'])=="-1")
                    $error .= "Campul Termen nu poate fi vid!<br/>";
                if(trim($values['period'])=="-1")
                    $error .= "Campul Termen nu poate fi vid!<br/>";
                if(trim($values['contentEstimate'])=="-1")
                    $error .= "Campul Estimare continut nu poate fi vid!<br/>";
                if(trim($values['budget'])=="euro" || trim($values['budget'])=="")
                    $error .= "Campul budget nu poate fi vid, trebuie sa contina o valoare numerica!<br/>";
        }
    return $error;
    }
    
    function getSiteStructure($siteStructureValues, $separator){
        $siteStructureCollection = array (
                                         "1" =>"Animatie introducere",
                                         "2" =>"Pagini statice [prezentarea firmei, misiune etc]",
                                         "3" =>"Module de prezentare a ultimelor noutati [sistem de gestionare online a continutului]",
                                         "4" =>"Catalog de produse/Servicii [sistem de gestionare online a catalogului]",
                                         "5" =>"Modul de abonare la newsletter [abonare/dezabonare]",
                                         "6" =>"Formular de contact",
                                         "7" =>"Modul fisiere [upload facil al documentelor firmei]"
                                      );
        $result = "";
        foreach($siteStructureCollection as $key=>$value) {
            if(in_array($key,$siteStructureValues))
               $result .= $siteStructureCollection[$key].$separator;
        }
        
        if($separator=",")
            $result = substr($result,0,-1);

        return $result;                              
    }

    function getDesign($designValues, $separator){
        $designCollection = array (
                                         "1" =>"Interfata text simpla",
                                         "2" =>"Interfata text elaborata",
                                         "3" =>"Interfata grafica simpla [grafica simpla]",
                                         "4" =>"Interfata grafica complexa [animatie Flash/grafica originala]"
                                      );
        $result = "";
        foreach($designCollection as $key=>$value) {
            if(in_array($key,$designValues))
               $result .= $designCollection[$key].$separator;
        }

        if($separator=",")
            $result = substr($result,0,-1);

        return $result;                              
    }
    
    function getXtra($xtraValues, $separator){
        $xtraCollection = array (
                                         "1" =>"Design si management pentru baza de date",
                                         "2" =>"Forum sau lista de discutii",
                                         "3" =>"Comenzi online",
                                         "4" =>"Multimedia [audio/video]",
                                         "5" =>"Realizare identitate grafica [logo, foi cu antet, carti de vizita etc.]",
                                         "6" =>"Diverse elemente grafice animate",
                                         "7" =>"Animatie Flash/AfterEffects",
                                         "8" =>"Site multilingv"
                                      );
        $result = "";
        foreach($xtraCollection as $key=>$value) {
            if(in_array($key,$xtraValues))
               $result .= $xtraCollection[$key].$separator;
        }

        if($separator=",")
            $result = substr($result,0,-1);

        return $result;                              
                                      
    }
    
    function getMarketing($marketingValues, $separator){
        $marketingCollection = array (
                                         "1" =>"Inscriere in principalele motoare de cautare",
                                         "2" =>"Optimizarea continutului sitului pentru motoarele de cautare",
                                         "3" =>"Design banner publicitar si/sau Publicitate promotionala",
                                         "4" =>"Dezvoltare continut texte"
                                  );
        $result = "";
        foreach($marketingCollection as $key=>$value) {
            if(in_array($key,$marketingValues))
               $result .= $marketingCollection[$key].$separator;
        }

        if($separator=",")
            $result = substr($result,0,-1);

        return $result;                                      
    }
        

                                  
    function getOther($otherValues, $separator){                                                                
    $otherCollection = array (
                                     "1" =>"Cerere de inregistrare a domeniului pentru site-ul dvs.",
                                     "2" =>"Cerere pentru servicii de gazduire",
                                     "3" =>"Cerere pentru mentenanta site-ului"
                              );
        $result = "";
        foreach($otherCollection as $key=>$value) {
            if(in_array($key,$otherValues))
               $result .= $otherCollection[$key].$separator;
        }

        if($separator=",")
            $result = substr($result,0,-1);
        
        return $result;                              
                              
    }

    function getFavoriteSites($favoriteSiteValues, $separator){                                                                
        $result = "";
        foreach($favoriteSiteValues as $site) {
               $result .= $site.$separator;
        }

        if($separator=",")
            $result = substr($result,0,-1);

        return $result;                              
                              
    }
    
?>
