<?php

session_start();
// Variablen für ---  Anschrift

$kontakt_firma = $_POST["kontakt_firma"];
$kontakt_name = $_POST["kontakt_name"];
$kontakt_strasse = $_POST["kontakt_strasse"];
$kontakt_plz = $_POST["kontakt_plz"];

$kontakt_datum = $_POST["kontakt_datum"];
$kontakt_telefon = $_POST["kontakt_telefon"];
$kontakt_mobil = $_POST["kontakt_mobil"];
$kontakt_email = $_POST["kontakt_email"];

// Variablen für ---  Kraft

$eil_kraft_aus = $_POST["eil_kraft_aus"];
$eil_kraft_ein = $_POST["eil_kraft_ein"];

$arbeits_kraft_aus = $_POST["arbeits_kraft_aus"];
$arbeits_kraft_ein = $_POST["arbeits_kraft_ein"];

$lasthalte_kraft_aus = $_POST["lasthalte_kraft_aus"];
$lasthalte_kraft_ein = $_POST["lasthalte_kraft_ein"];

// Variablen für ---  Weg

$eil_hub_aus = $_POST["eil_hub_aus"];
$eil_hub_ein = $_POST["eil_hub_ein"];

$kraft_hub_aus = $_POST["kraft_hub_aus"];
$kraft_hub_ein = $_POST["kraft_hub_ein"];

$gesamt_hub_aus = $_POST["gesamt_hub_aus"];
$gesamt_hub_ein = $_POST["gesamt_hub_ein"];

// Variablen für ---  Geschwindigkeit

$geschw_eil_hub_aus = $_POST["geschw_eil_hub_aus"];
$geschw_eil_hub_ein = $_POST["geschw_eil_hub_ein"];

$geschw_arbeits_hub_aus = $_POST["geschw_arbeits_hub_aus"];
$geschw_arbeits_hub_ein = $_POST["geschw_arbeits_hub_ein"];

// Variablen für ---  Zeiten

$zeiten_eil_hub_aus = $_POST["zeiten_eil_hub_aus"];
$zeiten_eil_hub_ein = $_POST["zeiten_eil_hub_ein"];

$zeiten_arbeits_hub_aus = $_POST["zeiten_arbeits_hub_aus"];
$zeiten_arbeits_hub_ein = $_POST["zeiten_arbeits_hub_ein"];

$zeiten_haltezeit_aus = $_POST["zeiten_haltezeit_aus"];
$zeiten_haltezeit_ein = $_POST["zeiten_haltezeit_ein"];

$zeiten_stillstand_aus = $_POST["zeiten_stillstand_aus"];
$zeiten_stillstand_ein = $_POST["zeiten_stillstand_ein"];

$zeiten_gesamt_takt_aus = $_POST["zeiten_gesamt_takt_aus"];
$zeiten_gesamt_takt_ein = $_POST["zeiten_gesamt_takt_ein"];

// Variablen für ---  Weiteres

$weiter_beschl_aus = $_POST["weiter_beschl_aus"];
$weiter_beschl_ein = $_POST["weiter_beschl_ein"];

$weiter_verz_aus = $_POST["weiter_verz_aus"];
$weiter_verz_ein = $_POST["weiter_verz_ein"];

$weiter_querkr_aus = $_POST["weiter_querkr_aus"];
$weiter_querkr_ein = $_POST["weiter_querkr_ein"];

$weiter_genauig = $_POST["weiter_genauig"];
$weiter_massen = $_POST["weiter_massen"];


// Variablen für ---  Kraftmessung

$kraftmessung_aus = $_POST["kraftmessung_aus"];
$kraftmessung_ein = $_POST["kraftmessung_ein"];
$kraftmessung_signal = $_POST["kraftmessung_signal"];

$wegmessung_aus_ein = $_POST["wegmessung_aus_ein"];
$wegmessung_signal = $_POST["wegmessung_signal"];
$kabellaenge = $_POST["kabellaenge"];


// Variablen für ---  Umweltbedingungen

