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
);
?>
