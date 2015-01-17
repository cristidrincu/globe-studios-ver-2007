<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Contact &gt;&gt; Globe-Studios :: Web :: Multimedia :: Video</title>
<link rel="stylesheet" type="text/css" href="site.css" media="screen"/>
<link rel="stylesheet" type="text/css" href="lytebox.css" media="screen"/>
<script type="text/javascript" src="lytebox.js"></script>
<script type="text/javascript">
var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
</script>
<script type="text/javascript">
var pageTracker = _gat._getTracker("UA-2956369-1");
pageTracker._initData();
pageTracker._trackPageview();
</script>
</head>

<body>
<div id="headerTop">
	<!--comment-->
	<div id="containerCSSFlash">
	<!--comment-->
	<div id="flashContainer">
	  <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=7,0,19,0" width="800" height="147">
          <param name="movie" value="Flash/flas_contact.swf" />
          <param name="quality" value="high" />
          <embed src="Flash/flas_contact.swf" quality="high" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" width="800" height="147" embed wmode="transparent"></embed>
	  </object>
	</div>
	<!--ends flashContainer-->
	</div><!--ends containerCSSFlash-->
</div>
<!--ends headerTop-->

<div id="mainBox">
	<div id="leftColumn">
		<div class="headerLeftColumn">
			<img src="JPG/IMG Contact/header_contact.jpg" alt="" border="0" width="469" height="29"/>
		</div><!--ends headerLeftColumn div-->
		
		<div class="autoPortret">
			<form name="contact" id="contactForm" action="contact.php" method="post">
				<table>
                    <?
                        if(isset($contactErrorMessage)) {
                    ?>
                    <tr>
                        <td colspan="2">&nbsp;</td>
                    </tr>                                        
                    <tr>
                        <td colspan="2" align="center">
                            <h3 class="underConstruction">
                                <span>
                                    <?
                                        echo $contactErrorMessage;
                                    ?>
                                </span>
                            </h3>                            
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">&nbsp;</td>
                    </tr>                                        
                    <?
                    }
                    ?>                            
					<tr>
						<td align="right"><b>Nume (*):</b></td>
						<td><input name="cFirstName" type="text" value="<?=(isset($_POST['cFirstName']) ? $_POST['cFirstName'] : "")?>" size="50"/></td>
					</tr>
					
					<tr>
						<td align="right"><b>Prenume (*):</b></td>
						<td><input name="cLastName" type="text" id="prenume" value="<?=(isset($_POST['cLastName']) ? $_POST['cLastName'] : "")?>" size="50"/></td>
					</tr>
					
					<tr>
						<td align="right"><b>Telefon (*):</b></td>
						<td><input name="cPhone" type="text" id="telefon" value="<?=(isset($_POST['cPhone']) ? $_POST['cPhone'] : "")?>" size="50"/></td>
					</tr>
					
					<tr>
						<td align="right"><b>E-mail (*):</b></td>
						<td><input name="cEmail" type="text" id="email" value="<?=(isset($_POST['cEmail']) ? $_POST['cEmail'] : "")?>" size="50"/></td>
					</tr>
					
					<tr>
						<td align="right">Firma:</td>
						<td><input name="cCompany" type="text" id="firma" value="<?=(isset($_POST['cCompany']) ? $_POST['cCompany'] : "")?>" size="50"/></td>
					</tr>
					
					<tr>
						<td align="right">Domeniul de activitate:</td>
						<td><input name="cActivityDomain" type="text" id="domeniuActivitate" value="<?=(isset($_POST['cActivityDomain']) ? $_POST['cActivityDomain'] : "")?>" size="50"/></td>
					</tr>
					
					<tr>
						<td align="right">Sunt interesat de:</td>
						<td>
							<select name="cInterests" id="selectDomenii">
						  		<option value="-1" <?=(isset($_POST['cInterests']) ? $_POST['cInterests'] == "-1"? "selected" : "" : "")?>>-Alegeti-</option>
						  		<option value="1"  <?=(isset($_POST['cInterests']) ? $_POST['cInterests'] == "1"? "selected" : "" : "")?>>Design corporativ</option>
						   		<option value="2"  <?=(isset($_POST['cInterests']) ? $_POST['cInterests'] == "2"? "selected" : "" : "")?>>Solutii de gazduire site</option>
								<option value="3"  <?=(isset($_POST['cInterests']) ? $_POST['cInterests'] == "3"? "selected" : "" : "")?>>Aplicatii internet/intranet</option>
							  	<option value="4"  <?=(isset($_POST['cInterests']) ? $_POST['cInterests'] == "4"? "selected" : "" : "")?>>Consultanta e-business</option>
							   	<option value="5"  <?=(isset($_POST['cInterests']) ? $_POST['cInterests'] == "5"? "selected" : "" : "")?>>Strategii de promovare</option>
							    <option value="6"  <?=(isset($_POST['cInterests']) ? $_POST['cInterests'] == "6"? "selected" : "" : "")?>>Consultanta IT si aplicatii offline</option>
								<option value="7"  <?=(isset($_POST['cInterests']) ? $_POST['cInterests'] == "7"? "selected" : "" : "")?>>Produse multimedia</option>
								<option value="8"  <?=(isset($_POST['cInterests']) ? $_POST['cInterests'] == "8"? "selected" : "" : "")?>>Printare</option>
								<option value="9"  <?=(isset($_POST['cInterests']) ? $_POST['cInterests'] == "9"? "selected" : "" : "")?>>Altele...</option>
						</select>
						</td>
					</tr>
					
					<tr>
						<td valign="top" align="right"><b>Mesaj (*):</b></td>
						<td><textarea name="cMessage" id="campTextMesaj" cols="37" rows="5"><?=(isset($_POST['cMessage']) ? $_POST['cMessage'] : "Mesajul dumneavoastra...")?></textarea></td>
					</tr>
					
					<tr>
						<td colspan="2">
							<hr style="color:red; background-color:red";/>
						</td>
					</tr>
					
					<tr>
						<td colspan="2" align="center">
							<p style="color:red; font-weight:bold;">(*) Nota: Campurile marcate cu * sunt obligatorii si trebuie completate.</p>
						</td>
					</tr>
					
					<tr>
						<td colspan="2" align="center"><input name="btnTrimite" type="submit" value="Trimite mesajul" /></td>
					</tr>
					
					<tr>
						<td colspan="2">
							<hr style="color:red; background-color:red";/>
						</td>
					</tr>
				</table>
			</form>	
		</div><!--ends autoPortret div-->
		
		
		<div class="headerLeftColumn">
			<img src="JPG/IMG Contact/header_cerere_oferta.jpg" alt="" border="0" width="469" height="29"/>
		</div><!--ends headerLeftColumn div-->
		
		<div class="autoPortret">
			<form name="cerereOferta" id="formOferta" action="offer.php" method="post">
				<table>
                    <?
                        if(isset($offerErrorMessage)) {
                    ?>
                    <tr>
                        <td colspan="2">&nbsp;</td>
                    </tr>                                        
                    <tr>
                        <td colspan="2" align="center">
                            <h3 class="underConstruction">
                                <span>
                                    <?
                                        echo $offerErrorMessage;
                                    ?>
                                </span>
                            </h3>                            
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">&nbsp;</td>
                    </tr>                                        
                    <?
                    }
                    ?>                                            
					<tr>
						<td align="right"><b>Nume (*):</b></td>
						<td><input name="firstName" type="text" id="nume" value="<?=(isset($_POST['firstName']) ? $_POST['firstName'] : "")?>" size="50"/></td>
					</tr>
					
					<tr>
						<td align="right"><b>Prenume (*):</b></td>
						<td><input name="lastName" type="text" id="prenume" value="<?=(isset($_POST['lastName']) ? $_POST['lastName'] : "")?>" size="50"/></td>
					</tr>
					
					<tr>
						<td align="right"><b>Telefon (*):</b></td>
						<td><input name="phone" type="text" id="telefon" value="<?=(isset($_POST['phone']) ? $_POST['phone'] : "")?>" size="50"/></td>
					</tr>
					
					<tr>
						<td align="right"><b>E-mail (*):</b></td>
						<td><input name="email" type="text" id="email" value="<?=(isset($_POST['email']) ? $_POST['email'] : "")?>" size="50"/></td>
					</tr>
					
					<tr>
						<td align="right">Site web al firmei:</td>
						<td><input name="site" type="text" id="adresaSite" value="<?=(isset($_POST['cFirstName']) ? $_POST['cFirstName'] : "http://www.numesite.domeniu(.ro, .com, .org etc)")?>" size="50"/></td>
					</tr>
					
					<tr>
						<td colspan="2"><hr/></td>
					</tr>
					
					<tr>
						<td colspan="2">
							<p style="color:red; font-weight:bold;">In caz ca firma dvs. NU are un site, nu completati acest camp!</p>
						</td>
					</tr>
					
					<tr>
						<td colspan="2"><hr/></td>
					</tr>
					
					<tr>
						<td valign="top" align="right"><b>Care sunt scopurile sitului?</b></td>
						<td>
							<textarea name="sitePurpose" id="campTextScopSite" cols="37" rows="5"><?=(isset($_POST['sitePurpose']) ? $_POST['sitePurpose'] : "")?></textarea>
						</td>
					</tr>
					
					<tr>
						<td valign="top" align="right"><b>Descrieti pe scurt care este domeniul de activitate al firmei dvs.</b></td>
						<td>
							<textarea name="activityDomain" id="campTextDomeniuActivitate" cols="37" rows="5"><?=(isset($_POST['activityDomain']) ? $_POST['activityDomain'] : "")?></textarea>
						</td>
					</tr>
					
					<tr>
						<td valign="top" align="right"><b>Comentarii suplimentare, cerinte speciale</b></td>
						<td>
							<textarea name="comments" id="campTextComentariiSuplimentare" cols="37" rows="5"><?=(isset($_POST['comments']) ? $_POST['comments'] : "")?></textarea>
						</td>
					</tr>
					
					<tr>
						<td colspan="2"><hr/></td>
					</tr>
					
					<tr>
						<td colspan="2"><b>Structura site-ului/continutului</b></td>
					</tr>
					
					<tr>
						<td align="left" colspan="2"><input name="siteStructure[]" type="checkbox" value="1" <?=(isset($_POST['siteStructure']) ? $_POST['siteStructure'][0] == "1"? "checked" : "" : "")?>/>&nbsp;Animatie introducere</td>
					</tr>
					
					<tr>
						<td align="left" colspan="2"><input name="siteStructure[]" type="checkbox" value="2" <?=(isset($_POST['siteStructure']) ? $_POST['siteStructure'][1] == "2"? "checked" : "" : "")?>/>&nbsp;Pagini statice [prezentarea firmei, misiune etc]</td>
					</tr>
					
					<tr>
						<td align="left" colspan="2"><input name="siteStructure[]" type="checkbox" value="3" <?=(isset($_POST['siteStructure']) ? $_POST['siteStructure'][2] == "3"? "checked" : "" : "")?>/>&nbsp;Module de prezentare a ultimelor noutati [sistem de gestionare online a continutului]</td>
					</tr>
					
					<tr>
						<td align="left" colspan="2"><input name="siteStructure[]" type="checkbox" value="4" <?=(isset($_POST['siteStructure']) ? $_POST['siteStructure'][3] == "4"? "checked" : "" : "")?>/>&nbsp;Catalog de produse/Servicii [sistem de gestionare online a catalogului]</td>
					</tr>
					
					<tr>
						<td align="left" colspan="2"><input name="siteStructure[]" type="checkbox" value="5" <?=(isset($_POST['siteStructure']) ? $_POST['siteStructure'][4] == "5"? "checked" : "" : "")?>/>&nbsp;Modul de abonare la newsletter [abonare/dezabonare]</td>
					</tr>
					
					<tr>
						<td align="left" colspan="2"><input name="siteStructure[]" type="checkbox" value="6" <?=(isset($_POST['siteStructure']) ? $_POST['siteStructure'][5] == "6"? "checked" : "" : "")?>/>&nbsp;Formular de contact</td>
					</tr>
					
					<tr>
						<td align="left" colspan="2"><input name="siteStructure[]" type="checkbox" value="7" <?=(isset($_POST['siteStructure']) ? $_POST['siteStructure'][6] == "7"? "checked" : "" : "")?>/>&nbsp;Modul fisiere [upload facil al documentelor firmei]</td>
					</tr>
					
					<tr>
						<td colspan="2"><hr/></td>
					</tr>
					
					<tr>
						<td colspan="2"><b>Design</b></td>
					</tr>
					
					<tr>
						<td align="left" colspan="2"><input name="design[]" type="checkbox" value="1" <?=(isset($_POST['design']) ? $_POST['design'][0] == "1"? "checked" : "" : "")?>/>&nbsp;Interfata text simpla</td>
					</tr>
					
					<tr>
						<td align="left" colspan="2"><input name="design[]" type="checkbox" value="2" <?=(isset($_POST['design']) ? $_POST['design'][1] == "2"? "checked" : "" : "")?>/>&nbsp;Interfata text elaborata</td>
					</tr>
					
					<tr>
						<td align="left" colspan="2"><input name="design[]" type="checkbox" value="3" <?=(isset($_POST['design']) ? $_POST['design'][2] == "3"? "checked" : "" : "")?>/>&nbsp;Interfata grafica simpla [grafica simpla]</td>
					</tr>
					
					<tr>
						<td align="left" colspan="2"><input name="design[]" type="checkbox" value="4" <?=(isset($_POST['design']) ? $_POST['design'][3] == "4"? "checked" : "" : "")?>/>&nbsp;Interfata grafica complexa [animatie Flash/grafica originala]</td>
					</tr>
					
					<tr>
						<td colspan="2"><hr/></td>
					</tr>
					
					<tr>
						<td colspan="2"><b>Elemente aditionale</b></td>
					</tr>
					
					<tr>
						<td align="left" colspan="2"><input name="xtra[]" type="checkbox" value="1" <?=(isset($_POST['xtra']) ? $_POST['xtra'][0] == "1"? "checked" : "" : "")?>/>&nbsp;Design si management pentru baza de date</td>
					</tr>
					
					<tr>
						<td align="left" colspan="2"><input name="xtra[]" type="checkbox" value="2" <?=(isset($_POST['xtra']) ? $_POST['xtra'][1] == "2"? "checked" : "" : "")?>/>&nbsp;Forum sau lista de discutii</td>
					</tr>
					
					<tr>
						<td align="left" colspan="2"><input name="xtra[]" type="checkbox" value="3" <?=(isset($_POST['xtra']) ? $_POST['xtra'][2] == "3"? "checked" : "" : "")?>/>&nbsp;Comenzi online</td>
					</tr>
					
					<tr>
						<td align="left" colspan="2"><input name="xtra[]" type="checkbox" value="4" <?=(isset($_POST['xtra']) ? $_POST['xtra'][3] == "4"? "checked" : "" : "")?>/>&nbsp;Multimedia [audio/video]</td>
					</tr>
					
					<tr>
						<td align="left" colspan="2"><input name="xtra[]" type="checkbox" value="5" <?=(isset($_POST['xtra']) ? $_POST['xtra'][4] == "5"? "checked" : "" : "")?>/>&nbsp;Realizare identitate grafica [logo, foi cu antet, carti de vizita etc.]</td>
					</tr>
					
					<tr>
						<td align="left" colspan="2"><input name="xtra[]" type="checkbox" value="6" <?=(isset($_POST['xtra']) ? $_POST['xtra'][5] == "6"? "checked" : "" : "")?>/>&nbsp;Diverse elemente grafice animate</td>
					</tr>
					
					<tr>
						<td align="left" colspan="2"><input name="xtra[]" type="checkbox" value="7" <?=(isset($_POST['xtra']) ? $_POST['xtra'][6] == "7"? "checked" : "" : "")?>/>&nbsp;Animatie Flash/AfterEffects</td>
					</tr>
					
					<tr>
						<td align="left" colspan="2"><input name="xtra[]" type="checkbox" value="8" <?=(isset($_POST['xtra']) ? $_POST['xtra'][7] == "8"? "checked" : "" : "")?>/>&nbsp;Site multilingv</td>
					</tr>
					
					<tr>
						<td colspan="2"><hr/></td>
					</tr>
					
					<tr>
						<td colspan="2"><b>Marketing</b></td>
					</tr>
					
					<tr>
						<td align="left" colspan="2"><input name="marketing[]" type="checkbox" value="1"  <?=(isset($_POST['marketing']) ? $_POST['marketing'][0] == "1"? "checked" : "" : "")?>/>&nbsp;Inscriere in principalele motoare de cautare</td>
					</tr>
					
					<tr>
						<td align="left" colspan="2"><input name="marketing[]" type="checkbox" value="2" <?=(isset($_POST['marketing']) ? $_POST['marketing'][1] == "2"? "checked" : "" : "")?>/>&nbsp;Optimizarea continutului sitului pentru motoarele de cautare</td>
					</tr>
					
					<tr>
						<td align="left" colspan="2"><input name="marketing[]" type="checkbox" value="3" <?=(isset($_POST['marketing']) ? $_POST['marketing'][2] == "3"? "checked" : "" : "")?>/>&nbsp;Design banner publicitar si/sau Publicitate promotionala</td>
					</tr>
					
					<tr>
						<td align="left" colspan="2"><input name="marketing[]" type="checkbox" value="4" <?=(isset($_POST['marketing']) ? $_POST['marketing'][3] == "4"? "checked" : "" : "")?>/>&nbsp;Dezvoltare continut texte</td>
					</tr>
					
					<tr>
						<td colspan="2"><hr/></td>
					</tr>
					
					<tr>
						<td colspan="2"><b>Altele</b></td>
					</tr>
					
					<tr>
						<td align="left" colspan="2"><input name="others[]" type="checkbox" value="1" <?=(isset($_POST['others']) ? $_POST['others'][0] == "1"? "checked" : "" : "")?>/>&nbsp;Cerere de inregistrare a domeniului pentru site-ul dvs.</td>
					</tr>
					
					<tr>
						<td align="left" colspan="2"><input name="others[]" type="checkbox" value="2" <?=(isset($_POST['others']) ? $_POST['others'][1] == "2"? "checked" : "" : "")?>/>&nbsp;Cerere pentru servicii de gazduire</td>
					</tr>
					
					<tr>
						<td align="left" colspan="2"><input name="others[]" type="checkbox" value="3" <?=(isset($_POST['others']) ? $_POST['others'][2] == "3"? "checked" : "" : "")?>/>&nbsp;Cerere pentru mentenanta site-ului</td>
					</tr>
					
					<tr>
						<td colspan="2"><hr/></td>
					</tr>
					
					<tr>
						<td colspan="2"><b>Termenul dorit pentru finalizarea proiectului (*)</b></td>
					</tr>
					
					<tr>
						<td colspan="2">
                        <select name="period">
						  <option value="-1" <?=(isset($_POST['period']) ? $_POST['period'] == "-1"? "selected" : "" : "")?>>Altegeti optiunea...</option>
                          <option value="1"  <?=(isset($_POST['period']) ? $_POST['period'] == "1"? "selected" : "" : "")?>>in mai putin de 5 zile</option>
						  <option value="2"  <?=(isset($_POST['period']) ? $_POST['period'] == "2"? "selected" : "" : "")?>>10 zile</option>
						  <option value="3"  <?=(isset($_POST['period']) ? $_POST['period'] == "3"? "selected" : "" : "")?>>30 de zile</option>
						  <option value="4"  <?=(isset($_POST['period']) ? $_POST['period'] == "4"? "selected" : "" : "")?>>in mai mult de 30 de zile</option>
						</select></td>
					</tr>
					
					<tr>
						<td colspan="2"><hr/></td>
					</tr>
					
					<tr>
						<td colspan="2"><b>Estimare continut: (*)</b></td>
					</tr>
					
					<tr>
						<td colspan="2">
                        <select name="contentEstimate">
						  <option value="-1" <?=(isset($_POST['contentEstimate']) ? $_POST['contentEstimate'] == "-1"? "selected" : "" : "")?>>Altegeti optiunea...</option>
                          <option value="1"  <?=(isset($_POST['contentEstimate']) ? $_POST['contentEstimate'] == "1"? "selected" : "" : "")?>>3-5 pagini</option>
						  <option value="2"  <?=(isset($_POST['contentEstimate']) ? $_POST['contentEstimate'] == "2"? "selected" : "" : "")?>>5-10 pagini</option>
						  <option value="3"  <?=(isset($_POST['contentEstimate']) ? $_POST['contentEstimate'] == "3"? "selected" : "" : "")?>>10-25 pagini</option>
						  <option value="4"  <?=(isset($_POST['contentEstimate']) ? $_POST['contentEstimate'] == "4"? "selected" : "" : "")?>>25-50 pagini</option>
						  <option value="5"  <?=(isset($_POST['contentEstimate']) ? $_POST['contentEstimate'] == "5"? "selected" : "" : "")?>>mai mult de 50 de pagini</option>
						</select></td>
					</tr>
					
					<tr>
						<td colspan="2"><hr/></td>
					</tr>
					
					<tr>
						<td colspan="2"><b>Estimare buget alocat pentru realizarea proiectului: (*)</b></td>
					</tr>					
					    <td colspan="2">
                            <input name="budget" type="text" id="campSumaEuro" value="<?=(isset($_POST['budget']) ? $_POST['budget'] : "euro")?>" size="50"/>
                        </td>
                    </tr>
                   	<tr>
						<td colspan="2"><hr/></td>
					</tr>
					
					<tr>
						<td colspan="2"><b>Sit(uri) favorit(e), asociat(e) domeniului de activitate:</b></td>
					</tr>
					
					<tr>
						<td colspan="2">
                            <input name="favoriteSites[]" type="text" value="<?=(isset($_POST['favoriteSites']) ? $_POST['favoriteSites'][0] : 'http://www...')?>" size="50"/>
                        </td>
					</tr>
					
					<tr></tr>
					
					<tr>
						<td colspan="2">
                            <input name="favoriteSites[]" type="text" value="<?=(isset($_POST['favoriteSites']) ? $_POST['favoriteSites'][1] : "http://www...")?>" size="50"/></td>
					</tr>
					
					<tr></tr>
					
					<tr>
						<td colspan="2">
                            <input name="favoriteSites[]" type="text" value="<?=(isset($_POST['favoriteSites']) ? $_POST['favoriteSites'][2] : "http://www...")?>" size="50"/></td>
					</tr>
					
					<tr>
						<td colspan="2">
							<hr style="color:red; background-color:red";/>
						</td>
					</tr>
					
					<tr>
						<td colspan="2" align="center">
							<p style="color:red; font-weight:bold;">(*) Nota: Campurile marcate cu * sunt obligatorii si trebuie completate.</p>
						</td>
					</tr>
					
					<tr>
						<td colspan="2" align="center"><input name="btnCerereOferta" type="submit" value="Trimite cererea de oferta" /></td>
					</tr>
					
					<tr>
						<td><br/></td>
						
					</tr>
					
					<tr>
						<td><br/></td>
						
					</tr>
				</table>
			
			</form>
		</div><!--ends autoPortret div-->
			
	
	</div><!--ends leftColumn-->
	
	
	
	<div id="rightColumn">
		<div class="headerRightColumn">
			<img src="JPG/proiect_desfasurare.jpg" alt="" border="0" width="306" height="31"/>
			<div class="titluProiect">
				<a href="" target="_self"><img src="JPG/Arrows/arrow_dibser.jpg" alt="" border="0" width="306" height="14"/></a>			</div>
			<!--ends titluProiect div-->
			
			<div class="picProject">
				<a href="JPG/IMG_Thumbnails_Projects/dibser.jpg" target="_self" rel="lytebox" title="DIBSER">
					<img src="JPG/IMG Projects/dibser_img.jpg" alt="" border="0" width="85" height="85"/>
				</a>
				<p>
					Client: <b>Dibser</b>
					<br/>
					Task: <b>Design&amp;Dezvoltare</b>
					<br/>
					Statut: <b>in desfasurare</b>
				</b></p>
				<div class="clearFloats">
					<!--comment-->
				</div><!--ends clearFloats div-->
				<p>Globe-Studios a fost contractat pentru a da o noua infatisare site-ului firmei Dibser (site-ul data din anul 2005).</p>	
		  </div><!--ends picProject div-->
			
			<div class="meniuAccesareProiecte">
				<a href="" target="_self"><img src="JPG/Plusses/plus.jpg" alt="" border="0" width="13" height="14"/></a>
					<div class="maiMulteDetalii">
						<a href="proiecte_globe_studios.html#dibser" target="_self">mai multe detalii</a>
							<div class="baraLink">
								<img src="JPG/bara_mica.jpg" alt="" border="0" width="4" height="11"/>
								<div class="pozaLupaProiecte">
									<img src="JPG/IMG Lupa/lupa.jpg" alt="" border="0" width="13" height="17"/>
									<div class="veziToateProiectele">
										<a href="proiecte_globe_studios.html" target="_self">vezi toate proiectele</a>									</div>
									<!--ends veziToateProiectele-->
								</div><!--ends pozaLupaProiecte-->
							</div><!--ends baraLink-->
			  </div><!--ends maiMulteDetalii div-->
			</div><!--ends meniuAccesareProiecte div-->
			
			<div class="clearFloats">
				<!--comment-->
			</div><!--ends clearFloats div-->
			
			<hr/>
			
			<div class="titluProiect">
				<a href="" target="_self"><img src="JPG/Arrows/arrow_weld_expert.jpg" alt="" border="0" width="306" height="14"/></a>			</div>
			<!--ends titluProiect div-->
			<div class="picProject">
				<a href="JPG/IMG_Thumbnails_Projects/weld_expert.jpg" target="_self" rel="lytebox" title="WELD EXPERT">
					<img src="JPG/IMG Projects/weld_expert_img.jpg" alt="" border="0" width="85" height="85"/>
				</a>
				<p>
					Client: <b>Weld Expert</b>
					<br/>
					Task: <b>Design&amp;Dezvoltare</b>
					<br/>
					Statut: <b>in desfasurare</b>
				</b></p>
				<div class="clearFloats">
					<!--comment-->
				</div><!--ends clearFloats div-->
				<p>Site-ul Weld Expert se doreste a fi o combinatie intre informatii tehnice legate de sudura si un layout web modern. </p>	
		  </div><!--ends picProject div-->
			
			<div class="meniuAccesareProiecte">
				<a href="" target="_self"><img src="JPG/Plusses/plus.jpg" alt="" border="0" width="13" height="14"/></a>
					<div class="maiMulteDetalii">
						<a href="proiecte_globe_studios.html#weldExpert" target="_self">mai multe detalii</a>
							<div class="baraLink">
								<img src="JPG/bara_mica.jpg" alt="" border="0" width="4" height="11"/>
								<div class="pozaLupaProiecte">
									<img src="JPG/IMG Lupa/lupa.jpg" alt="" border="0" width="13" height="17"/>
									<div class="veziToateProiectele">
										<a href="proiecte_globe_studios.html" target="_self">vezi toate proiectele</a>									</div>
									<!--ends veziToateProiectele-->
								</div><!--ends pozaLupaProiecte-->
							</div><!--ends baraLink-->
			  </div><!--ends maiMulteDetalii div-->
			</div><!--ends meniuAccesareProiecte div-->
			
			<div class="clearFloats">
				<!--comment-->
			</div><!--ends clearFloats div-->			
			
		</div><!--ends headerRightColumn-->
		
		
		<div class="headerRightColumn">
			<img src="JPG/linkuri_utile.jpg" alt="" border="0" width="306" height="31"/>
				<div class="arrowLink">
					<img src="JPG/Arrows/arrow_links.jpg" alt="" border="0" width="5" height="5"/>
					&nbsp;&nbsp;
					<a href="http://www.rohost.ro" target="_blank">www.rohost.ro</a>
					<p>Rohost este o firma de gazduire web care, in opinia noastra, ofera servicii excelente pentru cei care doresc sa aiba o prezenta pe internet. Sunt prima firma de gazduire web din Romania care a oferit servicii la un standard ridicat, avand mai mult de 5 ani de experienta in domeniu.</p>
				</div><!--ends arrowLink-->
				
				<div class="arrowLink">
					<img src="JPG/Arrows/arrow_links.jpg" alt="" border="0" width="5" height="5"/>
					&nbsp;&nbsp;
					<a href="http://www.rnc.ro" target="_blank">www.rnc.ro</a>
					<p>Rnc sau Reteaua Nationala de Calculatoare este entitatea care se ocupa de tot ce inseamna internetul romanesc, de la administrarea domeniilor .ro si pana la web hosting.
