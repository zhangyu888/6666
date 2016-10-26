<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:80:"D:\xampp\htdocs\xiangyuan\public/../application/index\view\goods\goods_list.html";i:1471336937;}*/ ?>
<style>
*{padding:0;margin:0;}
a{text-decoration:none;color:#000;}

.page{text-align:center;position:absolute;bottom:0px;left:45%;}


.pagination li{float:left;margin:10px;font-size:18px;font-weight:bold;}

.product{width:181px;height:305px;display:inline-block;margin-bottom:5px;border:1px solid #c7c4ae;background:#fcfaec;position:relative;}
.product_img{width:179px;height:180px;border:1px solid #57574e;}
.product_img img{width:100%;height:100%;}
.product_ul ul{position:absolute;top:187px;}

.product_ul ul li{padding:5px 0px 5px 15px;list-style:none;}

</style>

				<?php if(is_array($goods_list) || $goods_list instanceof \think\Collection): if( count($goods_list)==0 ) : echo "" ;else: foreach($goods_list as $key=>$goods): ?>
                <a href="/index/goods/goods_info/goods_id/<?php echo $goods['goods_id']; ?>" target="_top">
            	<div class="product">
                	<div class="product_img">
                    	<img src="<?php echo $goods['goods_src']; ?>" alt="<?php echo $goods['goods_name']; ?>">
                    </div>
                    <div class="product_ul">
                    	<ul>
                        	<li><?php echo $goods['goods_name']; ?></li>
                            <li><?php if($goods['promote_price'] != 0): ?> 
          <?php echo $goods['promote_price']; ?>/元
          <?php else: ?>
          <?php echo $goods['goods_price']; ?>/元
          <?php endif; ?></li>
                            <li></li>
                            <li></li>
                        </ul>
                    </div>                          
                </div>
                </a>
                <?php endforeach; endif; else: echo "" ;endif; ?>
           <div class="page">     
           	
           		<?php echo $goods_list->render(); ?>
           </div>