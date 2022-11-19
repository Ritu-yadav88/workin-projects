<?php
session_start();
include "connect.php";
$error="";
$username="";
$password="";
$controlname="";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login form</title>
    <link rel="stylesheet" href="mybootstrapfiles/directory.css">
  <link rel="stylesheet" href="mybootstrapfiles/bootstrap.min.css">
    <script src="mybootstrapfiles/jquery.min.js">
    </script>
    <script src="mybootstrapfiles/popper.min.js"></script>
    <script src="mybootstrapfiles/bootstrap.min.js"></script>
  <script>
    document.getElementById("mylabel").innerHTML="";
  </script>
</head>
<body>
    <div style="width:50%;position:absolute;top:30%;left:30%;padding:20px;background-color:bisque;border-radius:20px;">
    <fieldset>
        <legend>login Form</legend>
        <form method ="POST" action="" name="loginform">
         <div class="form-group">
            <label>Enter Username:</label><input type="text" class="form-control" placeholder="enter username" name="uname" required>
          </div>
          <div class="form-group">
            <label>Enter Password: </label><input type="password" class="form-control" placeholder="enter password" name="pswrd" required>
          </div>
          <label id="mylabel"></label><br>
          <label id="mylbl"></label><br>
          <input class="btn btn-success" type="submit" value="submit" name="login">
          <input class="btn btn-danger" type="reset" value="reset">
        </form>
    </fieldset>
    </div>
<?php
if(isset($_POST["login"]))
{
  $error="";
  $username="";
  $sql=$conn->query("select username from logintb where record='active' AND username='".$_POST['uname']."'");
  while($row=$sql->fetch())
  {
    $username=$row["username"];
  }
  if($username!="" || $username!=null)
  {
    $password="";
    $sql=$conn->query("select password from logintb where record='active' AND username='".$_POST['uname']."' AND password='".$_POST['pswrd']."'");
    while($row=$sql->fetch())
    {
      $password=$row["password"];
    }
    if($password!="" && $password!=null)
    {
      
      $_SESSION['Uname']=$username;      
      echo "<script>window.location='form.php';</script>";
    }
    else
    {
      $error="Password is mismatched";
      $controlname="pswrd";
    }
  }
  else
  {
    $error="Username is mismatched";
    $controlname="uname";
  }  
}
if($error!="")
{
  
?>
<script>
  
  document.loginform.<?php echo $controlname;?>.focus();
  document.querySelector("#mylabel").innerHTML="<?php echo $error;?>";  
</script>
<?php
}
?>
</body>
</html>