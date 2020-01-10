<?php

function writeHead(){
    
    $head = 
    '<link href="templates\responsive.css" rel="stylesheet" type="text/css">
    <link href="templates\mahayana.css" rel="stylesheet" type="text/css">
    
	<link href="https://fonts.googleapis.com/css?family=Kaushan+Script" rel="stylesheet"> 
	<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet"> 
	<link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet"> 
	
	 <meta charset="utf-8">    
     <meta name="viewport" content="width=device-width, initial-scale=1.0">


    ';
    
    echo $head;
    
}

function writeHeader(){
    
    $openHeaderMain = '<div id="header">';
    
    $mediaLinks = 
        '<div id="medialinks">
            <a href="#"><img src="images/facebook.png" alt="Visit out Facebook page"></a>
            <a href="#"><img src="images/instagram.png" alt="Visit our Instagram page"></a>
            <a href="#"><img src="images/pinterest.png" alt="Visit our Pinterest Board"></a>
        </div>
    
    ';
    
    $company = 
    '<div id="tagline-main">We help build healthy lifestyles.</div>
	<div id="company-main">Mahayana Gardens</div>
    
    ';
    
    $nav = 
    '<nav>
		<ul>
			<li><a href="index.php">Home</a></li>
			<li><a href="about.php">About Us</a></li>
			<li><a href="blog.php">Blog</a></li>
			<li><a href="store.php">Shop</a></li>
			<li><a href="resources.php">Additional Resources</a></li>
			<li><a href="contact.php">Contact Us</a></li>
            <li><a href="';
    if(isset($_SESSION['logged_in']) && $_SESSION['logged_in'] == true){
        $nav .= 'logout.php?' . session_id(). '">Logout';
    }else{
        $nav .=    'login.php?' . session_id() . '">Login';
    }
    $nav .= '</a></li>
		</ul>
	</nav>
    
    ';
    
    $closeHeaderMain = '</div>';
    
    echo $openHeaderMain;
    echo $nav;
    echo $mediaLinks;
    echo $company;
    echo $closeHeaderMain;
    
    
}

//writeHeader();

?>