Tot pe acest site puteti verifica daca domeniul cautat de dvs. este disponibil, efectuand <a href="http://www.rotld.ro/" target="_blank">click aici.</a> </p>
				</div><!--ends arrowLink-->
				
				<div class="arrowLink">
					<img src="JPG/Arrows/arrow_links.jpg" alt="" border="0" width="5" height="5"/>
					&nbsp;&nbsp;
					<a href="http://www.adobe.com" target="_blank">www.adobe.com</a>
					<p>Pe site-ul Adobe puteti gasi si descarca gratuit doua programe utile si necesare azi pentru o navigare cat mai placuta pe internet. Este vorba despre <a href="http://www.adobe.com/products/acrobat/readstep2.html" target="_blank">Adobe Acrobat Reader</a> si de <a href="http://www.adobe.com/shockwave/download/download.cgi?P1_Prod_Version=ShockwaveFlash&promoid=BIOW" target="_self">Adobe Flash Player.</a> In cazul in care nu puteti sa vizualizati un site realizat in <a href="http://www.adobe.com/products/flash/" target="_blank">Adobe Flash</a>, problema e, in 90% din cazuri, lipsa programului <a href="http://www.adobe.com/shockwave/download/download.cgi?P1_Prod_Version=ShockwaveFlash&promoid=BIOW" target="_self">Adobe Flash Player</a> pe calculatorul cu care incercati sa accesati site-ul.
					<br/><br/>
					Pentru mai multe detalii, va rugam vizitati site-ul <a href="http://www.adobe.com" target="_blank">Adobe</a></p>
				</div><!--ends arrowLink-->
			
		</div><!--ends headerRightColumn-->
		
		
		<div class="headerRightColumn">
			<img src="JPG/consultanta.jpg" alt="" border="0" width="305" height="30"/>
				<div class="picConsultanta">
					<img src="JPG/pic_consultanta.jpg" alt="" border="0" width="305" height="60"/>
					<p>Fie ca doriti sa aflati cat mai multe despre ce inseamna o aplicatie web, doriti sa va rezervati un domeniu si un pachet de gazduire web, sunteti interesat/a de ce inseamna optimizare web pentru motoarele de cautare, echipa Globe-Studios va sta la dispozitie.
					<br/><br/>
 Tot ceea ce trebuie sa faceti este sa ne acordati cateva minute din timpul dvs. prin completarea unui formular de contact sau prin completarea unui formular ce consta in primul pas in directia unei prezente cat mai notabile si de impact pe internet.
 					<br/><br/>
					Va multumim!
					<br/>
					Echipa Globe-Studios</p>
				</div><!--ends picConsultanta-->
				
				<div class="completatiFormularul">
					<img src="JPG/Plusses/plus.jpg" alt="" border="0" width="13" height="14"/>
					&nbsp;&nbsp;
					<a href="contact_globe_studios.php" target="_self">completati formularul</a>				</div>
				<!--ends completatiFormularul div-->
				
				
				<div class="clearFloats">
					<!--comment-->
				</div><!--ends clearFloats div-->
				
				<hr/>
				
			
		</div><!--ends headerRightColumn-->
	
	</div><!--ends rightColumn div-->

	<div class="clearFloats">
		<!--comment-->
	</div><!--ends clearFloats div-->

