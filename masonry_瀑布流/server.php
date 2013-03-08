<?php
$IMG_PATH="img";
$FIX_OFFSET=6;//http://localhost:81/masonry/server.php?page=2 由于前台没找到api, 传上来的参数必须是page=2,然后我默认调用了12张图, 所以这里需要抛弃前12张已经调用的
$pics=searchImg($IMG_PATH);


$page=isset($_GET['page'])?$_GET['page']:0;

$limit=isset($_GET['limit'])?$_GET['limit']:9; //每次默认加载3张

$data="<div id='content'>";



for($i=$page*$limit+$FIX_OFFSET;$i<$page*$limit+$limit+$FIX_OFFSET && $i+$FIX_OFFSET<count($pics) ;$i++){
		//array_push($data,$pics[$i]);
		$img=$pics[$i];
		$div="<div class='item'><img width='310' src='$IMG_PATH/$img' /></div>";
		$data.=$div;
}
$data.="</div>";

if($data=="<div id='content'></div>"){
//	header('HTTP/1.1 404 Not Found');
//	header("status: 404 Not Found");
//	die;
	print_r($data);
}else{

	print_r($data);
}
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