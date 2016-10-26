<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:85:"D:\xampp\htdocs\xiangyuan\public/../application/index\view\goods\cate_goods_list.html";i:1471938478;}*/ ?>
<style>
*{padding:0;margin:0;}
a{text-decoration:none;color:#000;}
.g{padding:5px;display:inline-block;width:30%;height:185px;margin-bottom:5px;background:#dfd7d7;border-radius:5px;}
.g img{width:100%;height:80%;}


</style>

					<?php if(is_array($cate_goods_list) || $cate_goods_list instanceof \think\Collection): if( count($cate_goods_list)==0 ) : echo "" ;else: foreach($cate_goods_list as $key=>$goods): ?>
                     <a href="/index/goods/goods_info/goods_id/<?php echo $goods['goods_id']; ?>" title="<?php echo $goods['goods_name']; ?>" target="_top">
                	<div class="g"><img src="<?php echo $goods['goods_src']; ?>"><p><?php echo $goods['goods_name']; ?></p><p><?php if($goods['promote_price'] != "0"): ?> 
          <?php echo $goods['promote_price']; ?>/元
          <?php else: ?>
          <?php echo $goods['goods_price']; ?>/元
          <?php endif; ?></p></div>
                   	 </a>
                    <?php endforeach; endif; else: echo "" ;endif; ?>