</div><!--ends mainBox div-->


<div class="footerLine">
	<!--comment-->
</div><!--ends footer div-->
	<div id="footerBackground">
		
		<div id="containerFooterContent">
			<div id="containerNewsletter">
			<img src="JPG/IMG Footer/header_newsletter.jpg" alt="" border="0" width="221" height="43"/>
			<p class="whiteText">Dorim sa va tinem la curent cu ultimele stiri, tendinte, tehnologii si noutati pe care noi le descoperim pe internet, dar nu numai. Prin acest newsletter avem ocazia sa va prezentam ultimele noastre lucrari, reducerile de pret ce pot interveni si nu in ultimul rand dorim sa pastram legatura cu dvs., sperand sa va trezim interesul pentru acest domeniu vast si in continua dezvoltare, world wide web-ul.  </p>
			
			<form id="newsletter">
				<table>
					<tr>
						<td>
							<input name="casutaEmail" type="text" id="e-mail" value="adresa dumneavoastra de e-mail" size="35"/>
						</td>
						<td>
							<input type="submit" name="submit" id="trimiteBtn" value="inscriere"/>
						</td>
					</tr>
				</table>
			</form>
			
			</div><!--ends containerNewsletter-->
			
			<div id="containerContact">
				<img src="JPG/IMG Footer/header_contact.jpg" alt="" border="0" width="224" height="45"/>
				<p class="whiteText">Bulevardul Mihai Viteazul nr.30, 300222
				<br/><br/>
				Tel: 0356.108.877
				<br/><br/>
				Mobil: 0726.727.724, 0744.627.147, 0727.844.739<br/>
				<br/>
				e-mail: office@globe-studios.com
				www.globe-studios.com				</p>
				
		  </div><!--ends containerContact-->
			
			<div class="clearFloats">
				<!--comment-->
			</div>
			
		</div><!--ends containerFooterContent-->
	</div><!--ends footerBackground div-->
	
	<div id="footerBottom">
		<!--comment-->
			<div id="textFooter">
				<p class="whiteText"><p class="whiteText"><a class="whiteLinks" href="index.html" target="_self">home</a>
				&nbsp;|&nbsp;
				<a class="whiteLinks" href="despre_noi_globe_studios.html" target="_self">despre noi</a>
				&nbsp;|&nbsp;
				<a class="whiteLinks" href="servicii_globe_studios.html" target="_self">servicii</a>
				&nbsp;|&nbsp;
				<a class="whiteLinks" href="portofoliu_globe_studios.html" target="_self">portofoliu</a>
				&nbsp;|&nbsp;
				<a class="whiteLinks" href="proiecte_globe_studios.html" target="_self">proiecte</a>
				&nbsp;|&nbsp;
				<a class="whiteLinks" href="studii_de_caz_globe_studios.html" target="_self">studii de caz</a>
				&nbsp;|&nbsp;
				<a class="whiteLinks" href="contact_globe_studios.php" target="_self">contact</a>
				</p>
				<p class="whiteText">&copy; 2007 Globe-Studios
				<br/>
				site realizat pentru Mozilla Firefox 2.0.0.6 si Internet Explorer 6
				</p>
			</div><!--ends textFooter-->
			
			<div class="containerMozilla">
					<a href="http://www.spreadfirefox.com/node&amp;id=0&amp;t=213">
						<img border="0" alt="Firefox 2" title="Firefox 2" src="http://sfx-images.mozilla.org/affiliates/Buttons/firefox2/firefox-spread-btn-2.png"/>
					</a>
			</div><!--ends containerMozilla-->
			
	</div><!--ends footerBottom-->	



</body>
</html>
