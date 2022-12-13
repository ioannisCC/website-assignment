<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" type="x-icon" href="weeknd.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>The Weeknd || Δισκογραφία</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/js/all.min.js"></script>
  </head>
  <body>
    <header>
      <img src="xo.png" alt="xo" id="xo"><br><br>
      <ul>
        <li><a href="arxikh.html">Αρχική</a></li>
        <li><a href="#" class="active">Δισκογραφία</a></li>
        <li><a href="istoria.html">Ιστορία</a></li>
        <li><a href="vraveia.html">Βραβεία</a></li>
        <li><a href="tour.html">Tour</a></li>
        <li><a href="aksiologish.php">Αξιολόγηση Κομματιών</a></li>
        <li><a href="diagwnismos.html">Διαγωνισμός</a></li>
        <li><a href="epikoinwnia.html">Επικοινωνία</a></li>
      </ul>
      <img src="xo.png" alt="xo" id="xo">
    </header>
    <table class="content-table">
      <tr>
        <th>Ημ/νία</th>
        <th>Στούντιο Άλμπουμ</th>
        <th>Προτίμηση Κοινού</th>
      </tr>
      <tr>
        <td>2011</td>
        <td><a href="#HoB">House of Balloons</a> (ακούστε <a target="_blank" href="https://open.spotify.com/album/2YHC9dhR9vMTdCeY0T1FOs">εδώ</a>)</td>
        <td><strong>Αρχική βαθμολογία: </strong><span class="fa fa-star checked"></span><span class="fa fa-star checked"></span><span class="fa fa-star checked"></span><span class="fa fa-star checked"></span><span class="fa fa-star"></span><br><br><strong>Βαθμολογία βάσει ψηφοφορίας κοινού: </strong>
          <?php
         $servername = "localhost";
         $username = "ioannis";
         $password = "genikiergasia";
         $dbname = "ioannis";
         $conn = mysqli_connect($servername, $username, $password, $dbname);
         if (!$conn) {
          die("Connection failed: " . mysqli_connect_error());
         }
         mysqli_set_charset($conn, "utf8");
       $result1= $conn->query ("SELECT ROUND(AVG(rate_5)) FROM ioannis;");
       while ($row = $result1->fetch_assoc()) {
         $MO1 =  array_shift($row) ;
       }
         echo "<div style='font-size:20px; '>  ";
         echo str_repeat("⭐",$MO1);
         echo "</div>";

         mysqli_close($conn);  ?></td>
      </tr>
      <tr>
        <td>2012</td>
        <td><a href="#T">Trilogy</a> (ακούστε <a target="_blanck" href="https://open.spotify.com/album/5EbpxRwbbpCJUepbqVTZ1U">εδώ</a>)</td>
        <td><strong>Αρχική βαθμολογία: </strong><span class="fa fa-star checked"></span><span class="fa fa-star checked"></span><span class="fa fa-star checked"></span><span class="fa fa-star checked"></span><span class="fa fa-star checked"></span><br><br><strong>Βαθμολογία βάσει ψηφοφορίας κοινού: </strong>
          <?php
         $servername = "localhost";
         $username = "ioannis";
         $password = "genikiergasia";
         $dbname = "ioannis";
         $conn = mysqli_connect($servername, $username, $password, $dbname);
         if (!$conn) {
          die("Connection failed: " . mysqli_connect_error());
         }
         mysqli_set_charset($conn, "utf8");
       $result1= $conn->query ("SELECT ROUND(AVG(rate_4)) FROM ioannis;");
       while ($row = $result1->fetch_assoc()) {
         $MO1 =  array_shift($row) ;
       }
         echo "<div style='font-size:20px; '>  ";
         echo str_repeat("⭐",$MO1);
         echo "</div>";

         mysqli_close($conn);  ?></td></td>
      </tr>
      <tr>
        <td>2013</td>
        <td><a href="#KL">Kiss Land</a> (ακούστε <a target="_blanck" href="https://open.spotify.com/album/3hhDpPtCFuQbppwYgsVhMO">εδώ</a>)</td>
        <td><strong>Αρχική βαθμολογία: </strong><span class="fa fa-star checked"></span><span class="fa fa-star checked"></span><span class="fa fa-star checked"></span><span class="fa fa-star checked"></span><span class="fa fa-star"></span><br><br><strong>Βαθμολογία βάσει ψηφοφορίας κοινού: </strong>
          <?php
         $servername = "localhost";
         $username = "ioannis";
         $password = "genikiergasia";
         $dbname = "ioannis";
         $conn = mysqli_connect($servername, $username, $password, $dbname);
         if (!$conn) {
          die("Connection failed: " . mysqli_connect_error());
         }
         mysqli_set_charset($conn, "utf8");
       $result1= $conn->query ("SELECT ROUND(AVG(rate_6)) FROM ioannis;");
       while ($row = $result1->fetch_assoc()) {
         $MO1 =  array_shift($row) ;
       }
         echo "<div style='font-size:20px; '>  ";
         echo str_repeat("⭐",$MO1);
         echo "</div>";

         mysqli_close($conn);  ?></td>
      </tr>
      <tr>
        <td>2015</td>
        <td><a href="#BBtM">Beauty Behind the Madness</a> (ακούστε <a target="_blank" href="https://open.spotify.com/album/0P3oVJBFOv3TDXlYRhGL7s"> εδώ</a>)</td>
        <td><strong>Αρχική βαθμολογία: </strong><span class="fa fa-star checked"></span><span class="fa fa-star checked"></span><span class="fa fa-star checked"></span><span class="fa fa-star checked"></span><span class="fa fa-star"></span><br><br><strong>Βαθμολογία βάσει ψηφοφορίας κοινού: </strong>
          <?php
         $servername = "localhost";
         $username = "ioannis";
         $password = "genikiergasia";
         $dbname = "ioannis";
         $conn = mysqli_connect($servername, $username, $password, $dbname);
         if (!$conn) {
          die("Connection failed: " . mysqli_connect_error());
         }
         mysqli_set_charset($conn, "utf8");
       $result1= $conn->query ("SELECT ROUND(AVG(rate_3)) FROM ioannis;");
       while ($row = $result1->fetch_assoc()) {
         $MO1 =  array_shift($row) ;
       }
         echo "<div style='font-size:20px; '>  ";
         echo str_repeat("⭐",$MO1);
         echo "</div>";

         mysqli_close($conn);  ?></td>
      </tr>
      <tr>
        <td>2016</td>
        <td><a href="#S">Starboy</a> (ακούστε <a target="_blank " href="https://open.spotify.com/album/2ODvWsOgouMbaA5xf0RkJe">εδώ</a>)</td>
        <td><strong>Αρχική βαθμολογία: </strong><span class="fa fa-star checked"></span><span class="fa fa-star checked"></span><span class="fa fa-star checked"></span><span class="fa fa-star checked"></span><span class="fa fa-star checked"></span><br><br><strong>Βαθμολογία βάσει ψηφοφορίας κοινού: </strong>
          <?php
         $servername = "localhost";
         $username = "ioannis";
         $password = "genikiergasia";
         $dbname = "ioannis";
         $conn = mysqli_connect($servername, $username, $password, $dbname);
         if (!$conn) {
          die("Connection failed: " . mysqli_connect_error());
         }
         mysqli_set_charset($conn, "utf8");
       $result1= $conn->query ("SELECT ROUND(AVG(rate_7)) FROM ioannis;");
       while ($row = $result1->fetch_assoc()) {
         $MO1 =  array_shift($row) ;
       }
         echo "<div style='font-size:20px; '>  ";
         echo str_repeat("⭐",$MO1);
         echo "</div>";

         mysqli_close($conn);  ?></td>
      </tr>
      <tr>
        <td>2020</td>
        <td><a href="#AH">After Hours</a> (ακούστε <a target="_blank" href="https://open.spotify.com/album/4yP0hdKOZPNshxUOjY0cZj">εδώ)</td>
          <td><strong>Αρχική βαθμολογία: </strong><span class="fa fa-star checked"></span><span class="fa fa-star checked"></span><span class="fa fa-star checked"></span><span class="fa fa-star checked"></span><span class="fa fa-star checked"></span><br><br><strong>Βαθμολογία βάσει ψηφοφορίας κοινού: </strong>
            <?php
           $servername = "localhost";
           $username = "ioannis";
           $password = "genikiergasia";
           $dbname = "ioannis";
           $conn = mysqli_connect($servername, $username, $password, $dbname);
           if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
           }
           mysqli_set_charset($conn, "utf8");
         $result1= $conn->query ("SELECT ROUND(AVG(rate)) FROM ioannis;");
         while ($row = $result1->fetch_assoc()) {
           $MO1 =  array_shift($row) ;
         }
           echo "<div style='font-size:20px; '>  ";
           echo str_repeat("⭐",$MO1);
           echo "</div>";

           mysqli_close($conn);  ?></td>
      </tr>
    </table><br><br><br><br><br><br><br><br>
    <img src="discography.jpg" class="image" alt="weeknd discography" title=discography><br><br><br><br><br>
    <div class="content">
      <h2>House of Balloons</h2>
      <div class="box"><p id="HoB">
        Το <strong>House of Balloons</strong> είναι το ντεμπούτο mixtape του Καναδού τραγουδιστή. Κυκλοφόρησε αρχικά στις 21 Μαρτίου 2011 από την <b>XO</b>. Ο τίτλος του προέρχεται από το παρατσούκλι
      που έδωσε ο τραγουδιστής στο πρώην σπίτι του στο Τορόντο.
        Το mixtape κυκλοφόρησε <b>δωρεάν</b> στον ιστότοπο του Weeknd και αποτέλεσε αντικείμενο αυξημένης συζήτησης στα μέσα ενημέρωσης σχετικά με τη χρήση των τραγουδιών του στην τηλεόραση,
      καθώς και τη σχετική ανωνυμία του τραγουδιστή. Το House of Balloons ηχογραφήθηκε εξ ολοκλήρου στο Τορόντο, με την παραγωγή να χειρίζονται κυρίως οι Weeknd, Doc McKinney, Illangelo και Cirkut.
      Ο Weeknd αργότερα θα συνεργαστεί με τους McKinney και Illangelo σε πολλές μελλοντικές κυκλοφορίες.
        Το mixtape έλαβε ευρεία αναγνώριση, με τους κριτικούς να επαινούν τη <ins>σκοτεινή αισθητική, την παραγωγή και το λυρικό του περιεχόμενο</ins>. Θεωρείται ευρέως ως σημαντική επιρροή τόσο στη <em>σύγχρονη
      όσο και στην εναλλακτική R&B</em>.
      Το House of Balloons περιέχει επίσης στοιχεία <b>soul, trip hop, indie rock, dream pop και ηλεκτρονικής μουσικής</b>. Στιχουργικά, το mixtape εξερευνά τη χρήση ναρκωτικών από τον Weeknd και τις εμπειρίες με την αγάπη,
      την απογοήτευση και την ασωτία. Κυκλοφόρησε εμπορικά ως μέρος του συλλογικού άλμπουμ Trilogy (2012) και περιελάμβανε τα σινγκλ <i>"Wicked Games"</i> και <i>"Twenty Eight"</i>, το τελευταίο από τα οποία είναι ένα μπόνους κομμάτι.
      Στη δέκατη επέτειό του, το αρχικό mixtape κυκλοφόρησε σε ψηφιακές μορφές και περιελάμβανε δείγματα που απέτυχαν να αποκτήσουν άδεια πνευματικών δικαιωμάτων στο Trilogy.
    </p></div><br>
    <img src="hob.jpg" class="image2" alt="weeknd staring" title="weeknd" id="hob">
      <h2>Trilogy</h2>
      <div class="box"><p id="T">
        Τον Απρίλιο του 2012, ο Tesfaye ξεκίνησε την πρώτη του διεθνή περιοδεία, η οποία περιελάμβανε παραστάσεις στο Coachella, sold-out παραστάσεις στο Bowery Ballroom στη Νέα Υόρκη,
      οι οποίες αξιολογήθηκαν θετικά από το περιοδικό <i>Rolling Stone</i>, και διάφορα ευρωπαϊκά φεστιβάλ, συμπεριλαμβανομένων των φεστιβάλ ήχου Primavera 2012 στην Ισπανία και την Πορτογαλία,
      και το Wireless Festival στο Λονδίνο τον Ιούλιο του 2012. Η παράστασή του στο Wilton Music Hall στο Λονδίνο τον Ιούνιο του 2012 περιελάμβανε μια διασκευή εξωφύλλου του <i>"Dirty Diana"</i>
      του Michael Jackson και συμμετείχε η Katy Perry και η Florence Welch.
        Τον Σεπτέμβριο του 2012, ο Abel υπέγραψε με τη <i>Republic Records</i>, τμήμα της <i>Universal Music Group</i>, σε μια κοινοπραξία με την ετικέτα του, <strong><ins>XO</ins></strong>.
        Τον Δεκέμβριο του 2012, κυκλοφόρησε ένα νέο άλμπουμ, το <strong><em>Trilogy</em></strong>, αποτελούμενο από τρία νέα τραγούδια καθώς και remastered εκδόσεις παλαιότερων τραγουδιών. Επίσης,
      αναγνωρίστηκε επίσημα ο Ρόουζ ως παραγωγός και συγγραφέας για τα τρία τραγούδια από το House of Balloons για τα οποία δεν έλαβε αρχικά πίστωση. Το «Trilogy» βρέθηκε στο νούμερο τέσσερα
      του Billboard 200 των ΗΠΑ με πωλήσεις 86.000 αντιτύπων από την πρώτη βδομάδα. Έκανε επίσης το ντεμπούτο του στον αριθμό πέντε στο καναδικό άλμπουμ, με παρόμοιες πωλήσεις.
      Το αναφερόμενο άλμπουμ πιστοποιήθηκε αργότερα ως πλατινένια από την <i>Recording Industry Association of America</i> (RIAA) και διπλή πλατίνα από τη Music Canada τον Μάιο του 2013.
      Μια εβδομάδα αργότερα, <ins>κέρδισε μια υποψηφιότητα για το βραβείο δημοσκόπησης ound του 2013 από το BBC</ins>.</p>
      </div>
      <img src="t.jpg" class="image2" alt="weeknd" title="weeknd" id="t">
      <h2>Kiss Land</h2>
      <div class="box"><p id="KL">
        Στις 16 Μαΐου 2013, ο Tesfaye έκανε πρεμιέρα στο κομμάτι του ντεμπούτου στούντιο άλμπουμ του, <strong>Kiss Land</strong>. Το άλμπουμ προωθήθηκε αργότερα από τα singles "Belong to the World" και "Live For" με τον <ins>Drake</ins>.
        Ο Abel ξεκίνησε μια περιοδεία του Fall από τις 6 Σεπτεμβρίου έως τις 25 Νοεμβρίου 2013.
        Ο Tesfaye εμφανίστηκε στο The 20/20 Experience World Tour, ενώ συμμετείχε στον πρωταγωνιστικό τίτλο του Τζάστιν Τίμπερλεϊκ για έξι παραστάσεις. Αυτό ήταν τρεις εβδομάδες πριν από τη συνεισφορά του στο soundtrack για το <i>The Hunger Games: Φωτιά (2013)</i>,
      συμβάλλοντας στο <em>"Devil May Cry"</em>, καθώς και στο <em>"Elastic Heart"</em> της Σία, το δεύτερο κύριο σίνγκλ από soundtrack.
        Τον Φεβρουάριο του 2014, ο Tesfaye έκανε ξανά το <i>«Drunk in Love»</i>, ένα single της Beyoncé από το ομώνυμο στούντιο άλμπουμ της. Διατηρώντας το θέμα και την έννοια του τραγουδιού, περιέγραψε λεπτομερώς τη σύνοψη μέσα από την οπτική ενός άντρα.
        Τον Οκτώβριο του 2014, συνεργάστηκε με την Ariana Grande σε ένα ντουέτο με τίτλο «Love Me Harder», το οποίο έφτασε στο νούμερο επτά στο <b>Billboard Hot 100</b>.
        Τον Δεκέμβριο του 2014, κυκλοφόρησε το <i>«Earned It»</i>, ένα single από το Fifty Shades of Grey (2015). Το τραγούδι, το οποίο σηματοδότησε τη δεύτερη συνεισφορά του σε μια ταινία, κατέκτησε την τρίτη θέση στο Billboard Hot 100 για κάποιο διάστημα.
      Τον Φεβρουάριο του 2016, ερμήνευσε το τραγούδι: στα 88α βραβεία Όσκαρ, όπου ήταν υποψήφιο για το καλύτερο πρωτότυπο τραγούδι.
      </p>
      </div>
      <img src="kl.jpg" class="image2" alt="weeknd on stage" title="weeknd" id="kl">
      <h2>Beauty Behind the Madness</h2>
      <div class="box"><p id="BBtM">
        Το 2015, εμφανίστηκε στο soundtrack της ταινίας <i>Fifty Shades of Grey</i> με δύο τραγούδια: το <em>«Earned It»</em> και το <em>«Where You Belong»</em>.
        Στις αρχές Ιουλίου εκείνου του έτους, ο Abel ανακοίνωσε το δεύτερο στούντιο άλμπουμ του, το «Beauty Behind The Madness» και δήλωσε ότι θα κυκλοφορήσει στις 28 Αυγούστου. Πέντε αποσπάσματα από αυτό το άλμπουμ κυκλοφόρησαν:
      <i>Often, The Hills, Can't Feel My Face, Earned It και Tell Your Friends</i>. Το The Hills έφτασε στο Νο 1 του <i>Billboard Hot 100</i>, όπως και το σίνγκλ Can't Feel My Face.
        Το άλμπουμ αποδείχτηκε <strong>μια πραγματική επιτυχία</strong>, που άρεσε στο κοινό καθώς στους κριτικούς.
        Συνόδευσε την τραγουδίστρια <b>Ριάννα</b> στην περιοδεία της, Anti World Tour, στην Ευρώπη, την οποία άνοιξε με τον Big Sean από τις 17 Ιουνίου 2016, αλλά τον Μάρτιο του 2016, τελικά ο Weeknd ανακοίνωσε ότι δεν θα συμμετάσχει σε αυτήν την περιοδεία.
      </p>
      </div>
      <img src="bbtm.jpg" class="image2" alt="weeknd on stage" title="weeknd" id="bbtm">
      <h2>Starboy & My Dear Melancholy</h2>
      <div class="box"><p id="S">
        Στις 21 Σεπτεμβρίου 2016, ο Weeknd ανακοίνωσε την κυκλοφορία του τρίτου στούντιο άλμπουμ του, <strong>Starboy</strong>, που περιλάμβανε 18 κομμάτια από την εταιρεία <i>XO</i> και <i>Republic Records</i>. Το άλμπουμ περιλαμβάνει συνεργασίες με πολλούς καλλιτέχνες
          συμπεριλαμβανομένων του <i>Daft Punk</i> που συμμετείχε στα I Feel It Coming και Starboy (δύο μεγάλες επιτυχίες). Η Lana Del Rey για τη συγγραφή των στίχων στο Party Monster με μια μικρή εμφάνιση του τόνου της φωνής της στον τίτλο
          αλλά και για το τραγούδι στο κομμάτι Stargirl Interlude ή Kendrick Lamar με Sidewalks11. Το 2016, εμφανίστηκε στο δεύτερο στούντιο άλμπουμ του <ins>Travis Scott</ins>, στο κομμάτι Wonderful.
        Το 2017, εμφανίστηκε στο έκτο στούντιο άλμπουμ του Future, στο κομμάτι Comin Out Strong12 και στο πέμπτο στούντιο άλμπουμ της Lana Del Rey στο κομμάτι Lust For Life.
        Τον Μάρτιο του 2018, κυκλοφόρησε το πρώτο του EP με τίτλο My Dear Melancholy,. Τον Αύγουστο του 2018, συνεργάστηκε με τον Travis Scott στο άλμπουμ <ins>Astroworld</ins> με τα κομμάτια Skeletons and Wake up, μετά το Pray 4 Love τον Σεπτέμβριο του 2015.
      </p>
      </div>
      <img src="s.png" class="image2" alt="starboy logo" title="weeknd" id="s">
      <h2>After Hours</h2>
      <div class="box"><p id="AH">
        Στις 26 Νοεμβρίου 2019, κυκλοφόρησε το «Heartless» στο Youtube, το πρώτο τραγούδι από το επερχόμενο τέταρτο στούντιο άλμπουμ του. Δύο εβδομάδες αργότερα, έγινε το 5ο σινγκλ του με την πρώτη θέση στο Billboard Hot 100. Δύο μέρες αργότερα,
      ανακοίνωσε στο Twitter μια συνεργασία με τη Mercedes, που θα γίνει στο μελλοντικό hit, Blinding Lights.
          Το «Blinding Lights» <ins>σημειώνει αμέτρητους δίσκους και είναι ένα από τα πιο πολυακουσμένα τραγούδια όλων των εποχών</ins>. Το κομμάτι, που κυκλοφόρησε το 2019, εξακολουθεί να βρίσκεται στο top 10 του Billboard Hot 100 τον Φεβρουάριο του 2021,
      14 μήνες μετά την κυκλοφορία του και ήρθε Νο.1 σε 34 χώρες όταν κυκλοφόρησε ως single.
          Στις 20 Μαρτίου 2020, ο The Weeknd κυκλοφόρησε το τέταρτο άλμπουμ του με τίτλο <strong>After Hours</strong>. Το άλμπουμ περιλάμβανε 14 κομμάτια, συμπεριλαμβανομένων των Heartless και Blindings Lights. Το άλμπουμ έγινε <b>μεγάλη επιτυχί</b>α και έγινε <ins>το δεύτερο άλμπουμ
      με τις περισσότερες πωλήσεις το 2020</ins>.
          Τον Απρίλιο του ίδιου έτους, ανέφερε ότι συνέγραψε και έκανε την εμφάνισή του στο δεύτερο επεισόδιο της σεζόν 17 του American Dad!, Με τίτλο A Starboy Is Born13.
          Στις αρχές του 2021, ο Weeknd το δεύτερο άλμπουμ του με τα καλύτερα hits με την ονομασία «The Highlights».
          Στις 7 Φεβρουαρίου 2021, ήταν η σειρά του The Weeknd να εμφανιστεί στο ημίχρονο του 55ου Super Bowl , διαδεχόμενος την Beyoncé, τη Shakira, τη Lady Gaga, τον Michael Jackson και πολλούς άλλους βραβευμένους καλλιτέχνες. Γίνεται <ins>ο πρώτος Καναδός καλλιτέχνης
      που φιλοξένησε συναυλία Super Bowl</ins>.
          Το "After Hours Tour" είχε προγραμματιστεί για το 2020. Οι χώροι κατακλύστηκαν από τους θαυμαστές ακόμη και πριν από την κυκλοφορία του After Hours. Τα εισιτήρια εξαντλούνται στη συνέχεια σε λίγες μόνο ώρες. Στη συνέχεια, ο καλλιτέχνης ανακοινώνει μια επιπλέον ημερομηνία στο Παρίσι,
      επίσης sold-out. Μετά μία τρίτη.
          Η περιοδεία αναβλήθηκε για το 2021 λόγω της πανδημίας. Ο Weeknd ανακοινώνει στα κοινωνικά δίκτυα τον Ιανουάριο του 2020 ότι η περιοδεία θα πραγματοποιηθεί τελικά το 2022 και ανακοινώνει νέες συναυλίες: στη συνέχεια προγραμματίζονται επτά ημερομηνίες στη Γαλλία
      (στο Παρίσι, τη Λυών, το Μπορντώ (Floirac) και το Μονπελιέ) αντί για μόλις δύο τελικά.
          Ανακοινώνει πέντε ημέρες μετά την αναβολή της συναυλίας στο 2022 ότι <em>ένα εκατομμύριο θέσεις είχαν ήδη πουληθεί</em>.
          Τον Ιούνιο, κυκλοφορεί ένα νέο σίνγκλ της Doja Cat, το «You Right», που συμμετέχει και αυτός.
      </p>
      </div>
      <img src="ah.jpg" class="image2" alt="weeknd laughing" title="weeknd" id="ah">
    </div><br><br><br>
    <div class="sec">
    <div class="last">
      <p><ul>
        <li><a href="arxikh.html">Αρχική</a></li>
        <li><a href="vraveia.html" class="active">Δισκογραφία</a></li>
        <li><a href="istoria.html">Ιστορία</a></li>
        <li><a href="#">Βραβεία</a></li>
        <li><a href="tour.html">Tour</a></li>
        <li><a href="aksiologish.php">Αξιολόγηση Κομματιών</a></li>
        <li><a href="diagwnismos.html">Διαγωνισμός</a></li>
        <li><a href="epikoinwnia.html">Επικοινωνία</a></li>
      </ul><br></p></div>
        <p><br><br><br>
        <div class="sm">
          Βρείτε τον καλλιτέχνη<br><br>
          <a href="https://www.facebook.com/theweeknd" target="_blank"><i class="fab fa-facebook-f"></i></a>
          <a href="https://www.instagram.com/theweeknd/" target="_blank"><i class="fab fa-instagram"></i></a>
          <a href="https://twitter.com/theweeknd" target="_blank"><i class="fab fa-twitter"></i></a>
          <a href="https://www.youtube.com/channel/UC0WP5P-ufpRfjbNrmOWwLBQ" target="_blank"><i class="fab fa-youtube"></i></a>
          <a href="https://open.spotify.com/artist/1Xyo4u8uXC1ZmMpatF05PJ" target="_blank"><i class="fab fa-spotify"></i></a>
        </div>
      </div></p>

    <script>
      let header = document.querySelector('header');

      window.addEventListener('scroll',function starsflow() {
        let value = window.scrollY;
        header.style.top = value*0.5 + 'px';
      })
    </script>

  </body>
</html>
