<?php
    $db_name = 'mysql:host=localhost;dbname=shop_db';
    $db_user = 'root';
    $db_password='';

    $conn = new PDO($db_name,$db_user,$db_password);

    function unique_id(){
        $chars = '1411ft12g3g2g2g2gg2g22g2'; 
        $charLength = strlen($chars);
        $randomString='';
        for($i=0;$i<20;$i++){
            $randomString.=$chars[mt_rand(0,$charLength - 1)];
        }
        return $randomString;
    }
?>