$umgebungstemp = $_POST["umgebungstemp"];
$luftfeuchtigkeit = $_POST["luftfeuchtigkeit"];
$lebensmitteltauglich = $_POST["lebensmitteltauglich"];
$exschutz = $_POST["exschutz"];


// Variablen für ---  Stromversorgung

$stromart = $_POST["stromart"];
$frequenz = $_POST["frequenz"];
$schutzart = $_POST["schutzart"];

// Variablen für ---  Einbaulage

$einbaulage = $_POST["einbaulage"];


// Variablen für ---  Zylinder

$befest_zylinder = $_POST["befest_zylinder"];

// Variablen für ---  Kolbenstange

$kolbenstange = $_POST["kolbenstange"];

// Variablen für ---  Bedarf

$bedarf = $_POST["bedarf"];
$wiederkehrend = $_POST["wiederkehrend"];

// Variablen für ---  weiteres

$weiteres = $_POST["weiteres"];


$_SESSION['post-data'] = $_POST;




if ($_FILES["zeit-weg"]["name"] != "") {


  $dateitypen = array("image/png", "image/jpeg", "image/gif");

  if ( ! in_array( $_FILES["zeit-weg"]["type"], $dateitypen ) ) {
    echo "Dateityp falsch";
  } else {

  $_FILES["zeit-weg"]["name"] = dateiname_bereinigen( $_FILES["zeit-weg"]["name"] );  

    if ($_FILES["zeit-weg"]["name"] != "") {

      move_uploaded_file($_FILES["zeit-weg"]["tmp_name"], "uploads/".$_FILES["zeit-weg"]["name"]);

        

    } else {
      $uploaded = "funktion fehlerhaft";
    }

    }
}



function dateiname_bereinigen($dateiname)
{
    // erwünschte Zeichen erhalten bzw. umschreiben
    // aus allen ä wird ae, ü -> ue, ß -> ss (je nach Sprache mehr Aufwand)
    // und sonst noch ein paar Dinge (ist schätzungsweise mein persönlicher Geschmach ;)
    $dateiname = strtolower ( $dateiname );
    $dateiname = str_replace ('"', "-", $dateiname );
    $dateiname = str_replace ("'", "-", $dateiname );
    $dateiname = str_replace ("*", "-", $dateiname );
    $dateiname = str_replace ("ß", "ss", $dateiname );
    $dateiname = str_replace ("ß", "ss", $dateiname );
    $dateiname = str_replace ("ä", "ae", $dateiname );
    $dateiname = str_replace ("ä", "ae", $dateiname );
    $dateiname = str_replace ("ö", "oe", $dateiname );
    $dateiname = str_replace ("ö", "oe", $dateiname );
    $dateiname = str_replace ("ü", "ue", $dateiname );
    $dateiname = str_replace ("ü", "ue", $dateiname );
    $dateiname = str_replace ("Ä", "ae", $dateiname );
    $dateiname = str_replace ("Ö", "oe", $dateiname );
    $dateiname = str_replace ("Ü", "ue", $dateiname );
    $dateiname = htmlentities ( $dateiname );
    $dateiname = str_replace ("&", "und", $dateiname );
    $dateiname = str_replace ("+", "und", $dateiname );
    $dateiname = str_replace ("(", "-", $dateiname );
    $dateiname = str_replace (")", "-", $dateiname );
    $dateiname = str_replace (" ", "-", $dateiname );
    $dateiname = str_replace ("\'", "-", $dateiname );
    $dateiname = str_replace ("/", "-", $dateiname );
    $dateiname = str_replace ("?", "-", $dateiname );
    $dateiname = str_replace ("!", "-", $dateiname );
    $dateiname = str_replace (":", "-", $dateiname );
    $dateiname = str_replace (";", "-", $dateiname );
    $dateiname = str_replace (",", "-", $dateiname );
    $dateiname = str_replace ("--", "-", $dateiname );
 
    // und nun jagen wir noch die Heilfunktion darüber
    $dateiname = filter_var($dateiname, FILTER_SANITIZE_URL);
    return ($dateiname);
}



