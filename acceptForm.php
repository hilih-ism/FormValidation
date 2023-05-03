<?php

//name handler
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST['name'] ?? "";
  if (!empty($name)) {
echo"Hello my name is ","<b>".$name."</b>","<br>";
}
else {echo "Please enter your name","<br>";}
}

//gender handler
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (isset($_POST["gender"])) {
    $selectedOption = $_POST["gender"];
    echo "I am a " . $selectedOption,"<br>";
  } else {echo "Please select a gender","<br>";}
}

//color handler
if ($_SERVER["REQUEST_METHOD"] == "POST") {
 $color = $_POST["favcolor"] ?? ""; 
 if (!empty($color)) {
echo"My favorite color is ","<i>".$color."</i>","<br>";
  }
  else {echo "Please enter a color","<br>";}
}

//department handler
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $selectedOption = $_POST["dept"] ?? "";
  if (!empty($selectedOption)) {
    echo "I learn in the ","<u>" . $selectedOption."</u>"," department","<br>";
  } else
  {echo "Please select a department","<br>";}
}

//hobby handler
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $hobby = $_POST["hobby"] ?? "" ;
  if (!empty($hobby)) {
echo "I like to do ".$hobby." in my spare time","<br>";
  }
  else {echo "Please enter a hobby<br>";}
}

//site handler
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (isset($_POST["site"])) {
    $url = filter_var($_POST["site"], FILTER_SANITIZE_URL);
    if (!filter_var($url, FILTER_VALIDATE_URL)) {
      echo "Please enter a valid URL";
    } else {
      echo "You can reach me at this site: " . $url;
    }
  } else {
    echo "Please enter a URL","<br>";
  }
}

//phone number handler
if ($_SERVER["REQUEST_METHOD"] == "POST") {	
  $phone = $_POST["phone"] ?? "" ;
  if (!empty($phone)) {
	echo " and my phone number is: ".$phone,"<br>";
  }
  else {echo "<br>Please enter a valid phone number","<br>";}
}

?>