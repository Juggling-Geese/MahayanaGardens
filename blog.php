<?php

session_start();

if(isset($_SESSION['last_page']) && !empty($_SESSION['last_page']))
    $_SESSION['current_page'] = $_SESSION['last_page'];
$_SESSION['current_page'] = basename($_SERVER['PHP_SELF']);
include '\header.php';
include '\footer.php';

?>

<!doctype html>
<html><!-- InstanceBegin template="/Templates/template.dwt.php" codeOutsideHTMLIsLocked="true" -->
<head>
    
<?php writeHead(); ?>
    <!-- InstanceBeginEditable name="Title" --><title>Blog | Mahayana Gardens</title><!-- InstanceEndEditable -->
</head>
<body>
    
<?php writeHeader(); ?>

<main>
    <!-- InstanceBeginEditable name="Main" -->
    <?php if(isset($_SESSION['current_page']) && !empty($_SESSION['current_page']))
        $_SESSION['last_page'] = $_SESSION['current_page'];
    $_SESSION['current_page'] = basename(__FILE__); ?>
    <div class="sidebar"> 
			<div class="section">
				<h3>Our Blog</h3>
				Part of our goal at Mahayana Gardens to make sure that you have not only the resources but the knowledge to truly excel in your endeavors. This means knowing how to utilize the gifts that God has given us in all manners. Here, expect to find all kinds of articles from using fresh herbs to essential oils, companion planting to pest control. If you have any special requests for a topic you wish to learn more about, or share with others, please email us at <a href="mailto:mahayanagardens@zendeavors.net">mahayanagardens@zendeavors.net</a> and we will do our best to accomodate you in a timely manner. Thank you for visiting.
			</div> 
			<hr>
			<div class="section">
				<img src="images/running-girl.jpg" alt="Young girl running down the stone steps and out a wooden gate">
				<h3>More Coming Soon</h3>
				We strive to keep you up to date and informed, however there's only so much time in the day, week, month, etc. Please forgive the timeliness of new posts. We are doing our best!
			</div> 
		</div>
		
		<article>
			<a id="PestRepel"><img class="imgheader" src="images/lavender-header.jpg" alt="Lavender field at sunset"></a>
			<h2>Pest Repellant Plants</h2>
			<h4>Did you know that you can use living plants to help repell bugs? (I'm looking at you mosquitos!)</h4>
			<div>
				 Planting these plants in planters and placing them around your porch (or throughout your garden) can help reduce the number of insects you are plaugued with while you enjoy the great outdoors from your backyard. They smell amazing, bring color and green to your porch, and allow you to bring some excellent herbs to your door. There are also other plant you can put in your garden to deter other kinds of pests as well such deer and rabbits that are beautiful to see and experience, but can do a number on your harvest. Repelling pests also has the added bonus of allowing the good insects to thrive better, further decreasing your pest problems. Beneficial insects such as ladybugs and praying mantis can thrive easier when the bad bugs are more in control, and they are better able to assist in keeping the bad bugs away as well. Ladybugs consume 50 to 60 aphids per day but will also eat a variety of other insects and larvae including scales, mealy bugs, leaf hoppers, mites, and various types of soft-bodied insects. The praying mantis is an excellent, though mostly indistinguishing eater of insects such as flies, crickets, caterpillars, grasshoppers and moths. Be careful as they will also eat butterflies and bees as well.
				<br><br>
				<span class="emphasize">Lavender </span> is one of my favorite plants to grow along with sage. Bees absolutely love lavender, and I've seen the occasional flies buzzing around these beautiful flowers as well. Lavender is an excellent deterent as the strong smell sends nearly all insects away, particularly fleas and mothss. You can even hang some dried lavender in your closet to keep the moths from eating your clothes (plus, moth balls stink and are not environmentally friendly). As this herb is a perennial, it will do better planted in the ground. I will admit I haven't had much luck with this in a pot, as it doesn't seem to grow very big (or I just haven't figured out to make it grow well in a pot). They are also drought resistant once established. A bonus for those of us in the drier climates such as Colorado where water resources are at a premium. Lastly, try hanging a couple of sprigs of dried lavender on yourself or rubbing your skin with fresh leaves. Not only will you smell amazing, but it will also help deter the bugs.
				<br><br>
				<img class="floatright" src="images/lemongrass.jpg" alt="Lemongrass">
				<span class="emphasize">Lemon Grass </span> is an amazing and wonderful smelling decorative grass growing up to 4 feet tall (I may plant some next to my low fence to block my neighbor's view a bit and repel nasty mosquitos come to think of it). Lemon grass contains citronella, a main ingredient in many mosquito repellants. You can find plenty of citronella candles on the market that are supposed to deter mosquitos, though I've had mixed results with them. It will deter insects such as flies, ticks, ants, and gnats as well. Lemon grass will tolerate heat and droughts, making it perfect for Colorado summers, but it will not tolerate frost. Plant it after the danger of frost has gone completely and you are ready to plant your other sensitive plants. Lemongrass is also a popular ingredient for Thai food, so if you enjoy Thai you will love this plant!
				<br><br>
				<span class="emphasize">Rosemary </span> is another one of my favorites. Along with sage, I add it to so many of my dishes whether it makes sense or not (my tex-mex style black beans get a good dose of this in both sauteing the veggies and added directly to the beans as well). This amazing plant deters flies and mosquitos with it's wonderful scent. It will also drive away cabbage moths, and does well in hot dry weather. Again, a bonus for Colorado residents! I've also had success growing it in pots, so feel free to put it spread throughout the garden with a potted plant near your back door!
				<br><br>
				<span class="emphasize">Mint </span>grows like a weed and will quickly take over a garden, so I strongly suggest if you do decide to use mint in your garden, you either grow it in a container on your porch or buried in the dirt to keep it from spreading. Someone planted some mint along the edge of my house before I moved in, and even after the landlord replaced the dirt surrounding the house with rocks or concrete, it still grows all along that side of the house (along with some determined sweet peas that come back each year as well very faithfully. Having said that, mint is a wonderful pest deterent. Ants, mosquitos and mice hate the stuff. Take cuttings of mint, and add it to your mulch to help broccoli, cabbage, and turnips. 
				<br><br>
				<img class="floatleft" src="images/marigold.jpg" alt="Marigold flower with butterfly">
				<span class="emphasize">Marigolds </span> are a wonderful splash of color to any flower garden that are easy to grow and bloom throughout the summer. Marigolds contain a compound used in insect repellant. These beautiful flowers can repel mosquitos and other pests such as squash bugs, and tomato worms. French marigolds also repel whiteflies and nematodes, while Mexican marigolds deter many destructive insects, wild rabbits, and deer. Be sure that the marigolds you select are well scented, and also be aware that while they will deter many pests, they do attract spider mites and snails.
				<br><br>
				<span class="emphasize">Honorable Mentions... </span>While I would love to go through all of the amazing pest detering plants, I will conclude with a list of other good options and let you search for them yourself. Basil is a favorite that when planted with tomatoes benefits both plants (and taste good paired together!) Lemon thyme repels mosquitos, and will thrive in shallow, dry or rocky roil so add it to your rock garden to deter the mosquitos. Chives will repel carrot flies, Japanese beetle, and aphids. Dill does a good job with aphids, squash bugs, spider mites, cabbage loopers, and tomato hornworms. Garlic, fennel, oregano, parsley, and thyme are also good herbs to check out!
				<br><br>
				There are also a number of great ornamental plants that can help deter pests as well. Check out alliums, chrysanthemums, nasturiums, petunias, common lantanas, four o'clocks, geraniums, and narcicuss. Of course, there is also the carnivorous plants such as the pitcher plant and the venus fly trap as well.
			</div>
			<div class="alignright"><a href="#top"><br>Back to Top</a></div>
		</article>
    <!-- InstanceEndEditable -->
</main>

<footer>
    <?php writeFooter(); ?>
</footer>

</body>
<!-- InstanceEnd --></html>