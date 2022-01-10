<!DOCTYPE HTML>  
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>.error{color:red;}
    body{
        background-color: skyblue;
    }
    @media screen and (max-width: 800px){
        .left, .main, .rigth{
            width: 100%
        }
    }
    div{
        background-color: #F7CAC9;
        /* width: 30px;
        border: 15px skyblue;
        padding: 30px;
        margin: 20px;
    } */
    </style>
</head>
<body>  

<?php


$nameerr = $emailerr = $gendererr = "";
$name = $email = $comment = $gender = "";

if($_SERVER["REQUEST_METHOD"] == "POST"){
    if(empty($_POST['name'])){
        $nameerr = "Name is required";
        }else{
            $name = test_input($_POST['name']);
        }

    if(empty($_POST['email'])){
        $emailerr = "Email is required";
    }else{
        $name = test_input($_POST['email']);
    }

}

function test_input($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

?>

<div align="center">
<p><h3>REGISTER PLEASE</h3></p>
<img src="panda.jpg" width="200" height="180">
<form method="post"  action="welcome.php">  
  Name: <input type="text" name="name">
  <span class = "error">* <?php echo $nameerr; ?></span>
  <br><br>
  E-mail: <input type="text" name="email">
  <span class = "error">* <?php echo $emailerr; ?></span> <br><br>
  How can we help you: <textarea name="comment" rows="5" cols="40"></textarea>
  <br><br>
  Gender:
  <input type="radio" name="gender" value="female">Female
  <input type="radio" name="gender" value="male">Male
  <input type="radio" name="gender" value="other">Other
  <br><br>
  <input type="submit" name="submit" value="Submit">  

</form>

<!-- <?php
echo "<br>";
echo "Your Input";
echo "<br>";
echo "<br>";
echo $name;
echo "<br>";
echo "<br>";
echo $email;
echo "<br>";
echo "<br>";
echo $comment;
echo "<br>";
echo "<br>";
echo $gender;

?>
</div> -->
</body>
</html>