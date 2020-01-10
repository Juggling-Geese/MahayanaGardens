<?php

session_start();

include '\header.php';
include '\footer.php';

?>

<!doctype html>
<html><!-- InstanceBegin template="/Templates/template.dwt.php" codeOutsideHTMLIsLocked="true" -->
<head>
    
<?php writeHead(); ?>
    <!-- InstanceBeginEditable name="Title" --><title>Store | Mahayana Gardens</title><!-- InstanceEndEditable -->
</head>
<body>
    
<?php writeHeader(); ?>

<main>
    <!-- InstanceBeginEditable name="Main" -->

<?php 
    include 'dbconnect.php';
    loadItems();
    
    if(isset($_SESSION['current_page']) && !empty($_SESSION['current_page']))
        $_SESSION['last_page'] = $_SESSION['current_page'];
    $_SESSION['current_page'] = basename(__FILE__);
    
    //echo 'Check if there\'s a cart\n';
// Create an empty cart if it's not present yet
if(!isset($_SESSION['cart'])){ 
    //echo 'Creating a cart';
    $cart = array('FLOWERBSK' => 0,
                 'FAIRYBSK' => 0,
                 'FAIRYSMALL'=> 0,
                 'FAIRYLARGE'=> 0,
                 'STRAWSTART' => 0,
                 'LETTSTART'=> 0,
                 'PARSSTART'=> 0,
                 'OREGSTART'=> 0,
                 'ARUGSTART' => 0);
    //var_dump($cart);
    $_SESSION['cart'] = $cart; //Make sure cart saves with session
    //var_dump($_SESSION['cart']);
}  else{ 
    //echo 'There\'s a cart';
    //var_dump($_SESSION['cart']);
    $cart = $_SESSION['cart'];
    //var_dump($cart);
}

// Update cart contents if a submit button was hit
if(isset($_GET['submit'])){
//    if( $_GET['update'] == 'starts'){
//        //echo "Is starts";
//        $cart['STRAWSTART'] = (int) $_GET['STRAWSTART'];
//        $cart['LETTSTART'] = (int) $_GET['LETTSTART'];
//        $cart['PARSSTART'] = (int) $_GET['PARSSTART'];
//        $cart['OREGSTART'] = (int) $_GET['OREGSTART'];
//        $cart['ARUGSTART'] = (int) $_GET['ARUGSTART'];
//    } 
    
    switch( $_GET['update']){
        case 'starts':
            $cart['STRAWSTART'] = (int) $_GET['STRAWSTART'];
            $cart['LETTSTART'] = (int) $_GET['LETTSTART'];
            $cart['PARSSTART'] = (int) $_GET['PARSSTART'];
            $cart['OREGSTART'] = (int) $_GET['OREGSTART'];
            $cart['ARUGSTART'] = (int) $_GET['ARUGSTART'];
            break;
        case 'baskets':
            $cart['FLOWERBSK'] = (int) $_GET['FLOWERBSK'];
            break;
        case 'fairy':
            $cart['FAIRYBSK'] = (int) $_GET['FAIRYBSK'];
            $cart['FAIRYSMALL'] = (int) $_GET['FAIRYSMALL'];
            $cart['FAIRYLARGE'] = (int) $_GET['FAIRYLARGE'];
            break;
    }
    // Save cart updates
    $_SESSION['cart'] = $cart;
    //var_dump($cart);
    
}
?>
    <div class="sidebar"> 
			
			<div class="section">
				<h3>Quick Links</h3>
				<ul>
                    <li><a href="cart.php?<?php echo session_id(); ?>">View Shopping Cart</a></li>
					<li><a href="#plant_starts">Plant Starts</a></li>
					<li><a href="#dried_herbs">Dried Herbs</a></li>
					<li><a href="#flower_baskets">Flower Baskets</a></li>
					<li><a href="#fairy_gardens">Fairy Gardens</a></li>
				</ul>
			</div>
			<hr>
			<div class="section">
				<h3>Our Store</h3>
				We offer a small selection of organic plants, preplanted planters, and some fair gardens to bring an element of fantasy to your world. If you have any special requests for an item you don't see here or would like for us to carry, please email us at <a href="mailto:mahayanagardens@zendeavors.net">mahayanagardens@zendeavors.net</a> and we will do our best to accomodate you in a timely manner. Thank you for visiting.
			</div> 
			<hr>
			<div class="section">
				<a href="blog.php#PestRepel"><img src="images/marigold.jpg" alt="Marigold flower with butterfly">
				<h3>Pest Repellant Plants</h3></a>
				Did you know that you can use living plants to help repell bugs? Check out our blog piece to learn more!
			</div> 
		</div>
		
		<div class="store">
			<img class="imgheader" src="images/store-header.jpg" alt="Plant starters and getting ready to plant">
			
			<a id="plant_starts"></a>
			<div class="storeitem">
				<h2>Plant Starters</h2>
					<img src="images/plant-starts.jpg" alt="Collection of plant starts including herbs and greens">
					<div class="storedesc">
						We contract with a number of local growers to bring you the finest and healthiest organic plant starts to get your garden off to the best start! 
                        <!--We offer a number of vegetable starts including a variety of broccoli, cabbage, cauliflower, corn, cucumber, eggplant, lettuce, melons, pumpkins, squash, tomatoes, tomatillos, peppers, and watermelons. We currently do not have fruit bushes or trees to ship. We do, however, provide a variety of herbs such as basil, catnip, chives, cilantro, dill, lavender, german chamomile, parsley, sage, lemon balm, mint, rosemary, St. John's Wort, summer savory, sweet marjoram, and thyme. We also have a limited selection of flowers, as we focus our flowers on our premade <a href="#flower_baskets">flower baskets</a>. Our main flowers are asters, nastruriums, zinnia, cosmos, pansies, morning glories, bachelor's buttons, petunias, marigolds, sweet peas, and daisies. We have each available in small sets, starting at $2/plant and going up to large 10 gallon plants at around $15 per plant. --> 
                        We currently have a limited number available to purchase online, so to see the varieties and price lists for this season, please fill out our <a href="contact.php">contact form</a> so that we can get you our catalog for this year.
					</div>
                <div class="storedesc add-to-cart">
