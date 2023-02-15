<?php

$hook_version = 1; 
$hook_array = Array(); 

$hook_array['before_save'] = Array(); 
$hook_array['before_save'][] = Array(1, '', 'custom/modules/BT_sanpham_bt/SanPhamLogicHook.php','SanPhamLogicHook', 'ganMaSP'); 



// $hook_array['process_record'] = Array();
// $hook_array['process_record'][]=Array(1, '', 'custom/modules/BT_sanpham_bt/GetNhaCungCapLogic.php','GetNhaCungCapLogic', 'getNhaCungCap')

?>