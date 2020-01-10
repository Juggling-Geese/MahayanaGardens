<?php

session_start();

include '\header.php';
include '\footer.php';

?>

<!doctype html>
<html><!-- InstanceBegin template="/Templates/template.dwt.php" codeOutsideHTMLIsLocked="true" -->
<head>
    
<?php writeHead(); ?>
    <!-- InstanceBeginEditable name="Title" --><title>Login | Mahayana Living</title><!-- InstanceEndEditable -->
</head>
<body>
    
<?php writeHeader(); ?>

<main>
    <!-- InstanceBeginEditable name="Main" -->
    <h1>Login/Register</h1>
    <p>New users, please complete the top form to register as a user. Returning users, please complete the second form to log in.</p> 
<hr />

<h3>New User Registration</h3> 

<form method="post" action="registeruser.php?<?php echo session_id(); ?>"> 
    <p>
        Enter your name: First <input type="text" name="first" required/> 
        Last: <input type="text" name="last" />
    </p> 
    <p>
        Enter your e-mail address: <input type="text" name="email" required/>
    </p> 
    <p> Enter a user name: <input type="text" name="user_id" required/></p>
    <p>
        Enter a password for your account: <input type="password" name="password" required/>
    </p> 
    <p>
        Confirm your password: <input type="password" name="password2" required/>
    </p> 
    <p>
        <em>(Passwords are case-sensitive and must be at least 6 characters long)</em>
    </p> 
    <input type="reset" name="reset" value="Reset Registration Form" /> 
    <input type="submit" name="register" value="Register" /> 
</form> 

<hr />
<h3>Returning User Login</h3> 
 <form method="post" action="verify-login.php<?php echo session_id(); ?>">
    <p>
        Enter your user name address: <input type="text" name="user_id" required/>
    </p> 
    <p>
        Enter your password: <input type="password" name="password" required/>
    </p> 
    <p>
        <em>(Passwords are case-sensitive and must be at least 6 characters long)</em>
    </p> 
    <input type="submit" name="login" value="Log In" /> 
    <input type="reset" name="reset" value="Reset Login Form" /> 
    
</form> 
    <!-- InstanceEndEditable -->
</main>

<footer>
    <?php writeFooter(); ?>
</footer>

</body>
<!-- InstanceEnd --></html>