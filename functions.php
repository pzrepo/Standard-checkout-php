<?php
function verifychecksum($trackingid, $description, $amount, $status, $checksum, $key)
{
$str = $trackingid ."|". $description . "|" . $amount . "|" . $status . "|" . $key;
$generatedCheckSum = MD5($str);
if ($generatedCheckSum==$checksum)
{
return "true";
}
else
{
return "false";
}
}

function getchecksum($memberid, $totype, $amount, $description, $redirecturl, $key)
{
$str = $memberid . "|" . $totype . "|" . $amount . "|" . $description . "|" . $redirecturl . "|" . $key;
$generatedCheckSum = MD5($str);
return $generatedCheckSum;
}
?>
