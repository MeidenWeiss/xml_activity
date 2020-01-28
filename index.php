<?php
 $domOBJ = new DOMDocument();
 $domOBJ->load("http://school-temp.herokuapp.com/rss.php");//XML page URL
 
 $content = $domOBJ->getElementsByTagName("jet");
 
 ?>
 <ul style="font-family:Trebuchet MS">
    <?php
 foreach( $content as $data )
 {
   $name = $data->getElementsByTagName("name")->item(0)->nodeValue;
   $gen = $data->getElementsByTagName("gen")->item(0)->nodeValue;
   $type = $data->getElementsByTagName("type")->item(0)->nodeValue;
   $type = $data->getElementsByTagName("type")->item(0)->nodeValue;
   $created = $data->getElementsByTagName("manufacturer")->item(0)->nodeValue;
   $country = $data->getElementsByTagName("country")->item(0)->nodeValue;
   echo "<li> <h4> $name </h4>
            <ul>
                <li>$gen - Generation</li>
                <li>Aircraft type: $type </li>
                <li>Manufacturer: $created </li>
                <li>Country: $country </li>
            </ul> <br>
        </li>";
 }
?>
</ul>
