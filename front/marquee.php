<marquee scrolldelay="120" direction="left" style="position:absolute; width:100%; height:40px;">
<?php
$news=$News->all(['sh'=>1]);
foreach($news as $n){
    echo $n['text'],"&nbsp;","&nbsp;","&nbsp;","&nbsp;";
}
;?>
    </marquee>