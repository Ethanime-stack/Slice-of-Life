<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Currency Converter</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"> 
<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lipis/flag-icons@7.2.3/css/flag-icons.min.css">
<link rel="stylesheet" href="style.css">
</head>
<body>


<div class="navbar">
        <a class="active" href="index.html"><i class="fa fa-fw fa-home"></i> Home</a>
        <a href="aboutme.html">About</a>

        <div class="dropdown">
            <button class="dropbtn">Products
                <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-content">
                <a href="currency.php">Currency exchange</a>
                <a href="#">Service 2</a>
            </div>
            </div>
            <div class="dropdown">
                <button class="dropbtn" onclick="redirectContact()"> Contact Us 
                <i class="fa fa-caret-down"></i></button>
                
                <div class="dropdown-content">
                <a href="contact.html">Contactez-nous <span class="fi fi-fr"></span></a> 
                <a href="contact.html">問い合わせ <span class="fi fi-jp"></span></a>
            </div>
        </div>
    </div>



<div class="currency-page"> 

    <h3>Currency Converter <i class="fa-solid fa-comments-dollar"></i></h3>
<form class="currency-form" action="currency.php" method="post">
    <label for="value">Enter amount to be converted:</label>
    <input type="text" id="value" name="value" required><br><br>


<fieldset class="currency-fieldset">
    <p> SELECT CURRENCY TO CONVERT FROM: </p>

    <input type="radio" id="fromCAN" name="fromCurrency" value="CAN" required> 
    <label for="fromCAN"><span class="fi fi-ca"></span> CAN</label> 

    <input type="radio" id="fromUSD" name="fromCurrency" value="USD" required> 
    <label for="fromUSD"><span class="fi fi-us"></span> USD</label> 

    <input type="radio" id="fromEUR" name="fromCurrency" value="EUR" required> 
    <label for="fromEUR"><span class="fi fi-eu"></span> EUR</label> 

    <input type="radio" id="fromGBP" name="fromCurrency" value="GBP" required> 
    <label for="fromGBP"><span class="fi fi-gb"></span> GBP</label> 

    <input type="radio" id="fromCHY" name="fromCurrency" value="CHY" required> 
    <label for="fromCHY"><span class="fi fi-cn"></span> CHY</label> 
</fieldset>


<fieldset class="currency-fieldset">
    <p> SELECT CURRENCY TO CONVERT TO: </p>
    <input type="radio" id="toCAN" name="toCurrency" value="CAN" required> 
    <label for="toCAN"><span class="fi fi-ca"></span> CAN</label> 

    <input type="radio" id="toUSD" name="toCurrency" value="USD" required> 
    <label for="toUSD"><span class="fi fi-us"></span> USD</label> 

    <input type="radio" id="toEUR" name="toCurrency" value="EUR" required> 
    <label for="toEUR"><span class="fi fi-eu"></span> EUR</label> 
    
    <input type="radio" id="toGBP" name="toCurrency" value="GBP" required> 
    <label for="toGBP"><span class="fi fi-gb"></span> GBP</label> 

    <input type="radio" id="toCHY" name="toCurrency" value="CHY" required> 
    <label for="toCHY"><span class="fi fi-cn"></span> CHY</label> 
</fieldset>

<br> <button type="submit">Convert</button> 
   
</form>

<div id="conversionResult"> 
<?php function convertCurrency($amount, $fromCurrency, $toCurrency) {

 $conversionRates = [ "CAN" => 1.00, "USD" => 0.72, "EUR" => 0.67, "GBP" => 0.56, "CHY" => 5.16 ];

 if (!is_numeric($amount)) { return "Error: The input amount is not a valid number."; }
 if ($fromCurrency === $toCurrency) { $convertedAmount = $amount; } 
 else { $convertedAmount = ($amount / $conversionRates[$fromCurrency]) * $conversionRates[$toCurrency]; } 

 $flagIcons = [ "CAN" => "<span class='fi fi-ca'></span>", 
 "USD" => "<span class='fi fi-us'></span>", 
 "EUR" => "<span class='fi fi-eu'></span>", 
 "GBP" => "<span class='fi fi-gb'></span>", 
 "CHY" => "<span class='fi fi-cn'></span>" ];

  return "{$flagIcons[$fromCurrency]} $fromCurrency $amount = {$flagIcons[$toCurrency]} $toCurrency " . number_format($convertedAmount, 2); 
  } if ($_SERVER["REQUEST_METHOD"] == "POST") 
  { $amount = $_POST['value']; $fromCurrency = $_POST['fromCurrency']; $toCurrency = $_POST['toCurrency']; echo convertCurrency($amount, $fromCurrency, $toCurrency); } 
  ?> 
 </div>
</div>

</body>
</html>