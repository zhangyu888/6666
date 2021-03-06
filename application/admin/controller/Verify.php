<?php

namespace app\admin\controller;

Class Verify{
public function index(){
    if(isset($_GET['n'])){
        Verify::verifyImage(4,0,0,"verify2");
        }else{
        Verify::verifyImage(); 
    }
}

static function verifyImage($length=4,$pixel=0,$line=0,$sess_name = "verify"){
   
    //创建画布
    $width = 80;
    $height = 28;
    $image = imagecreatetruecolor ( $width, $height );
    $white = imagecolorallocate ( $image, 255, 255, 255 );
    $black = imagecolorallocate ( $image, 0, 0, 0 );
    //用填充矩形填充画布
    imagefilledrectangle ( $image, 1, 1, $width - 2, $height - 2, $white );
    $chars = join ( "", array_merge ( range ( "a", "z" ), range ( "A", "Z" ), range ( 0, 9 ) ) );
    $chars = str_shuffle ( $chars );
    $chars = substr ( $chars, 0, $length );
    cookie($sess_name,$chars);
    //$fontfiles = array ("MSYH.TTF", "MSYHBD.TTF", "SIMLI.TTF", "SIMSUN.TTC", "SIMYOU.TTF", "STZHONGS.TTF" );
    $fontfiles = array ("SIMYOU.TTF" );
    //由于字体文件比较大，就只保留一个字体，如果有需要的同学可以自己添加字体，字体在你的电脑中的fonts文件夹里有，直接运行输入fonts就能看到相应字体
    for($i = 0; $i < $length; $i ++) {
        $size = mt_rand ( 14, 18 );
        $angle = mt_rand ( - 15, 15 );
        $x = 5 + $i * $size;
        $y = mt_rand ( 20, 26 );
        $fontfile = "public/fonts/" . $fontfiles [mt_rand ( 0, count ( $fontfiles ) - 1 )];
        $color = imagecolorallocate ( $image, mt_rand ( 50, 90 ), mt_rand ( 80, 200 ), mt_rand ( 90, 180 ) );
        $text = substr ( $chars, $i, 1 );
        imagettftext ( $image, $size, $angle, $x, $y, $color, $fontfile, $text );
    }
    if ($pixel) {
        for($i = 0; $i < 50; $i ++) {
            imagesetpixel ( $image, mt_rand ( 0, $width - 1 ), mt_rand ( 0, $height - 1 ), $black );
        }
    }
    if ($line) {
        for($i = 1; $i < $line; $i ++) {
            $color = imagecolorallocate ( $image, mt_rand ( 50, 90 ), mt_rand ( 80, 200 ), mt_rand ( 90, 180 ) );
            imageline ( $image, mt_rand ( 0, $width - 1 ), mt_rand ( 0, $height - 1 ), mt_rand ( 0, $width - 1 ), mt_rand ( 0, $height - 1 ), $color );
        }
    }
    header ( "content-type:image/gif" );
    imagegif ( $image );
    imagedestroy ( $image );
}
}
