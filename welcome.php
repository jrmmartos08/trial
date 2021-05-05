
<html>
<head>
  <title>WELCOME</title>
</head>
<body>

<link rel="stylesheet" type="text/css" href="Log.css">
<section class="Logout">
<?php 

$usrnm="ADMIN";
$psswrd="ADMIN123";
$null= null;

session_start();

if(isset($_SESSION['user'])){

  echo "<h1 align='center'> WELCOME ".$_SESSION['user']."</h1>";

  echo "<br><a href='Logout.php'><input type=button value=LOGOUT name=logout></a>";
}

else {

 if ($_POST['user']==$usrnm && $_POST['pass']==$psswrd){

    $_SESSION['user']=$usrnm;
    echo "<script>location.href='welcome.php'</script>";

  
  }


else if ($_POST['user']==$usrnm && $_POST['pass']!=$null){

  echo "<script> alert('Wrong Password!') </script>";
  session_destroy();

echo "<script>location.href='act1.php'</script>";
session_destroy();

}

else if ($_POST['pass']==$null){

echo "<script>alert('No Password!')</script>";
session_destroy();

echo "<script>location.href='act1.php'</script>";
session_destroy();

}

else if ($_POST['user']==$null){

  echo "<script>alert('No Username!')</script>";
  session_destroy();

echo "<script>location.href='act1.php'</script>";
session_destroy();

}

else{

echo "<script>alert('User does not exist!')</script>";
session_destroy();

echo "<script>location.href='act1.php'</script>";
session_destroy();

}
}
// else {

// echo "<script>location.href='act1.php'</script>";
// session_destroy();
// }


?>
</section>
</body>
</html>