<!DOCTYPE html>
<html>
<head>
  <title>PHP Simple Calc</title>
  <link href="https://fonts.googleapis.com/css?family=Righteous&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
  
<style>
body {
  background:#4f25e4;
  font-size: 12px;
}
body, button, input {
  font-family: 'Righteous', cursive;
  font-weight: 700;
  letter-spacing: 1.4px;
}
.background {
  display: flex;
  min-height: 100vh;
}
.container {
  flex: 0 1 700px;
  margin: auto;
  padding: 10px;
}
.screen {
  position: relative;
  background: #cf2525;
  border-radius: 15px;
}
.screen:after {
  content: '';
  display: block;
  position: absolute;
  top: 0;
  left: 20px;
  right: 20px;
  bottom: 0;
  border-radius: 15px;
  box-shadow: 0 20px 40px rgba(0, 0, 0, .4);
  z-index: -1;
}
.screen-body {
  display: flex;
}
.screen-body-item {
  flex: 1;
  padding: 50px;
}
.screen-body-item.left {
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
}
.app-title {
  display: flex;
  justify-content: center;
  align-items: center;
  color: #ebfc06;
  font-size: 26px;
  text-transform: uppercase;
  border-left: 4px solid #218c74;
  padding: 10px;
}
.app-form-group {
  margin-bottom: 15px;
}
.app-form-group.buttons {
  margin-bottom: 0;
  text-align: right;
}
.app-form-control {
  width: 100%;
  padding: 10px 0;
  background: none;
  border: none;
  border-bottom: 1px solid #666;
  color: #ddd;
  font-size: 14px;
  text-transform: uppercase;
  outline: none;
  transition: border-color .2s;
}
.app-form-control::placeholder {
  color: #FFF;
  text-align: center;
}
.app-form-control:focus {
  border-bottom-color: #ddd;
}
.app-form-button {
  background: #4f25e4;
  border: none;
  color: #fff;
  font-size: 1.3rem;
  cursor: pointer;
  padding: 0.4rem;
  border-radius: 0.4rem;
  text-transform: uppercase;
  margin-top: 1rem;
}
.app-form-button:hover {
  color: #ebfc06;
}
.showdata{
  text-align: center;
  color: white;
  font-size: 1.2rem;
  padding-top: -10px;
  padding-bottom: 10px;
}
.select-style select{
  padding: 0.5rem;
  width: 100%;
  font-size: 1rem;
  border: none;
}
</style>
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
              <input  type="text"  class="app-form-control"  placeholder="Enter Number" name="num2">
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
             
             if(isset($_POST['submit'])){
               $num1 = $_POST['num1'];
               $num2 = $_POST['num2'];
              $operation = $_POST['operation'];
              switch($operation){
                case 'add': $sum = $num1 + $num2;
                echo "The addition of two number is {$sum}";
                break;
                case 'sub': $sub = $num1 - $num2;
                echo "The subtraction of two number is {$sub}";
                break;
                case 'mult': $mult = $num1 * $num2;
                echo "The multiplication of two number is {$mult}";
                break;
                case 'div': $div = $num1 / $num2;
                echo "The division of two number is {$div}";
                break;
                default: echo "Sorry it not exist!";
              }
             }
          ?>
        </p>
     </div>
  </div>
</div>
</body>
</html>