<?php
$message='"Hey '.$_POST['user_name'].'[Message sent from '.$_POST['from_name'].']'.' , '.$_POST['message'].'"';
echo $message;
$result=passthru("python /ug/ug2k11/csd/kondetimanikanta.purushotham/public_html/FreeSms/sendsms.py ".$_POST['mobile_number']." ".$message, $retval);
echo $retval;
$handle = fopen("log.txt","a");
fwrite($handle, $_POST['user_name']);
fwrite($handle, '+');
fwrite($handle, $_POST['mobile_number']);
fwrite($handle, '+');
fwrite($handle, $message);
fwrite($handle, '+');
fwrite($handle, $retval);
fclose($handle);
header ('Location:http://web.iiit.ac.in/~kondetimanikanta.purushotham/FreeSms/login1.php');


exit;
?>

