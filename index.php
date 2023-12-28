<!DOCTYPE html>
<html lang="sk">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="keywords" content="TUKE LF, Informatika" />
    <meta name="author" content="Viktor Pšenák" />
    <meta name="description" content="Táto stránka je semestrálne zadanie" />
    <link rel="icon" href="obrazky/logo.png" />
    <title>AEROSHOP</title>
    <link rel="stylesheet" href="styl.css" />
  </head>

  <body>
  <?php
        require('./database.php');
        $meno = htmlspecialchars($_POST["Meno"]);
        $priezvisko = htmlspecialchars($_POST["Priezvisko"]);
        $lietadlo = htmlspecialchars($_POST["typ"]);
        $pocet = intval(htmlspecialchars($_POST["množstvo"]));
        if(!empty($_POST['Meno'])){
            $prikaz = "INSERT INTO `objednavky` (`id_form`, `meno`, `priezvisko`, `typ`, `mnozstvo`) VALUES (NULL, '$meno', '$priezvisko', '$lietadlo', '$pocet');";
            $conn->query($prikaz);
        }
        ?>
    <div class="cela">
      <div class="panel">
        <div class="text">
          <h1>
            <a href="index.php"><img src="obrazky/logo.png" alt="logo" /></a>
            Aeroshop
          </h1>
          <p>Váš EASA certifikovaný díler lietadiel</p>
        </div>
      </div>
      <header class="Menu">
        <div class="text">
          <ul>
            <li><a href="#sekcia-a320" class="tlacidlo">A320</a></li>
            <li><a href="#sekcia-b737" class="tlacidlo">B737</a></li>
            <li><a href="#sekcia-a380" class="tlacidlo">A380</a></li>
            <li><a href="#sekcia-b747" class="tlacidlo">B747</a></li>
            <li><a href="#kontakt" class="tlacidlo">Kontaktujte nás</a></li>
            <li>
              <a href="mailto:viktor.psenak@student.tuke.sk" class="tlacidlo"
                >Email</a
              >
            </li>
          </ul>
        </div>
      </header>
      <div class="obsah">
        <div class="text">
          <h2>Ponuka</h2>
          <p>
            roku 2023 sme prešli troma dňami intenzívneho vývoju a Vašu
            objednávku Vám teraz vieme doručiť kuriérom UPS, GLS alebo službou
            Packeta. Platba iba vopred. V kategórii najdôveryhodnejší predajca
            roka 2023 sme sa neumiestnili na žiadnom mieste, keďže o nás zatiaľ
            nikto nevie, buďte preto prvý, kto využije naše služby!
            <br /><br />&copy; Aeroshop 2023
          </p>
          <h3 id="sekcia-a320">A320</h3>
          <p>
            Boeing 737 je dvojprúdové úzkotrupové dopravné lietadlo pre krátke a
            stredné vzdialenosti. Pôvodne bol vyvíjaný ako menšie dvojprúdové
            lietadlo s nižšími nákladmi na prevádzku odvodené od Boeingu 707 a
            Boeingu 727. Nakoniec sa lietadlá Boeing 737 vyvinuli do rodiny 10
            modelov pre osobnú prepravu s kapacitou od 85 až do 220
            cestujúcich.<br /><br />
            Určite sa bude krásne hodiť do Vašej flotily! :). <br /><br />
            <b>Cena: 89mil.&euro;</b>
          </p>
          <img src="obrazky/A320.jpg" alt="Airbus 320" class="obrazok" />
          <a href="podstranky/male.html" class="tlacidlo">Chcem vedieť viac</a>
          <a href="#" class="tlacidlo">Naspäť</a>
          <h3 id="sekcia-b737">B737</h3>
          <p>
            Airbus A320 je civilné dopravné lietadlo pre krátke a stredné trate
            vyrábané firmou Airbus. Bolo to prvé civilné dopravné lietadlo s
            digitálnym riadiacim systémom fly-by-wire. <br /><br />
            Určite sa bude krásne hodiť do Vašej flotily! :). <br /><br />
            <b>Cena: 85mil.&euro;</b>
          </p>
          <img src="obrazky/B737.jpg" alt="Boeing 737" class="obrazok" />
          <a href="podstranky/male.html" class="tlacidlo">Chcem vedieť viac</a>
          <a href="#" class="tlacidlo">Naspäť</a>

          <h3 id="sekcia-a380">A380</h3>
          <p>
            Airbus A380 je dvojposchodové, štvormotorové najväčšie osobné
            dopravné lietadlo na svete. Dokáže prepraviť od 525 do 853
            cestujúcich. Tento moderný stroj vzlietol po prvý raz 27. apríla
            2005 v Toulouse vo Francúzsku. Po ďalších úpravách sa prvé komerčné
            lety uskutočnili v roku 2007. V priebehu fázy vývoja bolo lietadlo
            známe ako Airbus A3XX. Prezývka tohto lietadla je Superjumbo. Vrchné
            poschodie je oproti svojmu konkurentovi v tejto kategórii Boeingu
            747 dvakrát väčšie, čo znamená zdvojnásobenie využitia komerčnej
            plochy horného poschodia.<br /><br />
            Určite sa bude krásne hodiť do Vašej flotily! :). <br /><br />
            <b>Cena: 158mil.&euro;</b>
          </p>
          <img src="obrazky/A380.jpg" alt="Airbus 380" class="obrazok" />
          <a href="podstranky/velke.html" class="tlacidlo">Chcem vedieť viac</a>
          <a href="#" class="tlacidlo">Naspäť</a>
          <h3 id="sekcia-b747">B747</h3>
          <p>
            Boeing 747, známy aj pod názvom Jumbo Jet, je širokotrupé prúdové
            dopravné lietadlo s dlhým doletom vyvinuté a vyrábané v Spojených
            štátoch. Dosiaľ to bolo najväčšie používané komerčné lietadlo. Jeho
            kraľovanie vystriedalo lietadlo spoločnosti Airbus s označením A380.
            Štvormotorové dvojposchodové lietadlo vyrábané spoločnosťou Boeing
            Commercial Airplanes je schopné prepraviť 416 až 524 pasažierov. Do
            novembra 2017 bolo vyrobených až 1540 kusov tohto veľmi úspešného
            modelu. Toto lietadlo je schopné lietať rýchlosťou až 1 100 km/h na
            vzdialenosť 14 205 km. Niektoré konfigurácie tohto lietadla sú
            schopné zaletieť vzdialenosť New York – Hongkong non-stop. Táto
            vzdialenosť zodpovedá 1/3 vzdialenosti letu okolo celej Zeme.<br /><br />
            Určite sa bude krásne hodiť do Vašej flotily! :). <br /><br />
            <b>Cena: 177mil.&euro;</b>
          </p>
          <img src="obrazky/B747.jpg" alt="Boeing 747" class="obrazok" />
          <a href="podstranky/velke.html" class="tlacidlo">Chcem vedieť viac</a>
          <a href="#" class="tlacidlo">Naspäť</a>
        </div>
      </div>
      <div class="objednavky">
        <table>
          <thead>
            <tr>
              <th>Boeing 737</th>
              <th>Airbus 320</th>
              <th>Boeing 747</th>
              <th>Airbus 380</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>
                <img src="./obrazky/B737.jpg" alt="" />
              </td>
              <td>
                <img src="./obrazky/A320.jpg" alt="" />
              </td>
              <td>
                <img src="./obrazky/B747.jpg" alt="" />
              </td>
              <td>
                <img src="./obrazky/A380.jpg" alt="" />
              </td>
            </tr>
            <tr> 
            
              <td><b>Minulé objednávky:</b> <br><?php 
              $vyber737 = "SELECT * FROM `objednavky` WHERE `objednavky`.`typ` = 'B737' ORDER BY `objednavky`.`id_form` DESC";
              $pocet737 = $conn->query($vyber737);
              $objednanych737 = 0;
              while ($array737 = $pocet737->fetch_array()) {
                echo $array737['meno']." ";
                echo $array737['priezvisko']." ";
                echo $array737['mnozstvo']." ks<br>";
                $objednanych737 += (int)$array737['mnozstvo'];
                }
              ?></td>

              <td><b>Minulé objednávky:</b> <br><?php 
              $vyber320 = "SELECT * FROM `objednavky` WHERE `objednavky`.`typ` = 'A320' ORDER BY `objednavky`.`id_form` DESC";
              $pocet320 = $conn->query($vyber320);
              $objednanych320 = 0;
              while ($array320 = $pocet320->fetch_array()) {
                echo $array320['meno']." ";
                echo $array320['priezvisko']." ";
                echo $array320['mnozstvo']." ks<br>";
                $objednanych320 += (int)$array320['mnozstvo'];
                }
              ?></td>

              <td><b>Minulé objednávky: </b><br><?php 
              $vyber747 = "SELECT * FROM `objednavky` WHERE `objednavky`.`typ` = 'B747' ORDER BY `objednavky`.`id_form` DESC";
              $pocet747 = $conn->query($vyber747);
              $objednanych747 = 0;
              while ($array747 = $pocet747->fetch_array()) {
                echo $array747['meno']." ";
                echo $array747['priezvisko']." ";
                echo $array747['mnozstvo']." ks<br>";
                $objednanych747 += (int)$array747['mnozstvo'];
              }
              ?></td>

              <td><b>Minulé objednávky: </b><br> <?php 
              $vyber380 = "SELECT * FROM `objednavky` WHERE `objednavky`.`typ` = 'A380' ORDER BY `objednavky`.`id_form` DESC";
              $pocet380 = $conn->query($vyber380);
              $objednanych380 = 0;
              while ($array380 = $pocet380->fetch_array()) {
                echo $array380['meno']." ";
                echo $array380['priezvisko']." ";
                echo $array380['mnozstvo']." ks<br>";
                $objednanych380 += (int)$array380['mnozstvo'];
              }
              ?></td>
            </tr>
            <tr>
                <td>
                Počet objednaných: <?php echo $objednanych737 ?>
                </td>
                <td>
                Počet objednaných: <?php echo $objednanych320 ?>
                </td>
                <td>
                Počet objednaných: <?php echo $objednanych747 ?>
                </td>
                <td>
                Počet objednaných: <?php echo $objednanych380 ?>
                </td>
            </tr>
          </tbody>
        </table>
      </div>
      <div class="päta">
        <div class="text">
          <div class="formular">
            <h3 id="kontakt">Kontaktujte nás</h3>
            <form method="post" id="form" action="index.php">
  <fieldset>
    <legend>Objednávka</legend>
    <ul>
      <li>
        <input type="radio" id="Muž" value="Muž" name="pohlavie" />
        <label for="Muž">Pán</label>
        <input
          type="radio"
          id="Žena"
          value="Žena"
          name="pohlavie"
        />
        <label for="Žena">Pani/Slečna</label>
      </li>
      <li>
        <label for="Meno">Meno: </label>
        <input
          name="Meno"
          type="text"
          id="Meno"
          required
          placeholder="Martin"
        />
      </li>
      <li>
        <label for="Priezvisko">Priezvisko: </label>
        <input
          type="text"
          name="Priezvisko"
          id="Priezvisko"
          required
          placeholder="Kováč"
        />
      </li>
      <li>
        <label for="firma">Názov spoločnosti: </label>
        <input type="text" id="firma" />
      </li>
      <li>
        <label for="Email">E-mail: </label>
        <input
          type="email"
          id="Email"
          required
          placeholder="martin.kovac@gmail.com"
        />
      </li>
      <li>
        <label for="Telefon">Telefónne číslo: </label>
        <input
          type="tel"
          id="Telefon"
          placeholder="0901234567"
          pattern="09[0-9]{8}"
        />
      </li>
      <li>
        <label for="dodanie">Dátum želaného dodania: </label>
        <input type="date" required id="dodanie" min="2024-01-01" />
      </li>
      <li>
        <label for="množstvo">Množstvo: </label>
        <select name="typ" id="typ">
          <option value="B737">B737</option>
          <option value="B747">B747</option>
          <option value="A320">A320</option>
          <option value="A380">A380</option>
        </select>
        <input
          type="number"
          name="množstvo"
          id="množstvo"
          required
          min="0"
          max="99"
        />
      </li>
      <li>
        <label for="textarea">Povedzte nám viac: </label>
        <textarea
          placeholder="Píšte sem"
          name="viac"
          id="textarea"
          cols="30"
          rows="10"
        ></textarea>
      </li>
      <li>
        <input type="reset" class="tlacidlo2" value="Vymazať" />
        <a href="#" class="tlacidlo2">Naspäť</a>
        <input type="submit" class="tlacidlo2" value="Odoslať" />
      </li>
    </ul>
  </fieldset>
</form>
          </div>
          <footer>Viktor Pšenák 2023 &copy; 30/11/2023 - Pilot</footer>
        </div>
      </div>
    </div>
  </body>
</html>
