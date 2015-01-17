<?php
    include("debuglib.php");
    require("classes/auxiliary.php");
    require("classes/class.htmlMimeMail.php");
    require("classes/config.php");

    $periodCollection = array (
                                     "1" =>"in mai putin de 5 zile",
                                     "2" =>"10 zile",
                                     "3" =>"30 de zile",
                                     "4" =>"in mai mult de 30 de zile"
                              );
    $contentEstimateCollection = array (
                                     "1" =>"3-5 pagini",
                                     "2" =>"5-10 pagini",
                                     "3" =>"10-25 pagini",
                                     "4" =>"25-50 pagini",
                                     "5" =>"mai mult de 50 de pagini"
                              );
                              
    $offerErrorMessage = "";    
    if(isset($_POST['btnCerereOferta']) && $_POST['btnCerereOferta']=="Trimite cererea de oferta") {   
        $offerErrorMessage = checkOfferForm($_POST); 
        if($offerErrorMessage=="") {
            $firstName          = $_POST['firstName'];
            $lastName           = $_POST['lastName'];
            $phone              = $_POST['phone'];
            $email              = $_POST['email'];
            $site               = $_POST['site']; 
            $sitePurpose        = $_POST['sitePurpose'];
            $activityDomanin    = $_POST['activityDomain'];
            $comments           = $_POST['comments'];            
            $budget             = $_POST['budget'];            
            $period             = $periodCollection[$_POST['period']];            
            $contentEstimate    = $contentEstimateCollection[$_POST['contentEstimate']];            
            
            $siteStructureHtml = getSiteStructure($_POST['siteStructure'],"<br/>");
            $siteStructureText = getSiteStructure($_POST['siteStructure'],",");
            
            $designHtml    = getDesign($_POST['design'],"<br/>");
            $designText    = getDesign($_POST['design'],",");
            
            $xtraHtml      = getXtra($_POST['xtra'],"<br/>");
            $xtraText      = getXtra($_POST['xtra'],",");
            
            $marketingHtml = getMarketing($_POST['marketing'],"<br/>");
            $marketingText = getMarketing($_POST['marketing'],",");

            $otherHtml     = getOther($_POST['others'],"<br/>");
            $otherText     = getOther($_POST['others'],",");

            $favoriteSitesHtml = getFavoriteSites($_POST['favoriteSites'],"<br/>");
            $favoriteSitesText = getFavoriteSites($_POST['favoriteSites'],",");
            
            $htmlText="";
            $htmlText .=   '<table align="center" width="99%" style="font-weight:bold;" border="1">';
            $htmlText .=   '<tr style="font-weight:bold">';
            $htmlText .=   '    <td colspan="2">Offer Request</td>';
            $htmlText .=   '</tr>';
            $htmlText .=   '<tr>';
            $htmlText .=   '    <td width="200">Nume:&nbsp;</td>';
            $htmlText .=   '    <td>'.$firstName." ".$lastName.'</td>';
            $htmlText .=   '</tr>';
            $htmlText .=   '<tr>';                                        
            $htmlText .=   '    <td>Email:&nbsp;</td>';
            $htmlText .=   '    <td>'.$email.'</td>';
            $htmlText .=   '</tr>';
            $htmlText .=   '<tr>';
            $htmlText .=   '    <td>Telefon:&nbsp;</td>';
            $htmlText .=   '    <td>'.$phone.'</td>';
            $htmlText .=   '</tr>';
            $htmlText .=   '<tr>';
            $htmlText .=   '    <td>Site:&nbsp;</td>';
            $htmlText .=   '    <td>'.$site.'</td>';
            $htmlText .=   '</tr>';
            $htmlText .=   '<tr>';
            $htmlText .=   '    <td>Scop Site:&nbsp;</td>';
            $htmlText .=   '    <td>'.$sitePurpose.'</td>';
            $htmlText .=   '</tr>';
            $htmlText .=   '<tr>';
            $htmlText .=   '    <td>Domeniu de activitate:&nbsp;</td>';
            $htmlText .=   '    <td>'.$activityDomanin.'</td>';
            $htmlText .=   '</tr>';
            $htmlText .=   '<tr>';
            $htmlText .=   '    <td>Comments:&nbsp;</td>';
            $htmlText .=   '    <td>'.$comments.'</td>';
            $htmlText .=   '</tr>';            
            $htmlText .=   '<tr>';
            $htmlText .=   '    <td>Structura Site (optiune alese):&nbsp;</td>';
            $htmlText .=   '    <td>'.$siteStructureHtml.'</td>';
            $htmlText .=   '</tr>';            
            $htmlText .=   '<tr>';
            $htmlText .=   '    <td>Design (optiune alese):&nbsp;</td>';
            $htmlText .=   '    <td>'.$designHtml.'</td>';
            $htmlText .=   '</tr>';            
            $htmlText .=   '<tr>';
            $htmlText .=   '    <td>Elemente aditionale (optiune alese):&nbsp;</td>';
            $htmlText .=   '    <td>'.$xtraHtml.'</td>';
            $htmlText .=   '</tr>';            
            $htmlText .=   '<tr>';
            $htmlText .=   '    <td>Marketing (optiune alese):&nbsp;</td>';
            $htmlText .=   '    <td>'.$marketingHtml.'</td>';
            $htmlText .=   '</tr>';            
            $htmlText .=   '<tr>';
            $htmlText .=   '    <td>Altele (optiune alese):&nbsp;</td>';
            $htmlText .=   '    <td>'.$otherHtml.'</td>';
            $htmlText .=   '</tr>';            
            $htmlText .=   '<tr>';
            $htmlText .=   '    <td>Termen dorit pentru finalizarea proiectului:&nbsp;</td>';
            $htmlText .=   '    <td>'.$period.'</td>';
            $htmlText .=   '</tr>';            
            $htmlText .=   '<tr>';
            $htmlText .=   '    <td>Estimare continut:&nbsp;</td>';
            $htmlText .=   '    <td>'.$contentEstimate.'</td>';
            $htmlText .=   '</tr>';            
            $htmlText .=   '<tr>';
            $htmlText .=   '    <td>Budget:&nbsp;</td>';
            $htmlText .=   '    <td>'.$budget.'</td>';
            $htmlText .=   '</tr>';            
            $htmlText .=   '<tr>';
            $htmlText .=   '    <td>Sit(uri) favorit(e), asociat(e) domeniului de activitate:&nbsp;</td>';
            $htmlText .=   '    <td>'.$favoriteSitesHtml.'</td>';
            $htmlText .=   '</tr>';            
            
            $htmlText .=   '</table>';
            
            $text  =   'Contact Request\n\n';
            $text .=   'Nume:'.$firstName." ".$lastName.'\n';
            $text .=   'Email:'.$email.'\n';
            $text .=   'Telefon:'.$phone.'\n';
            $text .=   'Site:'.$site.'\n';
            $text .=   'Scop site:'.$sitePurpose.'\n';
            $text .=   'Domeniu de activitate:'.$activityDomanin.'\n';
            $text .=   'Comments:'.$comments.'\n';
            $text .=   'Structura site (optiuni alese):'.$siteStructureText.'\n';
            $text .=   'Design (optiuni alese):'.$designText.'\n';
            $text .=   'Elemente aditionale (optiuni alese):'.$xtraText.'\n';
            $text .=   'Marketing (optiuni alese):'.$marketingText.'\n';
            $text .=   'Altele (optiuni alese):'.$otherText.'\n';
            $text .=   'Termen dorit pentru finalizarea proiectului :'.$period.'\n';
            $text .=   'Estimare continut :'.$contentEstimate.'\n';
            $text .=   'Budget:'.$budget.'\n';
            $text .=   'Sit(uri) favorit(e), asociat(e) domeniului de activitate:'.$favoriteSitesText.'\n';

            $to=DELIVERY_ADDRESS;                                                            
            $from = "client@globe-studios.com";
            $subject = "Cerere Contact";    
            $html = "<HTML><HEAD></HEAD><BODY>".$htmlText."</BODY></HTML>";

            $mail=new htmlMimeMail();
            $mail->setHtml($htmlText, $text);
            $mail->setReturnPath($from);
            $mail->setFrom($from);
            $mail->setSubject($subject);
            $mail->setHeader("X-Mailer","globe-studios.com");
            $mail->setHeader("X-Priority","1");
            $mail->setHeader("X-Sender","<www.globe-studios.com>");
            
            $result = @$mail->send(array($to));
            
            if (!$result){
				  header("location: mail_failure.html");  
            }
            else {
                  header("location: mail_succes.html");                          
            }  
        } else {
             include("contact_globe_studios.php");   
        }
    } else {
        header("location: contact_globe_studios.php");
    }                                                          
?>
