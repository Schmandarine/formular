

  <?php include('header.php'); ?>


<?php


  function option_sel($wert, $value) {

    if(isset($_SESSION['post-data'][$wert]) && $_SESSION['post-data'][$wert] == $value) {
     echo 'selected';
    }
  }

  function radio_sel($wert, $value) {

    if(isset($_SESSION['post-data'][$wert]) && $_SESSION['post-data'][$wert] == $value) {
     echo 'checked="checked"';
    }
  }

  function input_val($wert) {

    if(isset($_SESSION['post-data'][$wert])) {
      echo 'value="';
      echo $_SESSION['post-data'][$wert];
      echo '"';
    }
  }



 ?>

  <header>
    <?php include('menu.php'); ?>
  </header>

  <main>
    
    <form method="post" enctype="multipart/form-data" action="form_check.php">


      <fieldset>
        <legend>Kontaktdaten:</legend>

        <table id="kontakta">

          <tr>
            <td>
              <input type="text" name="kontakt_firma" placeholder="Firma:" <?php input_val('kontakt_firma'); ?>><br>
              <input type="text" id="needed" name="kontakt_name" placeholder="Name:" <?php input_val('kontakt_name'); ?>><br>
              <input type="text" name="kontakt_strasse" placeholder="Straße:" <?php input_val('kontakt_strasse'); ?>><br>
              <input type="text" name="kontakt_plz" placeholder="Plz/Ort:" <?php input_val('kontakt_plz'); ?>><br>
            </td>
            <td>
              <input type="text" name="kontakt_datum" value="<?php echo date ("d.m.Y, h:i:s"); ?>"><br>
              <input type="text" id="needed" name="kontakt_telefon" placeholder="Telefon:" <?php input_val('kontakt_telefon'); ?>><br>
              <input type="text" name="kontakt_mobil" placeholder="Mobil:" <?php input_val('kontakt_mobil'); ?>><br>
              <input type="text" id="needed" name="kontakt_email" placeholder="E-Mail:" <?php input_val('kontakt_email'); ?>><br>
            </td>
          </tr>
          
        </table>
      </fieldset>