<?php

$div = '<form action="store.php?' . session_id() . '&update=starts"> ';
$div .= '<p>Strawberry Starters 
<input type="number" value="' . $cart['STRAWSTART'] . '" name="STRAWSTART" /></p>';
$div .= '<p>Lettuce Starters 
<input type="number" value="' . $cart['LETTSTART'] . '" name="LETTSTART" /></p>';
$div .= '<p>Parsley Starters 
<input type="number" value="' . $cart['PARSSTART'] . '" name="PARSSTART" /></p>';
$div .= '<p>Oregano Starters 
<input type="number" value="' . $cart['OREGSTART'] . '" name="OREGSTART" /></p>';
$div .= '<p>Arugula Starters 
<input type="number" value="' . $cart['ARUGSTART'] . '" name="ARUGSTART" /></p>'; 
$div .= '<input type="hidden" name="update" value="starts" />';
$div .= '<input type="submit" name="submit" value="Update Cart" />';
$div .= '</form>';

echo $div;
?>
                </div>
				<div class="totop"><a href="#top">Back to Top</a></div>
			</div>
			<!--
			<a id="dried_herbs"></a>
			<div class="storeitem">
				<h2>Dried Herbs</h2>
				<img class="store" src="images/jars-of-herbs.jpg" alt="Collection of organic dried herbs in glass jars">
				<div class="storedesc">
					We have small choice of select organic dried herbs from last year's harvest still available. They were dried naturally, and sealed quickly to maintain peak freshness. This year's selection includes, basil, lavender, sage, dill, German Chamomile, chives, rosemary, and thyme. We have a few varieties of basil including Genovese, Black Opal, and Thai as well as a variety of mints including Chocolate, Orange, Spearmint, and Lemon. Amounts vary, so please use our <a href="contact.php">contact page</a> to receive a copy of our catalog to see prices and amounts available.
				</div>
				<div class="totop"><a href="#top">Back to Top</a></div>
			</div>
-->
			<a id="flower_baskets"></a>
			<div class="storeitem">
				<h2>Flower Baskets</h2>
				<img class="store" src="images/flower-planter.jpg" alt="One hanging flower planter in focus with trailing planters out of focus">
				<div class="storedesc">
					We are still planning our flower baskets, but plan to have straight single color and multicolored flowers, as well as multiple variety baskets available. If you order now, we will contact you to verify colors and our current selection of preplanted flowers. 
				</div>
                <div class="storedesc add-to-cart">
<?php

$div = '<form action="store.php?' . session_id() . '&action=update"> ';
$div .= '<p>Hanging Flower Baskets <input type="number" value="'. $cart['FLOWERBSK'] . '" name="FLOWERBSK" /></p>';
$div .= '<input type="hidden" name="update" value="baskets" />';
$div .= '<input type="submit" name="submit" value="Update Cart" />';
$div .= '</form>';

echo $div;
?>
                </div>
				<div class="totop"><a href="#top">Back to Top</a></div>
			</div>
			
			<a id="fairy_gardens"></a>
			<div class="storeitem">
				<h2>Fairy Gardens</h2>
				<img class="store" src="images/fairy-garden.jpg" alt="Fairy garden with moss, flowers, and steps leading to a fairy dooor">
				<div class="storedesc">
					Fairy Gardens bring magic to our world, and remind us of the creativity and wonder of childhood. We recommend these as a special treat for those with children, or even to bring some whimsy to your own backyard! Each fairy garden is created uniquely, so each has different decorations and setup. Please request our catalog at our <a href="contact.php">contact page</a> to see what selections we have created. Remember, each is unique so once it's been purchased, it is no longer available. Will will also include an additional sheet to let you know which fairy gardens are no longer available, and this will be updated reguarly and sent upon request.
				</div>
                <div class="storedesc add-to-cart">
<?php

$div = '<form action="store.php?' . session_id() . '"> ';
$div .= '<p>Hanging Basket Fairy Garden 
<input type="number" value="' . $cart['FAIRYBSK'] . '" name="FAIRYBSK" /></p>';
$div .= '<p>Small Fairy Garden 
<input type="number" value="' . $cart['FAIRYSMALL'] . '" name="FAIRYSMALL" /></p>';
$div .= '<p>Large Fairy Garden 
<input type="number" value="' . $cart['FAIRYLARGE'] . '" name="FAIRYLARGE" /></p>';
$div .= '<input type="hidden" name="update" value="fairy" />';
$div .= '<input type="submit" name="submit" value="Update Cart" />';
$div .= '</form>';

echo $div;
?>
                </div>
				<div class="alignright"><a href="#top">Back to Top</a>
					
				<div class="spacer"><br><br><br></div>
					
			</div>
			</div>
		</div>
    <!-- InstanceEndEditable -->
</main>

<footer>
    <?php writeFooter(); ?>
</footer>

</body>
<!-- InstanceEnd --></html>