<?php

session_start();

include '\header.php';
include '\footer.php';

?>

<!doctype html>
<html><!-- InstanceBegin template="/Templates/template.dwt.php" codeOutsideHTMLIsLocked="true" -->
<head>
    
<?php writeHead(); ?>
    <!-- InstanceBeginEditable name="Title" --><title>User Registration | Mahayana Gardens</title><!-- InstanceEndEditable -->
</head>
<body>
    
<?php writeHeader(); ?>

<main>
    <!-- InstanceBeginEditable name="Main" -->
<?php
    $Body = "";

include 'dbconnect.php';

$errors = 0; 
$user_id = $_POST['user_id']; 
$email = $_POST['email'];
$password = $_POST['password'];
    
if ((!(empty($password))) && (!(empty($password2)))) { 
    if (strlen($password) < 6) { 
        ++$errors; 
        $Body .= "<p>The password is too short.</p>\n"; 
        $password = ""; 
        $password2 = ""; 
    } 
    if ($password <> $password2) { 
        ++$errors; 
        $Body .= "<p>The passwords do not match.</p>\n"; 
        $password = ""; 
        $password2 = ""; 
    } 
}

if ($errors == 0) { 
    $DBConnect = dbConnect(); 
}

$TableName = "users"; 

if ($errors == 0) { 
    // Check user name
    $SQLstring = 'SELECT count(*) FROM ' . $TableName . ' where user_id="' . $user_id . '"'; 
    
    $QueryResult = @mysql_query($SQLstring, $DBConnect); 
    
    if ($QueryResult !== FALSE) { 
        $Row = mysql_fetch_row($QueryResult); 
        
        if ($Row[0]>0) { 
            $Body .= "<p>The user name entered (" . htmlentities($user_id) . ") is already registered.</p>\n"; 
            ++$errors; 
        } 
    } 
    // Check email
    $SQLstring = "SELECT count(*) FROM $TableName" . "where email=$email"; 
    $QueryResult = @mysql_query($SQLstring, $DBConnect); 
    
    if ($QueryResult !== FALSE) { 
        $Row = mysql_fetch_row($QueryResult); 
        
        if ($Row[0]>0) { 
            $Body .= "<p>The email address entered (" . htmlentities($email) . ") is already registered.</p>\n"; 
            ++$errors; 
        } 
    } 
}

if ($errors > 0) { 
    $Body .= "<p>Please use your browser's BACK button to return" . " to the form and fix the errors indicated.</p>\n"; 
}

if ($errors == 0) { 
    $first = stripslashes($_POST['first']); 
    $last = stripslashes($_POST['last']); 
    
    $SQLstring = 'INSERT INTO ' . $TableName  .  ' (user_id, email, password_md5, first, last) '  .  'VALUES( "' . $user_id . '", "' . $email . '", "' . md5($password) . '","' . $first . '","' . $last . '")'; 
    
    $QueryResult = @mysql_query($SQLstring, $DBConnect); 
    
    if ($QueryResult === FALSE) { 
        $Body .= "<p>Unable to save your registration " . " information. Error code " . mysql_errno($DBConnect) . ": " . mysql_error($DBConnect) . "</p>\n"; 
        ++$errors; 
    } else { 
        $_SESSION["user_id"] = $user_id;
    } 

    mysql_close($DBConnect); 
}

if ($errors == 0) {
    $_SESSION['logged_in'] = true;
    $user_name = $first . " " . $last; 
    $Body .= "<p>Thank you, $user_name. "; 
    $Body .= "You are now registered!</p>\n"; 
    $Body .= 'Redirecting you now. If you are not redirected, please <a href="' . $_SESSION['last_page'] . '">click here</a> to return to your previous page.</p>\n';
    header('refresh:5;url=' . $_SESSION['last_page']);
}
echo $Body;
?>
    <!-- InstanceEndEditable -->
</main>

<footer>
    <?php writeFooter(); ?>
</footer>

</body>
<!-- InstanceEnd --></html>