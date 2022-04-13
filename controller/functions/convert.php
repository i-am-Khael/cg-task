
<?php

function convertCurrency(){

    $userInput = $_POST['converter'];
    $userInput = stripcslashes($userInput);
    $userInput = htmlspecialchars($userInput);
    $userInput = filter_var($userInput, FILTER_SANITIZE_STRING);
    $API_KEY = 'e72d1e558fb407f739a7';

    $json = file_get_contents("https://free.currconv.com/api/v7/convert?q=USD_PHP,PHP_USD&compact=ultra&apiKey=e72d1e558fb407f739a7");
    $obj = json_decode($json, true);

    $USD_PHP = floatval($obj['USD_PHP']);
    $PHP_USD = floatval($obj['PHP_USD']);
    $a = number_format($USD_PHP, 2, '.', '');
    $b = number_format($PHP_USD, 2, '.', '');
    $a = $userInput * $a;
    $b = $userInput * $b;
   

      echo '<tr>';
      echo '<td>'.$a.'</td>';
      echo '<td>'.$b.'</td>';
      echo '</tr>';

    
  }

    
?>