$pdfAuthor = "EH-D Antriebe";
$the_date = date("Ymd");

$pdfName = $kontakt_firma.'_'.$the_date.'.pdf';


$html = '
<table border="0" cellpadding="0" cellspacing="10" style="font-size: 7pt; width: 100%;">
  <tr>
    <td>

      <table id="kontakta" style="font-size:9pt">

          <tr>
            <td>
              '.$kontakt_firma.'<br>
              '.$kontakt_name.'<br>
              '.$kontakt_strasse.'<br>
              '.$kontakt_plz.'<br>
              Tel.: '.$kontakt_telefon.'<br>
              Mobil: '.$kontakt_mobil.'<br>
              '.$kontakt_email.'<br>
            </td>
          </tr>
          
        </table>

    </td>
    <td width="50%" style="text-align:left;font-size:9pt">
      <img src="img/logo_eh-d.png">
      Datum: '.$kontakt_datum.'<br>
    </td>
  </tr>

<tr>
<td width="50%">

  <table border="1" cellpadding="5" style="background-color: silver; width: 100%; font-size:18px;">

        <tr>
            <td><b>Anforderungen:</b></td>
        </tr>

    </table><br><br>

    <table border="1" cellpadding="5" style="width:100%;">

        <tr>
            <td style="background-color: silver; width: 35%;"><b>Kraft:</b></td>
            <td>ausfahrend</td>
            <td>einfahrend</td>
            <td style="width: 15%;"></td>
        </tr>

          <tr>
            <td>Eil-Kraft:</td>
            <td>'.$eil_kraft_aus.'</td>
            <td>'.$eil_kraft_ein.'</td>
            <td>[kN]</td>
          </tr>
          <tr>
            <td>Arbeits-Kraft:</td>
            <td>'.$arbeits_kraft_aus.'</td>
            <td>'.$arbeits_kraft_ein.'</td>
            <td>[kN]</td>
          </tr>        
          <tr>
            <td>Lasthalte-Kraft:</td>
            <td>'.$lasthalte_kraft_aus.'</td>
            <td>'.$lasthalte_kraft_ein.'</td>
            <td>[kN]</td>
          </tr> 

            <tr>

            <td style="background-color: silver"><b>Weg:</b></td>
            <td>ausfahrend</td>
            <td>einfahrend</td>
            <td class="einheit_legend"></td>

            </tr>

          <tr>
            <td>Eil-Hub:</td>
            <td>'.$eil_hub_aus.'</td>
            <td>'.$eil_hub_ein.'</td>
            <td>[mm]</td>
          </tr>
          <tr>
            <td>Kraft-Hub:</td>
            <td>'.$kraft_hub_aus.'</td>
            <td>'.$kraft_hub_ein.'</td>
            <td>[mm]</td>
          </tr>        
          <tr>
            <td>Gesamt-Hub:</td>
            <td>'.$gesamt_hub_aus.'</td>
            <td>'.$gesamt_hub_ein.'</td>
            <td>[mm]</td>
          </tr> 

    </table><br><br>
    <table border="1" cellpadding="5" style="width:100%; ">

        <tr>
            <td style="background-color: silver; width: 35%;"><b>Geschwindigkeit:</b></td>
            <td>ausfahrend</td>
            <td>einfahrend</td>
            <td style="width: 15%;"></td>
        </tr>

          <tr>
            <td>Eil-Kraft:</td>
            <td>'.$geschw_eil_hub_aus.'</td>
            <td>'.$geschw_eil_hub_ein.'</td>
            <td>[mm/s]</td>
          </tr>
          <tr>
            <td>Arbeits-Kraft:</td>
            <td>'.$geschw_arbeits_hub_aus.'</td>
            <td>'.$geschw_arbeits_hub_ein.'</td>
            <td>[mm/s]</td>
          </tr>        

    </table>
    <br><br>
    <table border="1" cellpadding="5" style="width:100%; ">
        <tr>
            <td style="background-color: silver; width: 35%;"><b>Zeiten:</b></td>
            <td>ausfahrend</td>
            <td>einfahrend</td>
            <td style="width: 15%;"></td>
        </tr>
          <tr>
            <td>Eil-Hub:</td>
            <td>'.$zeiten_eil_hub_aus.'</td>
            <td>'.$zeiten_eil_hub_ein.'</td>
            <td>[s]</td>
          </tr>
          <tr>
            <td>Arbeits-Hub:</td>
            <td>'.$zeiten_arbeits_hub_aus.'</td>
            <td>'.$zeiten_arbeits_hub_ein.'</td>
            <td>[s]</td>
          </tr>  
          <tr>
            <td>Lasthaltung / Haltezeit:</td>
            <td>'.$zeiten_haltezeit_aus.'</td>
            <td>'.$zeiten_haltezeit_ein.'</td>
            <td>[s]</td>
          </tr>        
          <tr>
            <td>Pause / Stillstand:</td>
            <td>'.$zeiten_stillstand_aus.'</td>
            <td>'.$zeiten_stillstand_ein.'</td>
            <td>[s]</td>
          </tr>            
          <tr>
            <td>Gesamt-Takt:</td>
            <td>'.$zeiten_gesamt_takt_aus.'</td>
            <td>'.$zeiten_gesamt_takt_ein.'</td>
            <td>[s]</td>
          </tr>  

        </table>
        <br><br>
    <table border="1" cellpadding="5" style="width:100%; ">
        <tr>
            <td style="background-color: silver; width: 35%;"><b>Zeit-Weg Diagramm:</b></td>
            <td><a href="uploads/'. $_FILES['zeit-weg']['name'] .'">'. $_FILES['zeit-weg']['name'] .'</a></td>
            <td></td>
        </tr>

        </table><br><br>
        <table border="1" cellpadding="5" style="width:100%; ">
        <tr>
            <td style="background-color: silver; width: 35%;"><b>Weiteres:</b></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td colspan="3">'.$weiteres.'</td>
        </tr>

        </table>




