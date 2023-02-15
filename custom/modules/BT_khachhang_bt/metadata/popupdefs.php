<?php
$popupMeta = array (
    'moduleMain' => 'BT_khachhang_bt',
    'varName' => 'BT_khachhang_bt',
    'orderBy' => 'bt_khachhang_bt.name',
    'whereClauses' => array (
  'name' => 'bt_khachhang_bt.name',
),
    'searchInputs' => array (
  0 => 'bt_khachhang_bt_number',
  1 => 'name',
  2 => 'priority',
  3 => 'status',
),
    'listviewdefs' => array (
  'NAME' => 
  array (
    'type' => 'name',
    'link' => true,
    'label' => 'LBL_NAME',
    'width' => '10%',
    'default' => true,
  ),
  'FIRST_NAME' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_FIRST_NAME',
    'width' => '10%',
    'default' => true,
    'name' => 'first_name',
  ),
  'LAST_NAME' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_LAST_NAME',
    'width' => '10%',
    'default' => true,
    'name' => 'last_name',
  ),
  'AGE' => 
  array (
    'type' => 'int',
    'label' => 'LBL_AGE',
    'width' => '10%',
    'default' => true,
    'name' => 'age',
  ),
  'PHONE' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_PHONE',
    'width' => '10%',
    'default' => true,
    'name' => 'phone',
  ),
  'GENDER' => 
  array (
    'type' => 'enum',
    'label' => 'LBL_GENDER',
    'width' => '10%',
    'default' => true,
    'name' => 'gender',
  ),
),
);
