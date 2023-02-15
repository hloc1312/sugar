<?php
$module_name = 'BT_sanpham_bt';
$listViewDefs [$module_name] = 
array (
  'MASP' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_MASP',
    'width' => '10%',
    'default' => true,
  ),
  'NAME' => 
  array (
    'width' => '32%',
    'label' => 'LBL_NAME',
    'default' => true,
    'link' => true,
  ),
  'PRICE' => 
  array (
    'type' => 'decimal',
    'label' => 'LBL_PRICE',
    'width' => '10%',
    'default' => true,
  ),
  'DESCRIPTION' => 
  array (
    'type' => 'text',
    'label' => 'LBL_DESCRIPTION',
    'sortable' => false,
    'width' => '10%',
    'default' => true,
  ),
  'BT_NHACUNGCAP_BT_BT_SANPHAM_BT_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_BT_NHACUNGCAP_BT_BT_SANPHAM_BT_FROM_BT_NHACUNGCAP_BT_TITLE',
    'id' => 'BT_NHACUNGCAP_BT_BT_SANPHAM_BTBT_NHACUNGCAP_BT_IDA',
    'width' => '10%',
    'default' => true,
  ),
  'BT_SANPHAM_BT_BT_NHACUNGCAP_BT_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_BT_SANPHAM_BT_BT_NHACUNGCAP_BT_FROM_BT_NHACUNGCAP_BT_TITLE',
    'id' => 'BT_SANPHAM_BT_BT_NHACUNGCAP_BTBT_NHACUNGCAP_BT_IDB',
    'width' => '10%',
    'default' => true,
  ),
  'ASSIGNED_USER_NAME' => 
  array (
    'width' => '9%',
    'label' => 'LBL_ASSIGNED_TO_NAME',
    'module' => 'Employees',
    'id' => 'ASSIGNED_USER_ID',
    'default' => false,
  ),
);
?>
