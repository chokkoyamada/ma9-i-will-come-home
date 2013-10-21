<?php
require 'facebook-php-sdk/src/facebook.php';
// Create our Application instance (replace this with your appId and secret).
$facebook = new Facebook(array(
  'appId'  => '566728813381579',
  'secret' => '299af102a2a3e594a987dfdd019a33bd',
));

// Get User ID
$user = $facebook->getUser();

// We may or may not have this data based on whether the user is logged in.
//
// If we have a $user id here, it means we know the user is logged into
// Facebook, but we don't know if the access token is valid. An access
// token is invalid if the user logged out of Facebook.

if ($user) {
  try {
    // Proceed knowing you have a logged in user who's authenticated.
    $user_profile = $facebook->api('/me?locale=ja_JP');
  } catch (FacebookApiException $e) {
    error_log($e);
    $user = null;
  }
}

// Login or logout url will be needed depending on current user state.
if ($user) {
  $logoutUrl = $facebook->getLogoutUrl();
} else {
  $loginUrl = $facebook->getLoginUrl();
}
?>


<!DOCTYPE html>
<html>
<head>
<title>Bootstrap 101 Template</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
<!-- Optional theme -->
<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-theme.min.css">
<!-- Latest compiled and minified JavaScript -->
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
</head>
<body>
<?php

//error_reporting(E_ALL);
$are=isset($_REQUEST["are"])? $_REQUEST["are"] : null;
if($are){

$link = mysql_connect('localhost', 'ma9nagoya', 'ma9nagoyapasswd');
if (!$link) {
    die('接続失敗です。'.mysql_error());
}

$db_selected = mysql_select_db('ma9nagoya', $link);
if (!$db_selected){
    die('データベース選択失敗です。'.mysql_error());
}
//$query = sprintf("SELECT * FROM cities WHERE cities_full_name='%s'",mysql_real_escape_string($user_hometown));
		$user_name = $user_profile['name'];
//$query = sprintf("INSERT INTO users (name,fb_id) VALUES (%s,%s)",mysql_real_escape_string($user_name),mysql_real_escape_string($user));
$query = sprintf("SELECT * FROM users WHERE fb_id='%s'",mysql_real_escape_string($user));
$result = mysql_query($query);
if (!$result) {
    die('クエリーが失敗しました。'.mysql_error());
	echo "クエリー失敗";
}
while ($row = mysql_fetch_assoc($result)) {
$id_exist = 1;
}
if($id_exist==1){

$query = "INSERT INTO users (name,fb_id) VALUES ('$user_name','$user')";


$result = mysql_query($query);
if (!$result) {
    die('クエリーが失敗しました。'.mysql_error());
	echo "クエリー失敗";
}}

//$query = "INSERT INTO user_cities (id,citites_code) VALUES ('$user_name','$user')";


$result = mysql_query($query);
if (!$result) {
    die('クエリーが失敗しました。'.mysql_error());
	echo "クエリー失敗";
}
//
//if (!$result) {
//    $message  = 'Invalid query: ' . mysql_error() . "\n";
//    $message .= 'Whole query: ' . $query;
//    die($message);
//}
//
//while ($row = mysql_fetch_assoc($result)) {
//    //echo $row['cities_code'];
//    //echo $row['cities_name'];
//    //echo $row['pref_name'];
//header("Location: ../../main/index");
//}
//	echo "ユーザ登録してください";
//
//mysql_close($link);
//
//
//
}

try {
	if($user) {
		$user_profile = $facebook->api('/me?locale=ja_JP');
		$user_name = $user_profile['name'];
		$user_hometown = $user_profile['hometown']['name'];  
	//	echo "<br>";
	//	echo "名前:" . $user_name;
	//	echo "<br>";
	//	echo "fb_id:" . $user;
	//	echo "<br>";
	//	echo "故郷:" . $user_hometown;
	//	echo "<br>";


$link = mysql_connect('localhost', 'ma9nagoya', 'ma9nagoyapasswd');
if (!$link) {
    die('接続失敗です。'.mysql_error());
}

$db_selected = mysql_select_db('ma9nagoya', $link);
if (!$db_selected){
    die('データベース選択失敗です。'.mysql_error());
}
//$query = sprintf("SELECT * FROM cities WHERE cities_full_name='%s'",mysql_real_escape_string($user_hometown));
$query = sprintf("SELECT * FROM users WHERE fb_id='%s'",mysql_real_escape_string($user));

$result = mysql_query($query);
if (!$result) {
    die('クエリーが失敗しました。'.mysql_error());
	echo "クエリー失敗";
}

if (!$result) {
    $message  = 'Invalid query: ' . mysql_error() . "\n";
    $message .= 'Whole query: ' . $query;
    die($message);
}

while ($row = mysql_fetch_assoc($result)) {
    //echo $row['cities_code'];
    //echo $row['cities_name'];
    //echo $row['pref_name'];
header("Location: ../../../index");
}

mysql_close($link);
?>




<div class="container">
            <div class="span4 well">
                <form class="form-horizontal">
                    <fieldset>



<?php


	} else {
		//
		$login_url = $facebook->getLoginUrl();
		echo 'ログインしてください: <a href=' .$login_url . '">login.</a>';
	}
} catch (FacebookApiException $e) {

	$login_url = $facebook->getLoginUrl();
	echo 'ログインしてください!：<a href=' .$login_url . '">login.</a><br />';
	echo $e->getMessage();
	error_log($e->getType());
	error_log($e->getMessage());
}


?>




                        <legend>ユーザ登録</legend>
<form method="post">
<p>
<input type="submit" name="are" value="facebookアカウントを登録" >
</p>
</form>
<!--
//<?php
//
//
//	} else {
//		//
//		$login_url = $facebook->getLoginUrl();
//		echo 'ログインしてください: <a href=' .$login_url . '">login.</a>';
//	}
//} catch (FacebookApiException $e) {
//
//	$login_url = $facebook->getLoginUrl();
//	echo 'ログインしてください!：<a href=' .$login_url . '">login.</a><br />';
//	echo $e->getMessage();
//	error_log($e->getType());
//	error_log($e->getMessage());
//}
//
//
//?>
-->
                    </fieldset>
                </form>
            </div>
        </div>

</body>