</td>
<td width="50%">

<table border="1" cellpadding="5" style="width:100%;float: left; ">

        <tr>
            <td style="background-color: silver; width: 35%;"><b>Weiteres:</b></td>
            <td>ausfahrend</td>
            <td>einfahrend</td>
            <td style="width: 15%;"></td>
        </tr>

          <tr>
            <td>Beschleunigung (max):</td>
            <td>'.$weiter_beschl_aus.'</td>
            <td>'.$weiter_beschl_ein.'</td>
            <td>[m/sec&sup2;]</td>
          </tr>
          <tr>
            <td>Verzögerung (max):</td>
            <td>'.$weiter_verz_aus.'</td>
            <td>'.$weiter_verz_ein.'</td>
            <td>[m/sec&sup2;]</td>
          </tr>  
          <tr>
            <td>Querkräfte:</td>
            <td>'.$weiter_querkr_aus.'</td>
            <td>'.$weiter_querkr_ein.'</td>
            <td>[kN]</td>
          </tr>        
          <tr>
            <td>Pos-.Genauigkeit</td>
            <td colspan="2">'.$weiter_genauig.'</td>
            <td>[&micro;m]</td>
          </tr>            
          <tr>
            <td>bewegte Massen:</td>
            <td colspan="2">'.$weiter_massen.'</td>
            <td>[kg]</td>
          </tr>  

        </table>  
        <br><br> 
        <table border="1" cellpadding="5" style="width:100%;float: left; ">
                <tr>
                    <td style="background-color: silver; width: 35%;"><b>Optionen:</b></td>
                    <td>ausfahrend</td>
                    <td>einfahrend</td>
                    <td style="width: 15%;">el. Signal</td>
             </tr>
          <tr>
            <td>Kraftmessung:</td>
            <td>'.$kraftmessung_aus.'</td>
            <td>'.$kraftmessung_ein.'</td>
            <td>'.$kraftmessung_signal.'</td>
          </tr>
          <tr>
            <td>Wegmessung:</td>
            <td colspan="2">'.$wegmessung_aus_ein.'</td>
            <td>'.$wegmessung_signal.'</td>
          </tr>  
          <tr>
            <td>Kabellänge: <small>Standardlänge 5m</small></td>
            <td colspan="2">'.$kabellaenge.'</td>
            <td>[m]</td>
          </tr>         
        </table>
        <br><br> 
        <table border="1" cellpadding="5" style="width:100%;float: left; ">
            <tr>
            <td style="background-color: silver; width: 35%;"><b>Umweltbedingungen:</b></td>
            <td colspan="2" ></td>
        </tr>
          <tr>
            <td>Umgebungstemp. (max/min):</td>
            <td>'.$umgebungstemp.'</td>
            <td>[C]</td>                     
          </tr>
          <tr>
            <td>Luftfeuchtigkeit:</td>
            <td>'.$luftfeuchtigkeit.'</td>
            <td>[%]</td>                     
          </tr>
          <tr>
            <td>Lebensmitteltauglich:</td>
            <td colspan="2">'.$lebensmitteltauglich.'</td>                   
          </tr> 
          <tr>
            <td>Ex-Schutz:</td>
            <td colspan="2">'.$exschutz.'</td>                   
          </tr>                    
       

        </table> 
        <br><br>
        <table border="1" cellpadding="5" style="width:100%;float: left; ">
          <tr>
            <td style="background-color: silver; width: 35%;"><b>Stromversorgung:</b></td>
            <td></td>
          </tr>
          <tr>
            <td>Stromart / Spannung:</td>
            <td>'.$stromart.'</td>                   
          </tr>
          <tr>
            <td>Frequenz:</td>
            <td>'.$frequenz.'</td>
          </tr>
          <tr>
            <td>Schutzart:</td>
            <td>'.$schutzart.'</td>                   
          </tr>                   
       

        </table> 
        <br><br>
        <table border="1" cellpadding="5" style="width:100%;">
          <tr>
            <td style="background-color: silver;"><b>Einbaulage:</b></td>
            <td><img src="'.$einbaulage.'"></td>                   
          </tr>
                 
        </table>
        <br><br>
        <table border="1" cellpadding="5" style="width:100%;">
          <tr>
            <td style="background-color: silver; width: 35%;"><b>Befestigung:</b></td>
            <td></td>
          </tr>
          <tr>
            <td>Zylinder:</td>
            <td>'.$befest_zylinder.'</td>                   
          </tr>
          <tr>
            <td>Kolbenstange:</td>
            <td>'.$kolbenstange.'</td>
          </tr>                

        </table>  


