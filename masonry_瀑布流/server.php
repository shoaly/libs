<?php
$IMG_PATH="img";
$pics=searchImg($IMG_PATH);


$page=isset($_GET['page'])?$_GET['page']:0;

$limit=isset($_GET['limit'])?$_GET['limit']:3; //每次默认加载3张

$data="<div id='content'>";



for($i=$page*$limit;$i<$page*$limit+$limit && $i<count($pics) ;$i++){
		//array_push($data,$pics[$i]);
		$img=$pics[$i];
		$div="<div class='item'><img width='310' src='$IMG_PATH/$img' /></div>";
		$data.=$div;
}
$data.="</div>";


print_r($data);

function searchImg($dir) {
    $handle = opendir($dir . "/.");
    $strfile = array();
    while (false !== ($file = readdir($handle))) {
        if ($file != "." && $file != "..") {
            array_push($strfile, $file);   //输出文件名
        }
    }
    closedir($handle);
    return $strfile;
}

?>