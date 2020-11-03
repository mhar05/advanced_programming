<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      echo "ED MHAR APURA";
     ?>

    <form class="" action="index.php" method="post">

      <br> <h3>Calculator</h3>
      <label for="num1">Input First Number:</label><br>
      <input type="text" name="num1" value=""><br>
      <label for="num2">Input Second Number:</label><br>
      <input type="text" name="num2" value=""><br>
      <input type="submit" name="add" value="+">
      <input type="submit" name="min" value="-">
      <input type="submit" name="mul" value="*">
      <input type="submit" name="div" value="/">
      <input type="submit" name="reset" value="Reset"><br>

    </form>
    <?php
        if (isset($_POST['add'])) {
          echo "Answer: ";
          echo $_POST['num1'] + $_POST['num2'];
        } else if (isset($_POST['min'])) {
          echo "Answer: ";
          echo $_POST['num1'] - $_POST['num2'];
        } else if (isset($_POST['mul'])) {
          echo "Answer: ";
          echo $_POST['num1'] * $_POST['num2'];
        } else if (isset($_POST['div'])) {
          echo "Answer: ";
          echo $_POST['num1'] / $_POST['num2'];
        }
    ?>
    <form class="" action="index.php" method="post">
      <br> <h3>Finding GCD</h3>
      <label for="num1">Input First Number:</label><br>
      <input type="text" name="num1" value=""><br>
      <label for="num2">Input Second Number:</label><br>
      <input type="text" name="num2" value=""><br>
      <input type="submit" name="gcd" value="Submit">
    </form>

    <?php
      if(isset($_POST['gcd']))
    {
      if (!empty($_POST['num1']) && !empty($_POST['num2']))
      {
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        if ($num1 > $num2)
        {
          $temp = $num1;
          $num1 = $num2;
          $num2 = $temp;
        }
        for($i = 1; $i < ($num1+1); $i++)
        {
          if ($num1%$i == 0 and $num2%$i == 0)
            $gcd = $i;
        }
        echo "Answer: $gcd";
      }
    }
     ?>


  </body>
</html>
