<?php

?>
<html>
<head><title>s Payment Page Transaction</title></head>
<body bgcolor="white">
<font size=4>
<?php require("functions.php"); ?>
<?php

$key = "kS4oNFBT6o3Rvvd7nBkpBIUrf1PsUVaw"; //put in the 32 bit alphanumeric key in the quotes provided here
$paymentId = $_REQUEST['paymentId'];
$merchantTransactionId = $_REQUEST['merchantTransactionId'];
$amount = $_REQUEST['amount'];
$status = $_REQUEST['status'];
$checksum = $_REQUEST['checksum'];
$billingdiscriptor = $_REQUEST['descriptor'];
$token = $_REQUEST['token'];
$currency = $_REQUEST['currency'];
$timestamp = $_REQUEST['timestamp'];
$resultCode = $_REQUEST['resultCode'];
$resultDescription = $_REQUEST['resultDescription'];
$cardBin = $_REQUEST['cardBin'];
$cardLast4Digits = $_REQUEST['cardLast4Digits'];
$tmpl_currency = $_REQUEST['tmpl_currency'];
$tmpl_amount = $_REQUEST['tmpl_amount'];
$str = "";

$str = verifychecksum($trackingid, $desc, $amount, $status, $checksum, $key);
if ($str=="true" && $status=="Y")
{
echo "Thank you for shopping with us. Your credit card has been charged and your transaction is successful. We will be shipping your order to you soon." ;

//Here you need to put in, the routines for a successful
//transaction such as sending an email to customer,
//setting database status, informing logistics etc etc.
}
else if ($str=="true" && $status=="N")
{
echo "Thank you for shopping with us. However it seems your credit card transaction failed." ;

//Here you need to put in, the routines for a failed
//transaction such as sending an email to customer
//setting database status etc etc.
}
else if ($str=="true" && $status=="P")
{
echo "Your Transaction has been classified as a HIGH RISK Transaction by our Credit Card Processor.This requires you to Fax us an Authorisation for this transaction in order to complete the processing. This process is required by our Credit Card Processor to ensure that this transaction is being done by a genuine card-holder. The transaction will NOT be completed (and your card will NOT be charged) if you do not fax required documents.";

//Here you need to put in, the routines for a HIGH RISK
//transaction such as sending an email to customer and explaining him a procedure,
//setting database status etc etc.
}
else
{
echo "Security Error. Illegal access detected" ;
//Here you need to simply ignore this and don’t need
//to perform any operation in this condition
}
?>
</font>
</body>
</html>
