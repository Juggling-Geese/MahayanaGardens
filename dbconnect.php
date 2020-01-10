<?php

//session_start();

$errors = 0; 

function dbConnect(){
    $DBConnect = @mysql_connect("localhost", "root", "CWB208"); 

    if ($DBConnect === FALSE) { 
        echo "<p>Unable to connect to the database server. " . "Error code " . mysql_errno() . ": " . mysql_error() . "</p>\n"; 
        ++$errors; 
    } else { 
        $DBName = "mahayanagardens"; 
        $result = @mysql_select_db($DBName, $DBConnect); 
        if ($result === FALSE) { 
            echo "<p>Unable to select the database. " . "Error code " . mysql_errno($DBConnect) . ": " . mysql_error($DBConnect) . "</p>\n"; 
            ++$errors; 
        } else{
            return $DBConnect;
        }
    }
}

function loadItems(){
    $DBConnect = dbConnect();
    if($DBConnect != null){
        $TableName = "inventory"; 
        
        $SQLstring = "SELECT PRODUCT_SKU, PRODUCT_DESC, COST FROM $TableName "; 
        $QueryResult = @mysql_query($SQLstring, $DBConnect);
        $products = array();
            
        while($Row = mysql_fetch_array($QueryResult, MYSQL_ASSOC)){
            //var_dump($Row);
            $products += [$Row['PRODUCT_SKU'] => array('PRODUCT_DESC' => $Row['PRODUCT_DESC'], 'COST' => $Row['COST']) ];
        }
        $_SESSION['products'] = $products;
    }
    $DBConnect.mysql_close();
}

loadItems();

?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
</body>
</html>