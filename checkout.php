<?php

session_start();

include '\header.php';
include '\footer.php';

?>

<!doctype html>
<html><!-- InstanceBegin template="/Templates/template.dwt.php" codeOutsideHTMLIsLocked="true" -->
<head>
    
<?php writeHead(); ?>
    <!-- InstanceBeginEditable name="Title" --><title>Check Out | Mahayana Gardens</title><!-- InstanceEndEditable -->
</head>
<body>
    
<?php writeHeader(); ?>

<main>
    <!-- InstanceBeginEditable name="Main" -->
    <?php
    if(isset($_SESSION['current_page']) && !empty($_SESSION['current_page']))
        $_SESSION['last_page'] = $_SESSION['current_page'];
    $_SESSION['current_page'] = basename(__FILE__);
    
    if(isset($_SESSION['logged_in']) && ($_SESSION['logged_in'] == true)){
        // Show checkout
        echo "<h1>Checkout</h1>";
        echo "<p>Under construction</p>";
        // Will email cart and userid to follow up on payment
    } else {
        // Redirect to login page
        header('Location: login.php?'. session_id());
    }
        
        ?>
    <!-- InstanceEndEditable -->
</main>

<footer>
    <?php writeFooter(); ?>
</footer>

</body>
<!-- InstanceEnd --></html>