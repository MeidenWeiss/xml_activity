<?php
 $domOBJ = new DOMDocument();
 $domOBJ->load("http://school-temp.herokuapp.com/rss.php");//XML page URL
 
 $content = $domOBJ->getElementsByTagName("jet");
 
 ?>
  You are now viewing in XML mode || <a href="http://school-temp.herokuapp.com/"> XML Mode </a> / <a href="http://school-temp.herokuapp.com/json_activity/index.php"> JSON Mode </a>
    <?php
 foreach( $content as $data )
 {
   $name = $data->getElementsByTagName("name")->item(0)->nodeValue;
   $gen = $data->getElementsByTagName("gen")->item(0)->nodeValue;
   $type = $data->getElementsByTagName("type")->item(0)->nodeValue;
   $type = $data->getElementsByTagName("type")->item(0)->nodeValue;
   $created = $data->getElementsByTagName("manufacturer")->item(0)->nodeValue;
   $country = $data->getElementsByTagName("country")->item(0)->nodeValue;
   echo "<h3> $name - <b> $created </b> </h3>
            <ul style="font-family:Trebuchet MS">
                <li>Aircraft type: $type </li>
                <li>$gen - Generation</li>
                <li>Country: $country </li>
            </ul> <br> ";
 }
?>
