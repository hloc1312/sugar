<?php
$module_name = 'BT_chitietdonhang_bt';
$listViewDefs [$module_name] = 
array (
  'NAME' => 
  array (
    'width' => '32%',
    'label' => 'LBL_NAME',
    'default' => true,
    'link' => true,
  ),
  'TENSP_C' => 
  array (
    'type' => 'relate',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_TENSP',
    'id' => 'BT_SANPHAM_BT_ID_C',
    'link' => true,
    'width' => '10%',
  ),
  'TEN_DONHANG_C' => 
  array (
    'type' => 'relate',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_TEN_DONHANG',
    'id' => 'BT_DONHANG_BT_ID_C',
    'link' => true,
    'width' => '10%',
  ),
  'PRICE_C' => 
  array (
    'type' => 'decimal',
    'default' => true,
    'label' => 'LBL_PRICE',
    'width' => '10%',
  ),
  'SOLUONG' => 
  array (
    'type' => 'int',
    'label' => 'LBL_SOLUONG',
    'width' => '10%',
    'default' => true,
  ),
  'DISCOUNT_C' => 
  array (
    'type' => 'enum',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_DISCOUNT',
    'width' => '10%',
  ),
  'DESCRIPTION' => 
  array (
    'type' => 'text',
    'label' => 'LBL_DESCRIPTION',
    'sortable' => false,
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
