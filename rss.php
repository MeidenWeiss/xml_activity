<?php
    header("Content-Type: application/rss+xml; charset=ISO-8859-1");
    $rssfeed = '<?xml version="1.0" encoding="ISO-8859-1"?>';
    $rssfeed .= '<rss version="2.0">';
    $rssfeed .= '<channel>';
    
    $sql = "SELECT * FROM tbl_jets ORDER BY jet_ID ASC;";
    $connect = mysqli_connect("dbrojasdev.cjw42bnplsor.us-east-1.rds.amazonaws.com", "admin", "root1234") or die(mysqli_error($connect));
	$db = mysqli_select_db($connect, "db_1820872");
    $query = mysqli_query($connect,$sql) or die(mysqli_error($connect));
    while($row=mysqli_fetch_assoc($query)) {
        extract($row);
        
        $rssfeed .= '<item>';
        $rssfeed .= '<jet>';
        $rssfeed .= '<name>' . $jet_Name . '</name>';
        $rssfeed .= '<type>' . $jet_type . '</type>';
        $rssfeed .= '<gen>' . $Generation . '</gen>';
        $rssfeed .= '<manufacturer>' . $Manufacturer . '</manufacturer>';
        $rssfeed .= '<country>' . $Country . '</country>';
        $rssfeed .= '</jet>';
        $rssfeed .= '</item>';
    }
 
    $rssfeed .= '</channel>';
    $rssfeed .= '</rss>';

    echo $rssfeed;
?>
