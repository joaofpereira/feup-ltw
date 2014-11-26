<?php

include_once("connection.php");

$username = $_POST["username"];
$password = $_POST["password"];

if (!isset($username)) die('No username');
if (!isset($password)) die('No password');

try {
  $stmt = $dbh->prepare('SELECT * FROM User WHERE username = ? AND password = ?');
  $stmt->execute(array(
    $username,
    hash('sha256',$password)));
  $user = $stmt->fetch();

  if ($user !== false /*&& password_verify($password, $user['password'], )*/) {
    $_SESSION['username'] = $username;
    
    $stmt = $dbh->prepare('UPDATE User SET lastLoginDate = ? WHERE username = ?');
    $stmt->execute(array(
      date('Y-m-d H:i:s'), 
      $username));
  }
  else die('Invalid Username or Password!');

} catch (PDOException $e) {
  die($e->getMessage());
}

header("Location: ../../index.php");
exit;
?>
