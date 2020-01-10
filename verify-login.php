<?php

session_start();

include 'dbconnect.php';
$DBConnect = dbConnect();
$errors = 0; 
$userid = stripslashes($_POST['user_id']);
$password_md5 = md5(stripslashes($_POST['password']));

$TableName = "users"; 
if ($errors == 0) { 
    $SQLstring = "SELECT * FROM $TableName" . " where user_id='" . $userid . "' and password_md5='" . $password_md5 . "'"; 
    $QueryResult = @mysql_query($SQLstring, $DBConnect); 
    
    if (mysql_num_rows($QueryResult)==0) { 
        echo "<p>The e-mail address/password " . " combination entered is not valid. </p>\n"; 
        ++$errors; 
    } else { 
        $Row = mysql_fetch_assoc($QueryResult); 
        $_SESSION['user_id'] = $Row['user_id']; 
        $_SESSION['logged_in'] = true;
        //echo "<p>Welcome back, " . $Row['first'] . "!</p>\n"; 
        //header("refresh:5;url=index.php");
        if(isset($_SESSION['last_page']))
            header("Location: " . $_SESSION['last_page'].'?' . session_id());
        else
            header("Location: index.php?" . session_id());
    } 
}

?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Verify Login</title>
</head>

<body>
</body>
</html>