<br><br>

      <fieldset>
        <legend>Anforderungen:</legend>

        <table>

            <th class="bg_legend">Kraft:</th>
            <th>ausfahrend</th>
            <th>einfahrend</th>
            <th class="einheit_legend"></th>

          <tr>
            <td>Eil-Kraft:</td>
            <td><input type="number" name="eil_kraft_aus" <?php input_val('eil_kraft_aus'); ?>></td>
            <td><input type="number" name="eil_kraft_ein" <?php input_val('eil_kraft_ein'); ?>></td>
            <td>[kN]</td>
          </tr>
          <tr>
            <td>Arbeits-Kraft:</td>
            <td><input type="number" name="arbeits_kraft_aus" <?php input_val('arbeits_kraft_aus'); ?>></td>
            <td><input type="number" name="arbeits_kraft_ein" <?php input_val('arbeits_kraft_ein'); ?>></td>
            <td>[kN]</td>
          </tr>        
          <tr>
            <td>Lasthalte-Kraft:</td>
            <td><input type="number" name="lasthalte_kraft_aus" <?php input_val('lasthalte_kraft_aus'); ?>></td>
            <td><input type="number" name="lasthalte_kraft_ein" <?php input_val('lasthalte_kraft_ein'); ?>></td>
            <td>[kN]</td>
          </tr> 

          <th class="bg_legend">Weg:</th>
            <th>ausfahrend</th>
            <th>einfahrend</th>
            <th class="einheit_legend"></th>

          <tr>
            <td>Eil-Hub:</td>
            <td><input type="number" name="eil_hub_aus" <?php input_val('eil_hub_aus'); ?>></td>
            <td><input type="number" name="eil_hub_ein" <?php input_val('eil_hub_ein'); ?>></td>
            <td>[mm]</td>
          </tr>
          <tr>
            <td>Kraft-Hub:</td>
            <td><input type="number" name="kraft_hub_aus" <?php input_val('kraft_hub_aus'); ?>></td>
            <td><input type="number" name="kraft_hub_ein" <?php input_val('kraft_hub_ein'); ?>></td>
            <td>[mm]</td>
          </tr>        
          <tr>
            <td>Gesamt-Hub:</td>
            <td><input type="number" name="gesamt_hub_aus" <?php input_val('gesamt_hub_aus'); ?>></td>
            <td><input type="number" name="gesamt_hub_ein" <?php input_val('gesamt_hub_ein'); ?>></td>
            <td>[mm]</td>
          </tr> 

        </table>
        <table>

            <th class="bg_legend">Geschwindigkeit:</th>
            <th>ausfahrend</th>
            <th>einfahrend</th>
            <th class="einheit_legend"></th>

          <tr>
            <td>Eil-Hub:</td>
            <td><input type="number" name="geschw_eil_hub_aus" <?php input_val('geschw_eil_hub_aus'); ?>></td>
            <td><input type="number" name="geschw_eil_hub_ein" <?php input_val('geschw_eil_hub_ein'); ?>></td>
            <td>[mm/s]</td>
          </tr>
          <tr>
            <td>Arbeits-Hub:</td>
            <td><input type="number" name="geschw_arbeits_hub_aus" <?php input_val('geschw_arbeits_hub_aus'); ?>></td>
            <td><input type="number" name="geschw_arbeits_hub_ein" <?php input_val('geschw_arbeits_hub_ein'); ?>></td>
            <td>[mm/s]</td>
          </tr>        

        </table>
        <table>

            <th class="bg_legend">Zeiten:</th>
            <th>ausfahrend</th>
            <th>einfahrend</th>
            <th class="einheit_legend"></th>

          <tr>
            <td>Eil-Hub:</td>
            <td><input type="number" name="zeiten_eil_hub_aus" <?php input_val('zeiten_eil_hub_aus'); ?>></td>
            <td><input type="number" name="zeiten_eil_hub_ein" <?php input_val('zeiten_eil_hub_ein'); ?>></td>
            <td>[s]</td>
          </tr>
          <tr>
            <td>Arbeits-Hub:</td>
            <td><input type="number" name="zeiten_arbeits_hub_aus" <?php input_val('zeiten_arbeits_hub_aus'); ?>></td>
            <td><input type="number" name="zeiten_arbeits_hub_ein" <?php input_val('zeiten_arbeits_hub_ein'); ?>></td>
            <td>[s]</td>
          </tr>  
          <tr>
            <td>Lasthaltung / Haltezeit:</td>
            <td><input type="number" name="zeiten_haltezeit_aus" <?php input_val('zeiten_haltezeit_aus'); ?>></td>
            <td><input type="number" name="zeiten_haltezeit_ein" <?php input_val('zeiten_haltezeit_ein'); ?>></td>
            <td>[s]</td>
          </tr>        
          <tr>
            <td>Pause / Stillstand:</td>
            <td><input type="number" name="zeiten_stillstand_aus" <?php input_val('zeiten_stillstand_aus'); ?>></td>
            <td><input type="number" name="zeiten_stillstand_ein" <?php input_val('zeiten_stillstand_ein'); ?>></td>
            <td>[s]</td>
          </tr>            
          <tr>
            <td>Gesamt-Takt:</td>
            <td><input type="number" name="zeiten_gesamt_takt_aus" <?php input_val('zeiten_gesamt_takt_aus'); ?>></td>
            <td><input type="number" name="zeiten_gesamt_takt_ein" <?php input_val('zeiten_gesamt_takt_ein'); ?>></td>
            <td>[s]</td>
          </tr>  

        </table>

        <label>Gerne können Sie uns auch ein Zeit-Kraft-Weg-Diagramm beifügen.<br>Dazu finden Sie hier ein Beispiel eines solchen Diagramms.
          <input name="zeit-weg" type="file" size="50" accept="image/*"> 
        </label>  

        <table>

            <th class="bg_legend">Weiteres:</th>
            <th>ausfahrend</th>
            <th>einfahrend</th>
            <th class="einheit_legend"></th>

          <tr>
            <td>Beschleunigung (max):</td>
            <td><input type="number" name="weiter_beschl_aus" <?php input_val('weiter_beschl_aus'); ?>></td>
            <td><input type="number" name="weiter_beschl_ein" <?php input_val('weiter_beschl_ein'); ?>></td>
            <td>[m/sec&sup2;]</td>
          </tr>
          <tr>
            <td>Verzögerung (max):</td>
            <td><input type="number" name="weiter_verz_aus" <?php input_val('weiter_verz_aus'); ?>></td>
            <td><input type="number" name="weiter_verz_ein" <?php input_val('weiter_verz_ein'); ?>></td>
            <td>[m/sec&sup2;]</td>
          </tr>  
          <tr>
            <td>Querkräfte:</td>
            <td><input type="number" name="weiter_querkr_aus" <?php input_val('weiter_querkr_aus'); ?>></td>
            <td><input type="number" name="weiter_querkr_ein" <?php input_val('weiter_querkr_ein'); ?>></td>
            <td>[kN]</td>
          </tr>        
          <tr>
            <td>Pos-.Genauigkeit</td>
            <td colspan="2"><input type="number" name="weiter_genauig" <?php input_val('weiter_genauig'); ?>></td>
            <td>[&micro;m]</td>
          </tr>            
          <tr>
            <td>bewegte Massen:</td>
            <td colspan="2"><input type="number" name="weiter_massen" <?php input_val('weiter_massen'); ?>></td>
            <td>[kg]</td>
          </tr>  

        </table>   


        <table>

            <th class="bg_legend">Optionen:</th>
            <th>ausfahrend</th>
            <th>einfahrend</th>
            <th class="einheit_legend">el. Signal</th>

          <tr>
            <td>Kraftmessung:</td>
            <td><select name="kraftmessung_aus"><option value="nein" <?php option_sel('kraftmessung_aus', 'nein'); ?>>nein</option><option value="ja" <?php option_sel('kraftmessung_aus', 'ja'); ?>>ja</option></select></td>
            <td><select name="kraftmessung_ein"><option value="nein" <?php option_sel('kraftmessung_ein', 'nein'); ?>>nein</option><option value="ja" <?php option_sel('kraftmessung_ein', 'ja'); ?>>ja</option></select></td>
            <td>
            <select name="kraftmessung_signal">
              <option value="4-20mA"<?php option_sel('kraftmessung_signal', '4-20mA'); ?> >4-20mA</option>
              <option value="0V–10V" <?php option_sel('kraftmessung_signal', '0V–10V'); ?> >0V–10V</option>            
              <option value="10V–0V" <?php option_sel('kraftmessung_signal', '10V–0V'); ?> >10V–0V</option>            
              <option value="10V–+10V" <?php option_sel('kraftmessung_signal', '10V–+10V'); ?> >10V–+10V</option>
              <option value="andere" <?php option_sel('kraftmessung_signal', 'andere'); ?> >andere </option>            
            </select></td>
          </tr>
          <tr>
            <td>Wegmessung:</td>
            <td colspan="2"><select name="wegmessung_aus_ein"><option value="nein" <?php option_sel('wegmessung_aus_ein', 'nein'); ?>>nein</option><option value="ja" <?php option_sel('wegmessung_aus_ein', 'ja'); ?>>ja</option></select></td>
            <td>
              <select name="wegmessung_signal">
                <option value="SSI" <?php option_sel('wegmessung_signal', 'SSI'); ?>>SSI</option>
                <option value="4-20mA" <?php option_sel('wegmessung_signal', '4-20mA'); ?>>4-20mA</option>
                <option value="20-4mA" <?php option_sel('wegmessung_signal', '20-4mA'); ?>>20-4mA</option>
                <option value="0V–10V" <?php option_sel('wegmessung_signal', '0V–10V'); ?>>0V–10V</option>
                <option value="10V–0V" <?php option_sel('wegmessung_signal', '10V–0V'); ?>>10V–0V</option>
                <option value="10V-+10V" <?php option_sel('wegmessung_signal', '10V-+10V'); ?>>10V–+10V</option>
                <option value="CANopen" <?php option_sel('wegmessung_signal', 'CANopen'); ?>>CANopen</option>
                <option value="ProfiNET" <?php option_sel('wegmessung_signal', 'ProfiNET'); ?>>ProfiNET</option>
                <option value="EtherCAT" <?php option_sel('wegmessung_signal', 'EtherCAT'); ?>>EtherCAT</option>
                <option value="andere" <?php option_sel('wegmessung_signal', 'andere'); ?>>andere</option>
              </select>
            </td>
          </tr>  
          <tr>
            <td>Kabellänge:<small>Standardlänge 5m</small></td>
            <td colspan="2">
              <select name="kabellaenge">
                <option value="5" <?php option_sel('kabellaenge', '5'); ?>>5</option>
                <option value="10" <?php option_sel('kabellaenge', '10'); ?>>10</option>
                <option value="15" <?php option_sel('kabellaenge', '15'); ?>>15</option>
                <option value="20" <?php option_sel('kabellaenge', '20'); ?>>20</option>
                <option value="25" <?php option_sel('kabellaenge', '25'); ?>>25</option>
                <option value="40" <?php option_sel('kabellaenge', '40'); ?>>40</option>
                <option value="50" <?php option_sel('kabellaenge', '50'); ?>>50</option>
                <option value="andere" <?php option_sel('kabellaenge', 'andere'); ?>>andere</option>
              </select>
            </td>
            <td>[m]</td>
          </tr>         

        </table> 

        <table>

            <th class="bg_legend">Umweltbedingungen:</th>
            <th></th>
            <th colspan="2" class="einheit_legend"></th>

          <tr>
            <td>Umgebungstemp. (max/min):</td>
            <td><input type="text" name="umgebungstemp" <?php input_val('umgebungstemp'); ?>></td>
            <td>[C]</td>                     
          </tr>
          <tr>
            <td>Luftfeuchtigkeit:</td>
            <td><input type="text" name="luftfeuchtigkeit" <?php input_val('luftfeuchtigkeit'); ?>></td>
            <td>[%]</td>                     
          </tr>
          <tr>
            <td>Lebensmitteltauglich:</td>
            <td colspan="2"><select name="lebensmitteltauglich"><option value="nein" <?php option_sel('lebensmitteltauglich', 'nein'); ?>>nein</option><option value="ja" value="nein" <?php option_sel('lebensmitteltauglich', 'ja'); ?>>ja</option></select></td>                   
          </tr> 
          <tr>
            <td>Ex-Schutz:</td>
            <td colspan="2"><select name="exschutz"><option value="nein" <?php option_sel('exschutz', 'nein'); ?>>nein</option><option value="ja" <?php option_sel('exschutz', 'ja'); ?>>ja</option></select></td>                   
          </tr>                    
       

        </table> 


        <table>

            <th class="bg_legend">Stromversorgung:</th>
            <th></th>

          <tr>
            <td>Stromart / Spannung:</td>
            <td>
              <select name="stromart">
                <option value="Drehstrom-400V" <?php option_sel('stromart', 'Drehstrom-400V'); ?>>Drehstrom 400V</option>
                <option value="Wechselstrom-230V" <?php option_sel('stromart', 'Wechselstrom-230V'); ?>>Wechselstrom 230V</option>
                <option value="Wechselstrom-24V" <?php option_sel('stromart', 'Wechselstrom-24V'); ?>>Wechselstrom 24V</option>
                <option value="Gleichstrom-24V" <?php option_sel('stromart', 'Gleichstrom-24V'); ?>>Gleichstrom 24V</option>
                <option value="Gleichstrom-12V" <?php option_sel('stromart', 'Gleichstrom-12V'); ?>>Gleichstrom 12V</option>
                <option value="andere" <?php option_sel('stromart', 'andere'); ?>>andere</option>
              </select>
            </td>                   
          </tr>
          <tr>
            <td>Frequenz:</td>
            <td>
              <select name="frequenz">
                <option value="50-Hz" <?php option_sel('frequenz', '50-Hz'); ?>>50 Hz</option>
                <option value="60-Hz" <?php option_sel('frequenz', '60-Hz'); ?>>60 Hz</option>
                <option value="andere" <?php option_sel('frequenz', 'andere'); ?>>andere</option>
              </select>
            </td>
          </tr>
          <tr>
            <td>Schutzart:</td>
            <td>
              <select name="schutzart">
                <option value="IP54 (staubgeschützt / Spritzwasser)" <?php option_sel('schutzart', 'IP54 (staubgeschützt / Spritzwasser)'); ?>>IP54 (staubgeschützt / Spritzwasser)</option>
                <option value="IP55 (staubgeschützt / Strahlwasser)" <?php option_sel('schutzart', 'IP55 (staubgeschützt / Strahlwasser)'); ?>>IP55 (staubgeschützt / Strahlwasser)</option>                
                <option value="IP56 (staubgeschützt / starkes Strahlwasser)" <?php option_sel('schutzart', 'IP56 (staubgeschützt / starkes Strahlwasser)'); ?>>IP56 (staubgeschützt / starkes Strahlwasser)</option>   
                <option value="IP65 (staubdicht / Strahlwasser)" <?php option_sel('schutzart', 'IP65 (staubdicht / Strahlwasser)'); ?>>IP65 (staubdicht / Strahlwasser)</option>        
                <option value="IP66 (staubdicht / starkes Strahlwasser)" <?php option_sel('schutzart', 'IP66 (staubdicht / starkes Strahlwasser)'); ?>>IP66 (staubdicht / starkes Strahlwasser)</option>  
                <option value="IP67 (staubdicht / zeitweiliges untertauchen)" <?php option_sel('schutzart', 'IP67 (staubdicht / zeitweiliges untertauchen)'); ?>>IP67 (staubdicht / zeitweiliges untertauchen)</option>
                <option value="IP68 (staubdicht / Wasserdicht)" <?php option_sel('schutzart', 'IP68 (staubdicht / Wasserdicht)'); ?>>IP68 (staubdicht / Wasserdicht)</option>               
                <option value="IP69 (staubdicht / Druckwasserdicht)" <?php option_sel('schutzart', 'IP69 (staubdicht / Druckwasserdicht)'); ?>>IP69 (staubdicht / Druckwasserdicht)</option>      
                <option value="IP69K ( Kärcherdicht)" <?php option_sel('schutzart', 'IP69K ( Kärcherdicht)'); ?>>IP69K ( Kärcherdicht)</option>                
              </select>
            </td>                   
          </tr>                   
       

        </table> 

        <table id="einbaulage">

            <th class="bg_legend">Einbaulage:</th>
            <th><input <?php radio_sel('einbaulage', 'img/unten.jpg'); ?> type="hidden" name="einbaulage" >
                <input <?php radio_sel('einbaulage', 'img/beliebig.jpg'); ?> type="radio" name="einbaulage" value="img/beliebig.jpg" checked="checked" /></th>
            <th><input <?php radio_sel('einbaulage', 'img/oben.jpg'); ?> type="radio" name="einbaulage" value="img/oben.jpg"/></th>
            <th><input <?php radio_sel('einbaulage', 'img/seitlich.jpg'); ?> type="radio" name="einbaulage" value="img/seitlich.jpg"/></th>
            <th><input <?php radio_sel('einbaulage', 'img/unten.jpg'); ?> type="radio" name="einbaulage" value="img/unten.jpg"/></th>

          <tr>
            <td></td>
            <td><img src="img/beliebig.jpg"></td>
            <td><img src="img/oben.jpg"></td>
            <td><img src="img/seitlich.jpg"></td>
            <td><img src="img/unten.jpg"></td>                 
          </tr>         
       

        </table> 


        <table>

            <th class="bg_legend">Befestigung:</th>
            <th></th>

          <tr>
            <td>Zylinder:</td>
            <td>
              <select name="befest_zylinder">
                <option value="Zylinderkopf-Schrauben-Durchgangsbohrungen" <?php option_sel('befest_zylinder', 'Zylinderkopf-Schrauben-Durchgangsbohrungen'); ?>>Zylinderkopf - Schrauben Durchgangsbohrungen</option>
                <option value="Zylinderkopf-Schrauben-Gewinde" <?php option_sel('befest_zylinder', 'Zylinderkopf-Schrauben-Gewinde'); ?>>Zylinderkopf - Schrauben Gewinde</option>
                <option value="Zylinderkopf-Feingewinde" <?php option_sel('befest_zylinder', 'Zylinderkopf-Feingewinde'); ?>>Zylinderkopf - Feingewinde</option>
                <option value="Zylinderboden-Schrauben-Gewinde" <?php option_sel('befest_zylinder', 'Zylinderboden-Schrauben-Gewinde'); ?>>Zylinderboden - Schrauben Gewinde</option>
                <option value="Zylinderboden-Feingewinde" <?php option_sel('befest_zylinder', 'Zylinderboden-Feingewinde'); ?>>Zylinderboden - Feingewinde</option>
                <option value="Drehzapfen" <?php option_sel('befest_zylinder', 'Drehzapfen'); ?>>Drehzapfen</option>
                <option value="Drehzapfen-im-Schwerpunkt" <?php option_sel('befest_zylinder', 'Drehzapfen-im-Schwerpunkt'); ?>>Drehzapfen im Schwerpunkt</option>
                <option value="Drehgelenk-am-Zylinderboden" <?php option_sel('befest_zylinder', 'Drehgelenk-am-Zylinderboden'); ?>>Drehgelenk am Zylinderboden</option>
                <option value="andere" <?php option_sel('befest_zylinder', 'andere'); ?>>andere</option>
              </select>
            </td>                   
          </tr>
          <tr>
            <td>Kolbenstange:</td>
            <td>
              <select name="kolbenstange">
                <option value="Außengewinde-Normgewinde" <?php option_sel('kolbenstange', 'Außengewinde-Normgewinde'); ?>>Außengewinde - Normgewinde</option>
                <option value="Außengewinde-Feingewinde" <?php option_sel('kolbenstange', 'Außengewinde-Feingewinde'); ?>>Außengewinde - Feingewinde</option>
                <option value="Innengewinde-Normgewinde" <?php option_sel('kolbenstange', 'Innengewinde-Normgewinde'); ?>>Innengewinde - Normgewinde</option>
                <option value="Innengewinde-Feingewinde" <?php option_sel('kolbenstange', 'Innengewinde-Feingewinde'); ?>>Innengewinde - Feingewinde</option>
                <option value="Flexible Kolbenstangenanbindung (querkraftfrei - siehe angepasstes Zubehör)" <?php option_sel('kolbenstange', 'Flexible Kolbenstangenanbindung (querkraftfrei - siehe angepasstes Zubehör)'); ?>>Flexible Kolbenstangenanbindung (querkraftfrei - siehe angepasstes Zubehör)</option>
                <option value="Drehgelenk" <?php option_sel('kolbenstange', 'Drehgelenk'); ?>>Drehgelenk</option>
                <option value="andere" <?php option_sel('kolbenstange', 'andere'); ?>>andere</option>
              </select>
            </td>
          </tr>                
       

        </table> 


        <table>

            <th class="bg_legend">Bedarf:</th>
            <th></th>
            <th></th>

          <tr>
            <td>einmalig:</td>
            <td>
              <select name="bedarf">
                <option value="?" <?php option_sel('bedarf', '?'); ?>>?</option>
                <option value="5" <?php option_sel('bedarf', '5'); ?>>5</option>
                <option value="10" <?php option_sel('bedarf', '10'); ?>>10</option>
                <option value="20" <?php option_sel('bedarf', '20'); ?>>20</option>
                <option value="30" <?php option_sel('bedarf', '30'); ?>>30</option>
                <option value="40" <?php option_sel('bedarf', '40'); ?>>40</option>
                <option value="50" <?php option_sel('bedarf', '50'); ?>>50</option>
                <option value="60" <?php option_sel('bedarf', '60'); ?>>60</option>
                <option value="70" <?php option_sel('bedarf', '70'); ?>>70</option>
                <option value="80" <?php option_sel('bedarf', '80'); ?>>80</option>
                <option value="90" <?php option_sel('bedarf', '90'); ?>>90</option>
                <option value="100" <?php option_sel('bedarf', '100'); ?>>100</option>
                <option value="100+" <?php option_sel('bedarf', '100+'); ?>>100+</option>
              </select>
            </td>  
            <td>Stück</td>                 
          </tr>
          <tr>
            <td>wiederkehrend<i>Serie</i></td>
            <td>
              <select name="wiederkehrend"> 
                <option value="?" <?php option_sel('wiederkehrend', '?'); ?>>?</option>
                <option value="5" <?php option_sel('wiederkehrend', '5'); ?>>5</option>
                <option value="10" <?php option_sel('wiederkehrend', '10'); ?>>10</option>
                <option value="20" <?php option_sel('wiederkehrend', '20'); ?>>20</option>
                <option value="30" <?php option_sel('wiederkehrend', '30'); ?>>30</option>
                <option value="40" <?php option_sel('wiederkehrend', '40'); ?>>40</option>
                <option value="50" <?php option_sel('wiederkehrend', '50'); ?>>50</option>
                <option value="60" <?php option_sel('wiederkehrend', '60'); ?>>60</option>
                <option value="70" <?php option_sel('wiederkehrend', '70'); ?>>70</option>
                <option value="80" <?php option_sel('wiederkehrend', '80'); ?>>80</option>
                <option value="90" <?php option_sel('wiederkehrend', '90'); ?>>90</option>
                <option value="100" <?php option_sel('wiederkehrend', '100'); ?>>100</option>
                <option value="100+" <?php option_sel('wiederkehrend', '100+'); ?>>100+</option>
              </select>
            </td>
            <td>ca. Stück/ Jahr</td>
          </tr>                
       

        </table> 


        <table>

            <th class="bg_legend">weitere relevante Angaben:</th>

          <tr>
            <td><textarea name="weiteres"><?php if(isset($_SESSION['post-data']['weiteres'])){ echo $_SESSION['post-data']['weiteres']; } ?></textarea></td>
          </tr>                
       

        </table> 




      </fieldset>

      <input type="submit" value="Speichern" target="_blank">
      <a href="session_reset.php">Daten löschen</a>


    </form>


  </main>

  <footer></footer>





  <?php include('footer.php'); ?>