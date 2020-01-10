<?php

function writeFooter(){
    
    $nav = 
    '<ul id="nav">
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
    ';
    
    $contact = 
    '<div id="contactinfo">
			<blockquote>
			<span style="font-weight: bold; font-size: 1.2em;">Mahayana Gardens</span><br>
			123 Main St.<br>
			Loveland, CO 80537<br>
			<a href="mailto:mahayanagardens@zendeavors.net">mahayanagardens@zendeavors.net</a>
			</blockquote>
	</div>
    ';
    
    $copyright = 
    '<div id="copyright">Copyright &copy;2019 by Mahayana Gardens </div>
		<div id="updated">Last Updated - 
			<script>
				document.write(document.lastModified);
			</script>
	   </div>
    ';
    
    echo $nav;
    echo $contact;
    echo $copyright;
}

?>