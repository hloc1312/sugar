<?php
$module_name = 'BT_chitietdonhang_bt';
$viewdefs [$module_name] = 
array (
  'DetailView' => 
  array (
    'templateMeta' => 
    array (
      'form' => 
      array (
        'buttons' => 
        array (
          0 => 'EDIT',
          1 => 'DUPLICATE',
          2 => 'DELETE',
          3 => 'FIND_DUPLICATES',
        ),
      ),
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
            'name' => 'tensp_c',
            'studio' => 'visible',
            'label' => 'LBL_TENSP',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'soluong',
            'label' => 'LBL_SOLUONG',
          ),
          1 => 
          array (
            'name' => 'price_c',
            'label' => 'LBL_PRICE',
          ),
        ),
        2 => 
        array (
          0 => 'date_entered',
          1 => 'date_modified',
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'donhang_name',
            'label' => 'LBL_DONHANG_NAME',
          ),
          1 => '',
        ),
        4 => 
        array (
          0 => 'description',
          1 => 
          array (
            'name' => 'discount_c',
            'studio' => 'visible',
            'label' => 'LBL_DISCOUNT',
          ),
        ),
      ),
    ),
  ),
);
?>