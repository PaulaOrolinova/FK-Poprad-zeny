<?php
$meno = $_POST['meno'];
$navstevnik_email = $_POST['email'];
$predmet = $_POST['predmet'];
$sprava = $_POST['sprava'];

$email_od = 'info@mojemail.com';

$email_predmet = 'Chcem sa k vám pridať'

$email_telo = "Používateľské meno: $meno.\n".
                "Používateľský email: $navstevnik_email.\n".
                "Predmet: $predmet.\n".
                "Správa: $sprava.\n";

$pre = 'ivankahladna875@gmail.com';

$hlavicka = "Od: $email_od \r\n";

$hlavicka .= "Odpoveď pre: $navstevnik_email \r\n";


mail($pre,$email_predmet,$email_telo,$hlavicka);

header("Location: kontakt.html");


 // Get form data
 const meno = document.getElementsByName('meno')[0].value;
 const email = document.getElementsByName('email')[0].value;
 const predmet = document.getElementsByName('predmet')[0].value;
 const sprava = document.getElementsByName('sprava')[0].value;

 // Set cookies
 document.cookie = `meno=${meno}; expires=${getCookieExpirationDate()}; path=/`;
 document.cookie = `email=${email}; expires=${getCookieExpirationDate()}; path=/`;
 document.cookie = `predmet=${predmet}; expires=${getCookieExpirationDate()}; path=/`;
 document.cookie = `sprava=${sprava}; expires=${getCookieExpirationDate()}; path=/`;

 // Continue with form submission
 this.submit();
});

function getCookieExpirationDate() {
 const expirationDate = new Date();
 expirationDate.setFullYear(expirationDate.getFullYear() + 1); // Expires in 1 year
 return expirationDate.toUTCString();
}


?>