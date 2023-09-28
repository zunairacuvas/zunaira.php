<!DOCTYPE html>
<html>
<head>
<title>SIMPLE CALCULATOR</title>
</head>
<body>
    <h2>SIMPLE CALCULATOR</h2>
<form action="" method="post">

   <input type="text" name="n1" value="" placeholder="Enter Number"><br>
    <input type="text" name="n2" value="" placeholder="Enter Number"><br>
    <input type="submit" name="a" value="ADD +">
    <input type="submit" name="m" value="MUL *">
    <input type="submit" name="d" value="DIV /">
    <input type="submit" name="s" value="SUB -">

</form>

<?php
  
    if(isset($_POST['a']))  // a is a add button name
      {
        $n1 = $_POST['n1']; // textbox1
        $n2 = $_POST['n2']; // textbox2
        $add= $n1+$n2;      // addition here

            echo"<h2>Addition =</h2>".$add; //calculate
      }

      if(isset($_POST['m']))  // a is a mul button name
      {
        $n1 = $_POST['n1']; // textbox1
        $n2 = $_POST['n2']; // textbox2
        $m= $n1*$n2;      // multiplication here

            echo"<h2>Multiplication =</h2>".$m; //calculate
      }  

      if(isset($_POST['d']))  // a is a div button name
      {
        $n1 = $_POST['n1']; // textbox1
        $n2 = $_POST['n2']; // textbox2
        $d= $n1/$n2;      // division here

            echo"<h2>Division =</h2>".$d; //calculate
      }

      if(isset($_POST['s']))  // a is a sub button name
      {
        $n1 = $_POST['n1']; // textbox1
        $n2 = $_POST['n2']; // textbox2
        $s= $n1-$n2;      // substraction here

            echo"<h2>Substraction =</h2>".$s;  //calculate
      }

      ?>
      </body>
      </html>