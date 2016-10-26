<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:75:"E:\xampp\htdocs\newxy\public/../application/index\view\article\content.html";i:1466653116;s:76:"E:\xampp\htdocs\newxy\public/../application/index\view\public\footer_gr.html";i:1466233699;}*/ ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title><?php echo $article_info['article_name']; ?></title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
<link rel="stylesheet" type="text/css" href="<?php echo WAP_CSS_URL; ?>user.css">
<link rel="stylesheet" type="text/css" href="<?php echo WAP_CSS_URL; ?>load.css">
<style type="text/css"> 
section .content img{
    width:100%;
}
</style>
</head>
<body onload="loadDiv.style.display='none';">
 
    <div class="main" id="loadDiv">
        <div class="loadEffect">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
        </div>
    </div>





<ul class="bd_type">
    <li style='width:100%' class="currnet"><?php echo $article_info['article_name']; ?></li>
   

 </ul>



<section>
   <div class="content">
       <?php echo htmlspecialchars_decode($article_info['article_content']); ?>
   </div>
</section>

<footer>
<div style="height:70px;"></div>
    <ul class="ul_footer_nav">
        
        <li><a href="/wap/"><img src="<?php echo WAP_IMAGE_URL; ?>1-01.png"></a></li>
        <li><a href="/wap/user/get_qrcode"><img src="<?php echo WAP_IMAGE_URL; ?>1-02.png"></a></li>
        <li class="current"><a href="/wap/user/"><img src="<?php echo WAP_IMAGE_URL; ?>1-06.png"></a></li>
    </ul>
</footer>
</body>
