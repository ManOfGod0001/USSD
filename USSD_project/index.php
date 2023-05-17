<?php
//Reads the variables sent via POST from AT gateway
$sessionId = $_POST["sessionId"];
$serviceCode = $_POST["sessionCode"];
$phoneNumber = $_POST["phoneNumber"];
$text = $_POST["text"];
$location = $_POST["location"]

//Conditions that classify the user input
if ($text == ""){
//This is the first request> Note how it started with CON
$response = "CON Welcome to USSD banking. Please note that a N6.98 network charge will be applied to your bank account for banking services on this channel. \n";
$response .= "1. Proceed \n";
$response .= "2. Cancel \n";
}else if ($text == "1"){
  //Business logic for the first level response
  $response = "CON Welcome to 894 banking \n";
  $response .= "1. Quick Banking \n";
  $response .= "2. Open an account \n";
  $response .= "3. Loans \n";
  $response .= "4. FirstMonie \n";
  $response .= "5. Payattitude \n";
  $response .= "6. Bank or Atm Location";

}else if ($text == "1*6"){
  //Business logic for the second level response
  $response = "CON Pick you location \n";
  $response .= "1. Lagos-Ikorodu \n";
  $response .= "2. Lagos-Ikeja \n";
  $response .= "3. Lagos-Badagry \n";
  $response .= "4. Lagos-Epe \n";
  $response .= "5. Lagos-Lagos Island";

}else if ($text == "1*6*1"){
  //Business logic for the third level response
  $response = "END Ikorodu branches close to you \n";
  $response .= "First Bank. 24, 23/24 Ikorodu - Shagamu Rd \n";
  $response .= "First Bank. JFFW+MF3, \n";
  $response .= "First Bank. Owode Branch Lagos. 01 493 0536 \n";
  $response .= "First Bank. JG74+23R, Oriwu Rd \n";
  $response .= "First Bank. JFFM+64V, Sofunwa St \n";
  $response .= "First Bank. IPAKODO Bank in Ikorodu \n";
  $response .= "First Bank. Ikorodu Lagos \n";
  $response .= "First Bank. JHC4+7GF, Ijede Rd \n";
  $response .= "First Bank. Ikorodu Sagamu Road Lagos \n";
  $response .= "First Bank. HF9J+XX2, Owode Ibese Rd";

}else if ($text == "1*6*2"){
  //Business logic for the third level response
  $response = "END Ikeja branches close to you \n"; 
  $response .= "First Bank. Ikeja Branch Lagos \n";
  $response .= "First Bank. Ikeja Industrial Estate Branch Bank in Nigeria \n";
  $response .= "First Bank. Toyin Olowu Branch \n";
  $response .= "First Bank. Isaac John Branch 51 Isaac John St \n";
  $response .= "First Bank. Agidingbi Branch \n";
  $response .= "First Bank. 62, old, 100272, Allen Ave, Ikeja \n";
  $response .= "First Bank. 48, Oba Akran Ave, Ikeja 101233, Lagos \n";
  $response .= "First Bank. Ogba Branch 27 Acme Rd  \n";
  $response .= "First Bank.  25, Ogba/ Ijaiye Road, Ogba II Branch Lagos  \n";
  $response .= "First Bank - Oshodi - Mile 2 Expressway Branch \n";

}else if ($text == "1*6*3"){
  //Business logic for the third level response
  $response = "END Badagry branches close to you \n";
  $response .= "First Bank. 113 Joseph Dosu Way \n";
  $response .= "First Bank. Lagos State University Cash Centre \n";
  $response .= "First Bank. 113, Joseph Dosu Way, Old Lagos Road, Badagry \n";
  $response .= "First Bank. F2F3+4WG, Lagos - Badagry Expy, 103101, Ilogbo Erem  \n";
  $response .= "First Bank. Agbara \n";

}else if ($text == "1*6*4"){
  //Business logic for the third level response
  $response = "END Epe branches close to you \n";
  $response .= "First Bank. PMB No. 1022 Epe Branch \n";
  $response .= "First Bank. HXVH+J5V, Epe \n";
  $response .= "First Bank. F101, 106101, Epe \n";

}else if ($text == "1*6*5"){
  //Business logic for the third level response
  $response = "END Lagos Island branches close to you \n";
  $response .= "First Bank. Head Office 35 Marina Rd, Lagos Island \n";
  $response .= "First Bank. 8/10 Broad St, Lagos Island \n";
  $response .= "First Bank. Elephant House, 214 Broad St, Lagos Island \n";
  $response .= "First Bank. 28 Berkley St, Lagos Island \n";
  $response .= "First Bank. Customs St, Lagos Island \n";
  $response .= "First Bank. 1, 5 Odunlami St, Lagos Island \n";
  $response .= "First Bank. 29, Tejuosho Street, Yaba \n";
  $response .= "First Bank. 51 Church Street, Dosunmu, Lagos Island \n";
  $response .= "First Bank. 111, Alakoro Street, Ebutero \n";
}
  header('Content-type; text/plain');
  echo $response;
?>