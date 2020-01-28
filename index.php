<?php
 $domOBJ = new DOMDocument();
 $domOBJ->load("http://school-temp.herokuapp.com/rss.php");//XML page URL
 
 $content = $domOBJ->getElementsByTagName("item");
 
 ?>
 <ul>
    <?php
 foreach( $content as $data )
 {
   $name = $data->getElementsByTagName("name")->item(0)->nodeValue;
   $gen = $data->getElementsByTagName("gen")->item(0)->nodeValue;
   $type = $data->getElementsByTagName("type")->item(0)->nodeValue;
  
   echo "<li>$name
            <ul>
                <li>$gen - Generation</li>
                <li>Aircraft type: $type </li>
            </ul>
        </li>";
 }
?>
</ul>
