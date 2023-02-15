<?php
$popupMeta = array (
    'moduleMain' => 'C_Sanpham',
    'varName' => 'C_Sanpham',
    'orderBy' => 'c_sanpham.name',
    'whereClauses' => array (
  'name' => 'c_sanpham.name',
),
    'searchInputs' => array (
  0 => 'c_sanpham_number',
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
  'PRICE' => 
  array (
    'type' => 'decimal',
    'label' => 'LBL_PRICE',
    'width' => '10%',
    'default' => true,
  ),
  'UNIT' => 
  array (
    'type' => 'enum',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_UNIT',
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
),
);
