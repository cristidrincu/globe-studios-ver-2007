<?php
    include("debuglib.php");
    require("classes/auxiliary.php");
    require("classes/class.htmlMimeMail.php");
    require("classes/config.php");
  
    $interestsCollection = array (
                                     "-1"=>"Nici o optiune selectata",
                                     "1" =>"Design corporativ",
                                     "2" =>"Solutii de gazduire site",
                                     "3" =>"Aplicatii internet/intranet",
                                     "4" =>"Consultanta e-business",
                                     "5" =>"Strategii de promovare",
                                     "6" =>"Consultanta IT si aplicatii offline",
                                     "7" =>"Produse multimedia",
                                     "8" =>"Printare",
                                     "9" =>"Altele"
                                  );

    $contactErrorMessage = "";    
    if(isset($_POST['btnTrimite']) && $_POST['btnTrimite']=="Trimite mesajul") {   
        $contactErrorMessage = checkContactForm($_POST); 
        if($contactErrorMessage=="") {
            $firstName          = $_POST['cFirstName'];
            $lastName           = $_POST['cLastName'];
            $phone              = $_POST['cPhone'];
            $email              = $_POST['cEmail'];
            $company            = $_POST['cCompany'];
            $activityDomanin    = $_POST['cActivityDomain'];
            $interests          = $interestsCollection[$_POST['cInterests']];            
            $message            = $_POST['cMessage'];
            
            $htmlText="";
            $htmlText .=   '<table align="center" width="99%" style="font-weight:bold;" border="1">';
            $htmlText .=   '<tr style="font-weight:bold">';
            $htmlText .=   '    <td colspan="2">Contact Request</td>';
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
            $htmlText .=   '    <td>Firma:&nbsp;</td>';
            $htmlText .=   '    <td>'.$company.'</td>';
            $htmlText .=   '</tr>';
            $htmlText .=   '<tr>';
            $htmlText .=   '    <td>Domeniu de activitate:&nbsp;</td>';
            $htmlText .=   '    <td>'.$activityDomanin.'</td>';
            $htmlText .=   '</tr>';
            $htmlText .=   '<tr>';
            $htmlText .=   '    <td>Interese:&nbsp;</td>';
            $htmlText .=   '    <td>'.$interests.'</td>';
            $htmlText .=   '</tr>';            
            $htmlText .=   '<tr>';
            $htmlText .=   '    <td>Mesaj:&nbsp;</td>';
            $htmlText .=   '    <td>'.nl2br($message).'</td>';
            $htmlText .=   '</tr>';
            $htmlText .=   '</table>';
            
            $text  =   'Contact Request\r\n';
            $text .=   'Nume:'.$firstName." ".$lastName.'\r\n';
            $text .=   'Email:'.$email.'\r\n';
            $text .=   'Telefon:'.$phone.'\r\n';
            $text .=   'Firma:'.$company.'\r\n';
            $text .=   'Domeniu de activitate:'.$activityDomanin.'\r\n';
            $text .=   'Interese:'.$interests.'\r\n';
            $text .=   'Mesaj:'.nl2br($message).'\r\n';

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
