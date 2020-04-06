<?php
function verifychecksum($trackingid, $merchantTransactionId, $amount, $status, $checksum, $key)
{
$str = $trackingid ."|". $merchantTransactionId . "|" . $amount . "|" . $status . "|" . $key;
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

function getchecksum($memberid, $totype, $amount, $merchantTransactionId, $redirecturl, $key)
{
$str = $memberid . "|" . $totype . "|" . $amount . "|" . $merchantTransactionId . "|" . $redirecturl . "|" . $key;
$generatedCheckSum = MD5($str);
return $generatedCheckSum;
}
?>
