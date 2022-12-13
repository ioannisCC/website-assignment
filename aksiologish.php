<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" type="x-icon" href="weeknd.png">
    <title>The Weeknd || Αξιολόγηση Κομματιών</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/js/all.min.js"></script>  <!--εισαγει εικόνες απο μια online βιβλιοθήκη-->
    <script src="script.js"></script>
  </head>
  <body>
    <header>
      <img src="xo.png" alt="xo" id="xo"><br><br>
      <ul>
        <li><a href="arxikh.html">Αρχική</a></li>
        <li><a href="diskografia.php">Δισκογραφία</a></li>
        <li><a href="istoria.html">Ιστορία</a></li>
        <li><a href="vraveia.html">Βραβεία</a></li>
        <li><a href="tour.html">Tour</a></li>
        <li><a href="#" class="active">Αξιολόγηση Κομματιών</a></li>
        <li><a href="diagwnismos.html">Διαγωνισμός</a></li>
        <li><a href="epikoinwnia.html">Επικοινωνία</a></li>
      </ul>
      <img src="xo.png" alt="xo" id="xo">
    </header><br><br><br>
    <form action="data.php" method="post" id="data">
    <div class="banner-area2">
      <div class="content-area2">
        <div class="content2">
          <div class="btn2">
            <h1><strong>Δίσκοι</strong></h1><br><br><br>
            <marquee scrollamount="5" direction="left" behavior="alternate">
              <h1><p>Αξιολογήστε το νεο δίσκο του Weeknd και του υπόλοιπους δίσκους του</p></h1>
            </marquee>
            <br><br><br><br>
            <p>Όνομα Χρήστη: </p><legend><input type="text" name="username" placeholder="username" required></legend><br><br>
            <p>Όνομα Δίσκου: </p><legend><input type="text" name="discname" placeholder="discname" required></legend><br><br>
            <p>Ημ/νία κυκλοφορίας: </p><legend><input type="date" name="date" value="2020-03-20" required readonly></legend>
            <button class="btn2"><a href="#first">ΠΑΜΕ</a></button>
          </div>
        </div>
      </div>
    </div>
    <div class="container2">
      <div class="box2">
        <p id="first">
          <legend>
            <em>Επιλέξτε ένα από τα τραγούδια:<br></em>
            <div class="select">
            <select name="song" required id="song">
              <option selected disabled>Επιλέξτε ένα από τα τραγούδια:</option>
              <option value="h">Heartless</option>
              <option value="bl">Blinding Lights</option>
              <option value="uibo">Until I Bleed Out</option>
              <option value="efla">Escape from LA</option>
              <option value="ah">After Hours</option>
              <option value="aa">Alone Again</option>
              <option value="stl">Scared To Live</option>
              <option value="tl">Too Late</option>
              <option value="s">Snowchild</option>
              <option value="f">Faith</option>
              <option value="iye">In Your Eyes</option>
              <option value="sytfad">Save Your Tears For Another Day</option>
              <option value="ram">Repeat After Me</option>
            </select>
            </div>
          </legend>
        </p>
      </div>
      <div class="box2">
        <p>
          <legend>
            <em>Βαθμολογήστε το τραγούδι που επιλέξατε από το 1 ως το 10: </em><br><br><br>
            <div class="radio-group">
            <label class="radio" for="1"><input type="radio" name="rate_2" value="1" id="1"> 1<span></span></label>&nbsp;
            <label class="radio" for="2"><input type="radio" name="rate_2" value="2" id="2"> 2<span></span></label>&nbsp;
            <label class="radio" for="3"><input type="radio" name="rate_2" value="3" id="3"> 3<span></span></label>&nbsp;
            <label class="radio" for="4"><input type="radio" name="rate_2" value="4" id="4"> 4<span></span></label>&nbsp;
            <label class="radio" for="5"><input type="radio" name="rate_2" value="5" id="5"> 5<span></span></label>&nbsp;
            <label class="radio" for="6"><input type="radio" name="rate_2" value="6" id="6"> 6<span></span></label>&nbsp;
            <label class="radio" for="7"><input type="radio" name="rate_2" value="7" id="7"> 7<span></span></label>&nbsp;
            <label class="radio" for="8"><input type="radio" name="rate_2" value="8" id="8"> 8<span></span></label>&nbsp;
            <label class="radio" for="9"><input type="radio" name="rate_2" value="9" id="9"> 9<span></span></label>&nbsp;
            <label class="radio" for="10"><input type="radio" name="rate_2" value="10" id="10"> 10<span></span></label>&nbsp;
            </div>
          </legend>
        </p>
      </div>
      <div class="box2">
        <p>
          <legend>
            <em>Γράψε τους αγαπημένους σου στίχους από το τραγούδι που επέλεξες: </em><br><br>
            <div class="select">
            <select name="song_2" required id="song_2">
              <optgroup label="Ρεφρέν">
                <option selected disabled>Επιλέξτε ρεφρέν</option>
                <option value="bl">Blinding Lights</option>
                <option value="h">Heartless</option>
                <option value="uibo">Until I Bleed Out</option>
                <option value="efla">Escape from LA</option>
                <option value="ah">After Hours</option>
                <option value="aa">Alone Again</option>
                <option value="stl">Scared To Live</option>
                <option value="tl">Too Late</option>
                <option value="s">Snowchild</option>
                <option value="f">Faith</option>
                <option value="iye">In Your Eyes</option>
                <option value="sytfad">Save Your Tears For Another Day</option>
                <option value="ram">Repeat After Me</option>
              </optgroup>
            </select><br><br>
          </div><br><br>
            Άλλο:<br><br>
            <textarea name="textarea" placeholder="Γράψτε άλλους αγαπημένους στίχους εκτός του ρεφρέν" minlength="10" maxlength="100" rows="5" cols="200" required>
            </textarea>
          </legend>
        </p>
      </div>
      <div class="box2">
        <p><em>
          Επέλεξε πόσο σου άρεσαν οι στίχοι που έγραψες ή επιλέξες και κατόπιν σχολιάστε τον δίσκο:<br><br></em>
          <label for="fav">(σύρε μεταξύ 0 και 100): &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
          <input type="range" id="vol" name="fav" min="0" max="100" required>
        </p>
      </div>
      <div class="box2">
        <p><em>
          Επέλεξε πόσα λεπτά ακούς καθημερινά μουσική του The Weeknd: <br><br></em>
          <label for="min"></label>
          <input type="number" id="min" name="min" min="0" max="500">
        </p>
      </div>
      <div class="box2">
        <p>
          <em><label for="start">Επέλεξε ημερομηνία υποβολής ερωτηματολογίου: </label><br><br></em>
          <input type="date" id="start" name="trip-start" value="2022-01-09" min="2022-01-09" max="2022-12-31"><br><br>
          <em><label for="appt">Επιλέξτε ώρα υποβολής ερωτηματολογίου:</label><br><br></em>
          <input type="time" id="appt" name="appt" required>
        </p>
      </div>
      <div class="box2">
        <legend><strong>Βαθμολογήστε γενικά τον δίσκο After Hours: </strong></legend>
          <div class="rate">
                <input type="radio" id="star5" name="rate" value="5" />
                <label for="star5" title="text"></label>
                <input type="radio" id="star4" name="rate" value="4" />
                <label for="star4" title="text"></label>
                <input type="radio" id="star3" name="rate" value="3" />
                <label for="star3" title="text"></label>
                <input type="radio" id="star2" name="rate" value="2" />
                <label for="star2" title="text"></label>
                <input type="radio" id="star1" name="rate" value="1" />
                <label for="star1" title="text"></label>
            </div>
          </div>
      <div class="box2">
        <legend><strong>Βαθμολογήστε γενικά τον δίσκο Beauty Behind the Madness: </strong></legend>
          <div class="rate">
                <input type="radio" id="star6" name="rate_3" value="5" />
                <label for="star6" title="text"></label>
                <input type="radio" id="star7" name="rate_3" value="4" />
                <label for="star7" title="text"></label>
                <input type="radio" id="star8" name="rate_3" value="3" />
                <label for="star8" title="text"></label>
                <input type="radio" id="star9" name="rate_3" value="2" />
                <label for="star9" title="text"></label>
                <input type="radio" id="star10" name="rate_3" value="1" />
                <label for="star10" title="text"></label>
            </div>
          </div>
      <div class="box2">
        <legend><strong>Βαθμολογήστε γενικά τον δίσκο Trilogy: </strong></legend>
          <div class="rate">
                <input type="radio" id="star11" name="rate_4" value="5" />
                <label for="star11" title="text"></label>
                <input type="radio" id="star12" name="rate_4" value="4" />
                <label for="star12" title="text"></label>
                <input type="radio" id="star13" name="rate_4" value="3" />
                <label for="star13" title="text"></label>
                <input type="radio" id="star14" name="rate_4" value="2" />
                <label for="star14" title="text"></label>
                <input type="radio" id="star15" name="rate_4" value="1" />
                <label for="star15" title="text"></label>
            </div>
          </div>
      <div class="box2">
        <legend><strong>Βαθμολογήστε γενικά τον δίσκο House of Baloons: </strong></legend>
            <div class="rate">
                  <input type="radio" id="star16" name="rate_5" value="5" />
                  <label for="star16" title="text"></label>
                  <input type="radio" id="star17" name="rate_5" value="4" />
                  <label for="star17" title="text"></label>
                  <input type="radio" id="star18" name="rate_5" value="3" />
                  <label for="star18" title="text"></label>
                  <input type="radio" id="star19" name="rate_5" value="2" />
                  <label for="star19" title="text"></label>
                  <input type="radio" id="star20" name="rate_5" value="1" />
                  <label for="star20" title="text"></label>
              </div>
            </div>
        <div class="box2">
          <legend><strong>Βαθμολογήστε γενικά τον δίσκο Kiss Land: </strong></legend>
            <div class="rate">
                  <input type="radio" id="star21" name="rate_6" value="5" />
                  <label for="star21" title="text"></label>
                  <input type="radio" id="sta22" name="rate_6" value="4" />
                  <label for="star22" title="text"></label>
                  <input type="radio" id="star23" name="rate_6" value="3" />
                  <label for="star23" title="text"></label>
                  <input type="radio" id="star24" name="rate_6" value="2" />
                  <label for="star24" title="text"></label>
                  <input type="radio" id="star25" name="rate_6" value="1" />
                  <label for="star25" title="text"></label>
              </div>
            </div>
        <div class="box2">
          <legend><strong>Βαθμολογήστε γενικά τον δίσκο Starboy: </strong></legend>
            <div class="rate">
                  <input type="radio" id="star26" name="rate_7" value="5" />
                  <label for="star26" title="text"></label>
                  <input type="radio" id="star27" name="rate_7" value="4" />
                  <label for="star27" title="text"></label>
                  <input type="radio" id="star28" name="rate_7" value="3" />
                  <label for="star28" title="text"></label>
                  <input type="radio" id="star29" name="rate_7" value="2" />
                  <label for="star29" title="text"></label>
                  <input type="radio" id="star30" name="rate_7" value="1" />
                  <label for="star30" title="text"></label>
              </div>
            </div>
      </div><br>
      <div class="content2">
        <div class="content-area2">
          <br><br>
          <div class="container">
          <legend><input class="btn" type="submit" name="submit" value="Υποβολή"></legend>
        <br>
          <legend><input class="btn" type="reset" name="reset" value="Καθαρισμός φόρμας"></legend>
          </form>
          </div>
        </div>
      </div>
    </div><br><br>
    <div class="sec">
    <div class="last">
      <p><ul>
        <li><a href="arxikh.html">Αρχική</a></li>
        <li><a href="diskografia.php">Δισκογραφία</a></li>
        <li><a href="istoria.html">Ιστορία</a></li>
        <li><a href="vraveia.html">Βραβεία</a></li>
        <li><a href="tour.html">Tour</a></li>
        <li><a href="#" class="active">Αξιολόγηση Κομματιών</a></li>
        <li><a href="diagwnismos.html">Διαγωνισμός</a></li>
        <li><a href="epikoinwnia.html">Επικοινωνία</a></li>
      </ul><br></p></div>
        <p><br><br><br>
        <div class="sm">
          Βρείτε τον καλλιτέχνη<br><br>
          <a href="https://www.facebook.com/theweeknd" target="_blank"><i class="fab fa-facebook-f"></i></a>  <!--με το i προσθέτω εικονα-->
          <a href="https://www.instagram.com/theweeknd/" target="_blank"><i class="fab fa-instagram"></i></a>
          <a href="https://twitter.com/theweeknd" target="_blank"><i class="fab fa-twitter"></i></a>
          <a href="https://www.youtube.com/channel/UC0WP5P-ufpRfjbNrmOWwLBQ" target="_blank"><i class="fab fa-youtube"></i></a>
          <a href="https://open.spotify.com/artist/1Xyo4u8uXC1ZmMpatF05PJ" target="_blank"><i class="fab fa-spotify"></i></a>
        </div>
      </div>

    <script>
      let header = document.querySelector('header');

      window.addEventListener('scroll',function starsflow() {
        let value = window.scrollY;
        header.style.top = value*0.5 + 'px';
      })
    </script>

  </body>
</html>
