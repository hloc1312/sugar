<?php
$module_name = 'BT_nhacungcap_bt';
$listViewDefs [$module_name] = 
array (
  'MANCC' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_MANCC',
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
  'CONTACT' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_CONTACT',
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
  'BT_SANPHAM_BT_BT_NHACUNGCAP_BT_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_BT_SANPHAM_BT_BT_NHACUNGCAP_BT_FROM_BT_SANPHAM_BT_TITLE',
    'id' => 'BT_SANPHAM_BT_BT_NHACUNGCAP_BTBT_SANPHAM_BT_IDA',
    'width' => '10%',
    'default' => true,
  ),
);
?>
