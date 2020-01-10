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
    <!-- InstanceBeginEditable name="Title" --><title>Resources | Mahayana Gardens</title><!-- InstanceEndEditable -->
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
				<h3>Additional Resources</h3>
				Part of our goal at Mahayana Gardens to make sure that you have not only the resources but the knowledge to truly excel in your endeavors. This means knowing how to utilize the gifts that God has given us in all manners. Just like our blog page, you can come here to find additional resources to put to use in your garden. We have podcasts, video instructions, links to articles from across the web. In this age of interconnectedess ad information overload, we strive to provide information that is useful, relevant, high quality, and applicable to your world. If you have any additional resources you want to share with others,  please email us at <a href="mailto:mahayanagardens@zendeavors.net">mahayanagardens@zendeavors.net</a> and we will add it to our list of resources available.
			</div> 
			 
		</div>
		<img class="imgheader" src="images/resources.jpg" alt="Path through spring time woods">
		<article>
			<a id="bees"></a>
			<h2>Bees Are Precious Pollinators</h2>
			<div>
				<video controls="controls"><source src="media/bees.mp4" type="video/mp4">
					Your web browser does not support this video player. <a href="media/bees.mp4">Download the video here.</a>
				</video>
			</div>
			<div class="alignright"><a href="#top"><br>Back to Top</a></div>
		</article>
		
		<article>
			<a id="shanahan"></a>
			<h2>Linda Shanahan | Registered Nurse &amp; Herbalist | Barefoot Botanicals and Barefoot Gardens, PA</h2>
			<h3><a href="">The Organic Gardener Podcast</a> - May 21, 2015 by <a href="https://organicgardenerpodcast.com/author/jackiebeyer/">Jackie Marie Beyer</a></h3>
			<div>
				 Getting to know other gardeners is an important part of reaching out into the gardening community, 
				finding what works for others and determine if this might work for you as well. Linda Shanahan in this Podcast,
				available at <a href="https://organicgardenerpodcast.com/46-linda-shanahan-registered-nurse-herbalist-barefoot-botanicals-and-barefoot-gardens-pa/">The Organic Gardener Podcast</a>. Linda shares here how she learned to love gardening, and some wonderful tidbits about herbs she's grown and worked with. Please visit <a href="https://organicgardenerpodcast.com">The Organic Gardener Podcast</a> for more amazing resources just like this one. This podcast is an on-going and constantly updated podcast with a large database of amazing interviews and information. Browse to find something that interests you, or subscribe to their podcast with your favorite listening tools. Transcripts for all podcasts are also available!
			</div>
			<div class="audio">
				<br><br>
				<audio controls="controls" preload="none"><source src="media/46LindaShanahanE52015941PM.mp3" type="audio/mpeg">
					<br><a href="https://organicgardenerpodcast.com/46-linda-shanahan-registered-nurse-herbalist-barefoot-botanicals-and-barefoot-gardens-pa/">Visit the original podcast page to download this podcast.</a>
				</audio>
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