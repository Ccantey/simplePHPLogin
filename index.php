<?
  session_start();

  $username = "user";
  $password= "password";

  if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true){
  	header("Location: success.php"); 
  }

  if (isset($_POST['username']) && isset($_POST['password'])){
  	if ($_POST['username'] == $username && $_POST['password'] == $password){
  		$_SESSION['loggedin'] = true;
  		header("Location: success.php");
  	}
  }
?>

<html>
  <body>
    <form method="post" action="index.php">
      username: <br/>
      <input type="text" name="username"><br/>
      password: <br/>
      <input type="password" name="password"><br/>
      <input type="submit" value="Login!">
    </form>
  </body>
</html>
