<?php

session_start();

include '\header.php';
include '\footer.php';

?>

<!doctype html>
<html><!-- InstanceBegin template="/Templates/template.dwt.php" codeOutsideHTMLIsLocked="true" -->
<head>
    
<?php writeHead(); ?>
    <!-- InstanceBeginEditable name="Title" --><title>Home | Mahayana Gardens</title><!-- InstanceEndEditable -->
</head>
<body>
    
<?php writeHeader(); ?>

<main>
    <!-- InstanceBeginEditable name="Main" -->
    <div class="box">
			<figure id="left">
				<a href="about.php">
					<img id="aboutus" onMouseOver="document.getElementById('aboutus').src='images/onAboutUs.jpg';" onMouseOut="document.getElementById('aboutus').src='images/aboutus.jpg';" src="images/aboutus.jpg" alt="Multigenerational Hands Holding Dirt with Sprout">
				</a>
				<figcaption>Mahayana Gardens is committed to healthy and sustainable gardening and wellness. We work hard to make sure that all of the plants we sell are chemically free, non-GMO, and grown organically.</figcaption>
			</figure>
			<figure>
				<a href="store.php">
					<img id="store" onMouseOver="document.getElementById('store').src='images/store-on.jpg';" onMouseOut="document.getElementById('store').src='images/store.jpg';" src="images/store.jpg" alt="A young child working in the garden">
				</a>
				<figcaption>We specialize in herbs of all kinds, but also offer a selection of vegetable starts such as tomatoes, peppers, eggplants, among others.</figcaption>
			</figure>
			<figure>
				<a href="contact.php">
					<img id="contact" onMouseOver="document.getElementById('contact').src='images/contact-on.jpg';" onMouseOut="document.getElementById('contact').src='images/jars-of-herbs.jpg';" src="images/jars-of-herbs.jpg" alt="A collection of jars full of herbs">
				</a>
				<figcaption>We strive to make our site a resource for individuals and families interested in including herbs in their wellness routines, to increase the health of their gardens. Let us know what more we can do for you!</figcaption>
			</figure>		
			<figure>
				<a href="https://ccc-appview.edupe.io/~3060/MahayanaLiving">
					<img id="sister" onMouseOver="document.getElementById('sister').src='images/logo-on.jpg';" onMouseOut="document.getElementById('sister').src='images/logo.jpg';" src="images/logo.jpg" alt="Mahayana Living - Logo for our Sister Site">
				</a>
				<figcaption>We parter with our sister site, <a href="#">Mahayana Living</a>, to increase awareness of herbs in all their forms as a natural supplement and replacement for many standard modern rememdies.	</figcaption>	
			</figure>
			<figure>
				<a href="blog.php">
					<img id="blog" onMouseOver="document.getElementById('blog').src='images/blog-on.jpg';" onMouseOut="document.getElementById('blog').src='images/fresh-herbs-mortar-pestle.jpg';" src="images/fresh-herbs-mortar-pestle.jpg" alt="Fresh Herbs with a Mortar and Pestle - Click to view blog">
				</a>
				<figcaption>Visit <a href="blog.php">our blog</a> that includes information on different herbs, companion planting, and recipes for both food and wellness.</figcaption>
			</figure>
			<figure>
				<a href="resources.php">
					<img id="resources" onMouseOver="document.getElementById('resources').src='images/resources-on.jpg';" onMouseOut="document.getElementById('resources').src='images/gardening-resources.jpg';" src="images/gardening-resources.jpg" alt="Gardening tools and supplies">
				</a>
				<figcaption>You can also check out our <a href="resources.php">Additional Resources</a> to connect with other great resources around the web! </figcaption>
			</figure>
		</div>
    <!-- InstanceEndEditable -->
</main>

<footer>
    <?php writeFooter(); ?>
</footer>

</body>
<!-- InstanceEnd --></html>