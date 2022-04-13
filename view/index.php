
<?php require_once '../controller/functions/convert.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../assets/css/styles.css">
  <title>CHANZ IT |PHP  Assignment</title>
</head>
<body>
  
<main>
  <div class="container">

    <section class="money-converter">

      <h1>USD to PHP Converter</h1>
      <form method="POST">
        <input name="converter" type="text" placeholder="Input how much money to convert">
        <input name="submitConvert" type="submit" value="CONVERT">
      </form>

      <div class="converted">
        <table>
          <thead>
            <tr>
              <td>USD to PHP</td>
              <td>PHP to USD</td>
            </tr>
          </thead>
          <tbody>
            <?php convertCurrency(); ?>
          </tbody>
          </table>
      </div>

    </section>


  </div>
</main>

</body>
</html>

