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
    <!-- InstanceBeginEditable name="Title" --><title>Contact Us | Mahayana Gardens</title><!-- InstanceEndEditable -->
</head>
<body>
    
<?php writeHeader(); ?>

<main>
    <!-- InstanceBeginEditable name="Main" -->
    
    <?php
    if(isset($_SESSION['current_page']) && !empty($_SESSION['current_page']))
        $_SESSION['last_page'] = $_SESSION['current_page'];
    $_SESSION['current_page'] = basename(__FILE__);
    
    $Body = '<div class="box">
			<img id="about" src="images/responsible-hands.jpg" alt="Multigenerational Hands Holding Dirt with Sprout">
			<div class="formwrapper">';
    if(isset($_POST['submit'])){
        // Email contact info
        $Body .= '
			<div>Thank you! We will be in touch with you soon!</div>';
    } else{
        $Body .= '
			<div>We would love to hear from you! Please fill out the form below.</div>
			<form name="form" method="POST" action="contact.php?'. session_id() . '">
			<table>
				<th colspan="2"><legend>Contact Us</legend></th>
				<colgroup>
					<col span="1" style="width: 30%;">
					
				</colgroup>
				<tr>
					<td class="labels"><label for="name">Full Name: </label></td>
					<td><input type="text" name="name" id="name"></td>
				</tr>
				<tr>
					<td class="labels"><label for="address1">Address 1: </label></td>
					<td><input type="text" name="address1" id="address1"></td>
				</tr>
				<tr>
					<td class="labels"><label for="address2">Address 2: </label></td>
					<td><input type="text" name="address2" id="address2"></td>
				</tr>
				<tr>
					<td class="labels"><label for="cityStateZip">City, State, Zip: </label></td>
					<td><input type="text" name="cityStateZip" id="cityStateZip"></td>
				</tr>
				<tr>
					<td><label for="myEmail">Email Address: </label></td>
					<td><input type="email" name="myEmail" id="myEmail"></td>
				</tr>
				<tr>
					<td class="labels"><label for="myPhone">Phone Number: </label></td>
					<td><input type="tel" name="myPhone" id="myPhone"></td>
				</tr>
				<tr>
					<td colspan="2"><label for="comments">Comments and/or Suggestions: </label></td>
				</tr>
				<tr>
					<td colspan="2"><textarea name="comments" id="comments" rows="5" cols="50"></textarea></td>
				</tr>
				<tr style="align-content: center;">
					<td><button type="reset" id="reset">Reset</button></td>
					<td><input type="submit" id="submit" name="submit" value="Submit" /></td>
				</tr>
			</table>
			</form>
			</div>';
    }
    $Body .='</div>';
        
        echo $Body;
    
    ?>
   
		
    <!-- InstanceEndEditable -->
</main>

<footer>
    <?php writeFooter(); ?>
</footer>

</body>
<!-- InstanceEnd --></html>