<?php
$module_name = 'T_sanpham';
$listViewDefs [$module_name] = 
array (
  'NAME' => 
  array (
    'width' => '32%',
    'label' => 'LBL_NAME',
    'default' => true,
    'link' => true,
  ),
  'T_NHACUNGCAP_T_SANPHAM_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_T_NHACUNGCAP_T_SANPHAM_FROM_T_NHACUNGCAP_TITLE',
    'id' => 'T_NHACUNGCAP_T_SANPHAMT_NHACUNGCAP_IDA',
    'width' => '10%',
    'default' => true,
  ),
  'ASSIGNED_USER_NAME' => 
  array (
    'width' => '9%',
    'label' => 'LBL_ASSIGNED_TO_NAME',
    'module' => 'Employees',
    'id' => 'ASSIGNED_USER_ID',
    'default' => true,
  ),
);
?>
