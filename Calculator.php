<!DOCTYPE html>
<html>

<head>
  <title>PHP Simple Calc</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
  <link rel="stylesheet" href="./style.css">
</head>

<body>
  <div class="background">
    <div class="container">
      <div class="screen">
        <div class="screen-body">
          <div class="screen-body-item left">
            <div class="app-title">
              <div class="animated infinite pulse">
                PHP <br> CALCULATOR
              </div>
            </div>
          </div>
          <div class="screen-body-item">
            <div class="app-form">
              <form method="POST">
                <div class="app-form-group">
                  <input type="text" class="app-form-control" placeholder="Enter Number" name="num1">
                </div>
                <div class="app-form-group">
                  <input type="text" class="app-form-control" placeholder="Enter Number" name="num2">
                </div>
                <div class="select-style">
                  <select name="operation">
                    <option value="add">ADD</option>
                    <option value="sub">SUB</option>
                    <option value="mult">MULT</option>
                    <option value="div">DIV</option>
                  </select>
                </div>
                <div>
                  <input type="submit" name="submit" value="submit" class="app-form-button">
                </div>
              </form>
            </div>
          </div>
        </div>
        <div class="app-form-group showdata">
          <p>
            <?php

            if (isset($_POST['submit'])) {
              $num1 = $_POST['num1'];
              $num2 = $_POST['num2'];
              $operation = $_POST['operation'];
              switch ($operation) {
                case 'add':
                  $sum = $num1 + $num2;
                  echo "The addition of two number is {$sum}";
                  break;
                case 'sub':
                  $sub = $num1 - $num2;
                  echo "The subtraction of two number is {$sub}";
                  break;
                case 'mult':
                  $mult = $num1 * $num2;
                  echo "The multiplication of two number is {$mult}";
                  break;
                case 'div':
                  $div = $num1 / $num2;
                  echo "The division of two number is {$div}";
                  break;
                default:
                  echo "Sorry it not exist!";
              }
            }
            ?>
          </p>
        </div>
      </div>
    </div>
</body>

</html>