<?php
$module_name = 'BT_sanpham_bt';
$viewdefs [$module_name] = 
array (
  'EditView' => 
  array (
    'templateMeta' => 
    array (
      'maxColumns' => '2',
      'widths' => 
      array (
        0 => 
        array (
          'label' => '10',
          'field' => '30',
        ),
        1 => 
        array (
          'label' => '10',
          'field' => '30',
        ),
      ),
      'useTabs' => false,
      'tabDefs' => 
      array (
        'DEFAULT' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
      ),
    ),
    'panels' => 
    array (
      'default' => 
      array (
        0 => 
        array (
          0 => 'name',
          1 => 
          array (
            'name' => 'price',
            'label' => 'LBL_PRICE',
          ),
        ),
        1 => 
        array (
          0 => 'description',
          1 => 
          array (
            'name' => 'bt_sanpham_bt_bt_nhacungcap_bt_name',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'bt_nhacungcap_bt_bt_sanpham_bt_name',
          ),
          1 => 
          array (
            'name' => 'bt_chitietdonhang_bt_bt_sanpham_bt_name',
          ),
        ),
      ),
    ),
  ),
);
?>