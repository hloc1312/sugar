<?php

 $hook_version = 1; 
$hook_array = Array(); 

$hook_array['before_save'] = Array(); 
$hook_array['before_save'][] = Array(1, '', 'custom\modules\C_Sanpham\SanPhamLogic.php','SanPhamLogic', 'ganTenBangDesc'); 



?>