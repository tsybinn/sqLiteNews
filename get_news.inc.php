<?php


 $arr = $news->getNews();





foreach($arr as $elem) {
    $date = date('d.m.Y', $elem['datetime']);
    print "       <h1>$elem[title]</h1>
                <h3>$elem[category]</h3>
                <h3>$date </h3>
                <p>$elem[description]</p>
                <string>$elem[source]</string> 
    <a href=\"?del=$elem[id]\">del</a>";


}




?>

