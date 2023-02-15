<?php
$module_name = 'C_Sanpham';
$viewdefs[$module_name] =
  array(
    'EditView' =>
    array(
      'templateMeta' =>
      array(
        'maxColumns' => '2',
        'widths' =>
        array(
          0 =>
          array(
            'label' => '10',
            'field' => '30',
          ),
          1 =>
          array(
            'label' => '10',
            'field' => '30',
          ),
        ),
        'useTabs' => false,
        
        'tabDefs' =>
        array(
          'DEFAULT' =>
          array(
            'newTab' => false,
            'panelDefault' => 'expanded',
          ),
          'LBL_EDITVIEW_PANEL1' =>
          array(
            'newTab' => false,
            'panelDefault' => 'expanded',
          ),
        ),
      ),
      'panels' =>
      array(
        'default' =>
        array(
          0 =>
          array(
            0 => 'name',
            1 =>
            array(
              'name' => 'price',
              'label' => 'LBL_PRICE',
              'customCode' => '{include file="custom/modules/C_Sanpham/tpls/test.tpl"}'
            ),
          ),
          1 =>
          array(
            0 => 'description',
            1 =>
            array(
              'name' => 'unit',
              'studio' => 'visible',
              'label' => 'LBL_UNIT',
            ),
          ),
        ),
        'lbl_editview_panel1' =>
        array(
          0 =>
          array(
            0 =>
            array(
              'name' => 'date_entered',
              'comment' => 'Date record created',
              'label' => 'LBL_DATE_ENTERED',
            ),
            1 =>
            array(
              'name' => 'modified_by_name',
              'label' => 'LBL_MODIFIED_NAME',
            ),
          ),
        ),
      ),
    ),
  );
