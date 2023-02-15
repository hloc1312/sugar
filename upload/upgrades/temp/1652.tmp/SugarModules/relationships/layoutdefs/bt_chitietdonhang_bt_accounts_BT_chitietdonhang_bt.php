<?php
 // created: 2023-02-08 05:47:13
$layout_defs["BT_chitietdonhang_bt"]["subpanel_setup"]['bt_chitietdonhang_bt_accounts'] = array (
  'order' => 100,
  'module' => 'Accounts',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_BT_CHITIETDONHANG_BT_ACCOUNTS_FROM_ACCOUNTS_TITLE',
  'get_subpanel_data' => 'bt_chitietdonhang_bt_accounts',
  'top_buttons' => 
  array (
    0 => 
    array (
      'widget_class' => 'SubPanelTopButtonQuickCreate',
    ),
    1 => 
    array (
      'widget_class' => 'SubPanelTopSelectButton',
      'mode' => 'MultiSelect',
    ),
  ),
);
