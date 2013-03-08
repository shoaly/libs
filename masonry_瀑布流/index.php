<?php
$IMG_PATH="img";
$pics=searchImg($IMG_PATH);



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

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
    <head>
        <title></title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <style type="text/css">
           
        </style>
    </head>
    <body>
   
<style type="text/css">
#container .item {
	width:310px;
	float:left;
	margin-top:15px;
}
#wrapper2 {
	text-align:center;
}
#wrapper {
	margin:0 auto;
	width:980px
}

#infscr-loading { 
  text-align: center;
  z-index: 100;
  position: fixed;
  left: 45%;
  bottom: 40px;
  width: 200px;
  padding: 10px;
  background: #000; 
  opacity: 0.8;
  color: #FFF;
  -webkit-border-radius: 10px;
     -moz-border-radius: 10px;
          border-radius: 10px;
}
</style>
<div id="wrapper2" >
  <div id="wrapper">
    <div id="container">
				<?php for($i=0;$i<12;$i++){?>
					<div class='item'><img width='310' src='<?php echo "$IMG_PATH/$pics[$i]"; ?>' /></div>
				<?php }?>
    </div>
  </div>
</div>

<nav id="page-nav">
  <a href="server.php?page=2"></a>  <!-- 这里没能找到替换page=2的api, 所以必须是page=2,3,4....这种范式,由于默认调用了4行,所以后台需要排除这4行以免重复 -->
</nav>
<script src="js/jquery.min.js"></script> 
<script src="js/jquery.masonry.min.js"></script> 
<script src="js/jquery.infinitescroll.min.js"></script>
<script type="text/javascript">
$(function(){
    
   var $container = $('#container');
	$container.imagesLoaded(function(){
		$container.masonry({
			itemSelector : '.item',
			columnWidth:310,
			gutterWidth:15,
			isFitWidth: true,
			isAnimated: true
		});
	});
    
    $container.infinitescroll({
		  navSelector  : '#page-nav',    // selector for the paged navigation 
		  nextSelector : '#page-nav a',  // selector for the NEXT link (to page 2)
		  itemSelector : '.item',     // selector for all items you'll retrieve
		  loading: {
			  finishedMsg: 'No more pages to load.',
			  img: 'css/loading.gif',
			   finished: function() {
//				   console.log($container.infinitescroll.options);
                       $("#infscr-loading").hide(500);
                    
                }, 
      	  },
		  debug:true,
			 
	      
	       },
	   // trigger Masonry as a callback
                function (newElements) {
					
                    // hide new items while they are loading
                    var $newElems = $(newElements).css({ opacity:0 });
                    // ensure that images load before adding to masonry layout
                    $newElems.imagesLoaded(function () {
                        // show elems now they're ready
                        $newElems.animate({ opacity:1 });
                        $container.masonry('appended', $newElems, true);
                    });
                    
                }
	  
	  
	  
	  );
    
  });
		
		

</script>

   
    </body>
</html>