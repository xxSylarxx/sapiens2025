<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);

$to = 'sales@sapiensconsultingperu.com';
$subject = 'CONTACT FORM';

$mensaje = ' <table style="max-width: 750px; padding: 10px; margin:0 auto; 
border-collapse: collapse;"> <tr> <td style="background-color: #ecf0f1"> 
<div style="color: #34495e; margin: 4% 10% 2%; text-align: justify;font-family: sans-serif; 
padding-top: 10px;"> <h2 style="color: #e67e22; margin: 0 0 7px">CONTACT FORM</h2> <br> 
<div style="margin-bottom: 12px;"><b>NAME:</b></div> <div style="border-bottom: 1px solid #111a3a; 
padding-bottom: 5px;">' . $_POST['nombre'] . '</div> <br><br> 
<div style="margin-bottom: 12px;"><b>PHONE:</b></div> 
<div style="border-bottom: 1px solid #111a3a; padding-bottom: 5px;">' . $_POST['telefono'] . 
'</div> <br><br> <div style="margin-bottom: 12px;"><b>EMAIL:</b></div>
 <div style="border-bottom: 1px solid #111a3a; padding-bottom: 5px;">' . $_POST['correo'] . '</div> 
 <br><br> <div style="margin-bottom: 12px;"><b>MESSAGE:</b></div> <div style="border-bottom: 1px solid #111a3a; 
 padding-bottom: 5px;">' . $_POST['consulta'] . '</div> <br> <p style="color: #b3b3b3; font-size: 12px;
  text-align: center;margin: 30px 0 0">Copyright © Sapiens Consulting all rights reserved.</p> </div> </td> </tr> </table>';

$headers  = "From: sales@sapiensconsultingperu.com \r\n";
/* $headers .= "CC: axelmol2018@gmail.com \r\n"; */
/* $headers .= "Reply-To: less.campos25@gmail.com\r\n"; */
$headers .= 'X-Mailer: PHP/' . phpversion() . "\r\n";
$headers .= "X-Priority: 1\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=utf-8\r\n";

if(mail($to, $subject, $mensaje, $headers)) { 
    echo 'YOUR INQUIRY WAS SENT';
} else {
    echo 'COULD NOT SEND INFORMATION, TRY AGAIN';
}

// '-f less.campos25@gmail.com'
?>