<?php

?>
<?php require("functions.php"); ?>
<?php
//Below are the constants this program needs
//replace them with your values

$memberId = "11344"; //put in your merchantId you received after signing up
$totype = "docspartner"; // put you partner name
$amount = "1.00"; //your script should substitute the amount here
$TMPL_AMOUNT = "5.00";//your script should substitute the amount in that customized currency
$merchantTransactionId = "4125896377"; //your script should substitute the order id here
$orderDescription = "order123items"; //your script should substitute detailed description of your order here ( This field is not mandatory )
$merchantRedirectUrl = "http://localhost:8081/StdKit/redirecturl.php"; //You need to change the URL as per your website and the location where you have kept provided redirecturl.php file
$key = "9P8vdzPP4oL9BeDgko3ti6HGnou59LEB"; //put in the 32 bit alphanumeric key in the quotes provided here

$country = "IN";//your script should substitute the customer's country code
$TMPL_CURRENCY = "EUR";//your script should substitute the currency symbol in which you want to display amount
$currency = "USD";//your script should substitute the currency symbol in which you want to display amount
$city = "Mumbai";//your script should substitute the customer's city
$state = "Maharashtra";//your script should substitute the customer's state
$street = "4 Bunglow";//your script should substitute the customer's street
$postcode = "400052";//your script should substitute the customer's zip
$phone = "226370256";//your script should substitute the customer's actual telno
$telnocc = "091";//your script should substitute the customer's contry code for tel no
$email = "support@domain.com";//your script should substitue the customer's email address
$ip = "127.0.0.1"; // your script should replace it with your ip address
$reservedField1 = ""; //As of now this field is reserved and you need not put anything
$reservedField2 = ""; //As of now this field is reserved and you need not put anything
$terminalid="";   //terminalid if provided
$paymentMode=""; //payment type as applicable Credit Cards = CC, Vouchers = PV,  Ewallet = EW, NetBanking = NB
$paymentBrand=""; //card type as applicable Visa = VISA; MasterCard=MC; Dinners= DINER; Amex= AMEX; Disc= DISC; CUP=CUP
$customerId="44444"; 
$checksum = "";
$checksum = getchecksum($memberId, $totype, $amount, $merchantTransactionId, $merchantRedirectUrl, $key);
$testurl = "https://testUrl.com/transaction/PayProcessController";
$liveurl = "https://secure.live.com/transaction/PayProcessController";
?>
<html>
<head><title>Payment Page Request </title></head>
<body bgcolor="white">
<font size=4/>
<form name="frm1" method="post" action="<?php echo $testurl; ?> ">
<input type="hidden" name="memberId" maxlength="10"  value="<?php echo $memberId; ?>">
<input type="hidden" name="totype" value="<?php echo $totype; ?>">
<input type="hidden" name="amount" value="<?php echo $amount; ?>">
<input type="hidden" name="TMPL_AMOUNT" value="<?php echo $TMPL_AMOUNT; ?>">
<input type="hidden" name="merchantTransactionId" maxlength="100"  value="<?php echo $merchantTransactionId; ?>">
<input type="hidden" name="orderDescription" value="<?php echo $orderDescription; ?>">
<input type="hidden" name="merchantRedirectUrl" value="<?php echo $merchantRedirectUrl; ?>">
<input type="hidden" name="checksum" value="<?php echo $checksum; ?>">
<input type="hidden" name="ip" value="<?php echo $ip; ?>">
<input type="hidden" name="reservedField1" value="<?php echo $reservedField1; ?>">
<input type="hidden" name="reservedField2" value="<?php echo $reservedField2; ?>">
<input type="hidden" name="country" value="<?php echo $country; ?>">
<input type="hidden" name="currency" value="<?php echo $currency; ?>">
<input type="hidden" name="TMPL_CURRENCY" value="<?php echo $TMPL_CURRENCY; ?>">
<input type="hidden" name="city" value="<?php echo $city; ?>">
<input type="hidden" name="state" value="<?php echo $state; ?>">
<input type="hidden" name="street" value="<?php echo $street; ?>">
<input type="hidden" name="postcode" value="<?php echo $postcode; ?>">
<input type="hidden" name="phone" value="<?php echo $phone; ?>">
<input type="hidden" name="telnocc" value="<?php echo $telnocc; ?>">
<input type="hidden" name="email" value="<?php echo $email; ?>">
<input type="hidden" name="terminalid" value="<?php echo $terminalid; ?>">
<input type="hidden" name="paymentMode" value="<?php echo $paymentMode; ?>">
<input type="hidden" name="paymentBrand" value="<?php echo $paymentBrand; ?>">
<input type="hidden" name="customerId" value="<?php echo $customerId; ?>">
<INPUT TYPE="submit" value="submit">
</form>
</body></html>
