<?php

session_start();

include '\header.php';
include '\footer.php';

?>

<!doctype html>
<html><!-- InstanceBegin template="/Templates/template.dwt.php" codeOutsideHTMLIsLocked="true" -->
<head>
    
<?php writeHead(); ?>
    <!-- InstanceBeginEditable name="Title" --><title>Shopping Cart | Mahayana Gardens</title><!-- InstanceEndEditable -->
</head>
<body>
    
<?php writeHeader(); ?>

<main>
    <!-- InstanceBeginEditable name="Main" -->
<?php
    if(isset($_SESSION['current_page']) && !empty($_SESSION['current_page']))
        $_SESSION['last_page'] = $_SESSION['current_page'];
    $_SESSION['current_page'] = basename(__FILE__);
    
include 'dbconnect.php';
loadItems();
//var_dump($_SESSION['products']);
$items = 0;
$Body = "";
echo "<h2>Shopping Cart</h2>";
    
if(isset($_SESSION['cart']) && !empty($_SESSION['cart'])){
    $cart = $_SESSION['cart'];
    //var_dump($cart);
    
    if(isset($_GET['checkout']))
        header('Location: checkout.php?' . session_id());
    else if(isset($_GET['submit'])){
        foreach($_SESSION['in_cart'] as $item => $quantity){
            //echo $item;
            //echo $_GET[$item];
            //$quantity = $_GET[$item];
            $cart += [$item => $_GET[$item]];
        }
    }
    $_SESSION['in_cart'] = $cart;
    $Body .= loadCart($Body);
} else{
    $Body .= "<h3>Your shopping cart is empty! </h3>";
    
}
    
    
function loadCart($Body){
    $cart = $_SESSION['cart'];
    $in_cart = array();
    foreach($cart as $item => $quantity){
        //echo $item . "=>" . $quantity . " \r";
        if( $quantity > 0 ){
            $in_cart += [$item => $quantity];
        }
    }
    if(!isset($in_cart)){
        $Body .= "<h3>Your shopping cart is empty! </h3>";
        return $Body;
    }
    //var_dump($in_cart);
    $Body .= '<form action="cart.php?"' . session_id() . '" >';
    foreach($in_cart as $item => $quantity){
        $item_desc = $_SESSION['products'][$item]['PRODUCT_DESC'];
        $Body .= '<p>' . $item_desc . ' <input type="number" value="' . $quantity . '" name="' . $item . '"/></p>';
    }
        //echo '<p>' . $item . ' => ' . $quantity . '</p>';
    $Body .= '<input type="submit" value="Update Cart" name="submit" />';
    $Body .= '<input type="submit" value="Checkout" name="checkout" />';
    $Body .= '</form>';
    $_SESSION['in_cart'] = $in_cart;
    return $Body;
}

//$DBConnect = dbConnect();

echo $Body;
?>
    <!-- InstanceEndEditable -->
</main>

<footer>
    <?php writeFooter(); ?>
</footer>

</body>
<!-- InstanceEnd --></html>