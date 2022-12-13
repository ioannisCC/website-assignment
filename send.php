<?php
if (isset($_POST['send'])) {  //η isset() ειναι συναρτηση που ελεγχει εαν η μεταβλητη που λαμβανεται ως ορισμα ειναι κενη ή έχει περιεχόμενο ώστε να ελέγξω αν ο χρηστης εχει εισαγει στοιχεια
  $name = $_POST['name'];
  $surname = $_POST['surname'];
  $telephone = $_POST['telephone'];
  $textarea = $_POST['textarea'];
  $subject = 'Νέο μύνημα';
  //μετατρέπω το μύνημα σε html καθως θα σταλει στο μέιλ μου
  $message = "<html>
  <head>
  <title>Νεό μύνημα από το site</title>
  </head>
  <body>
  	<h1>From $name $surname</h1>
  	<p>$textarea</p>
  </body>
  </html>";
  //η συναρτηση mail() στελνει μυνημα στον παραληπτη που οριζεται στο πρωτο ορισμα
  if ($_POST['send']) {
    if (mail('ioanniscatargiu@outlook.com', $subject, $textarea)) {
       echo "Το email στάλθηκε";
      }
    else {
       echo "Η αποστολή απέτυχε. Παρκαλώ προσπαθήστε ξανά αργότερα.";
      }
    }
}
 ?>