</td>
</tr>
</table>


';
   

//////////////////////////// Erzeugung eures PDF Dokuments \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\

// TCPDF Library laden
require_once('tcpdf/tcpdf.php');

// Erstellung des PDF Dokuments
$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

// Dokumenteninformationen
$pdf->SetCreator(PDF_CREATOR);
$pdf->SetAuthor($pdfAuthor);
$pdf->SetTitle('Rechnung ');
$pdf->SetSubject('Rechnung ');


// Header und Footer Informationen
$pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
$pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));

// Auswahl des Font
$pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);


// Automatisches Autobreak der Seiten
$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

// Image Scale 
$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

// Schriftart
$pdf->SetFont('dejavusans', '', 10);

// Neue Seite
$pdf->AddPage();

// Fügt den HTML Code in das PDF Dokument ein
$pdf->writeHTML($html, true, false, true, false, '');

//Ausgabe der PDF

//Variante 1: PDF direkt an den Benutzer senden:
$pdf->Output($pdfName, 'I');

//Variante 2: PDF im Verzeichnis abspeichern:
$pdf->Output(dirname(__FILE__).'/anfrageformulare/'.$pdfName, 'F');
//echo 'PDF herunterladen: <a href="'.$pdfName.'">'.$pdfName.'</a>';





?>