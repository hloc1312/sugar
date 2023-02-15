<?php
// created: 2023-02-08 08:45:10
$subpanel_layout['list_fields'] = array (
  'masp' => 
  array (
    'type' => 'varchar',
    'vname' => 'LBL_MASP',
    'width' => '10%',
    'default' => true,
  ),
  'name' => 
  array (
    'vname' => 'LBL_NAME',
    'widget_class' => 'SubPanelDetailViewLink',
    'width' => '45%',
    'default' => true,
  ),
  'price' => 
  array (
    'type' => 'decimal',
    'vname' => 'LBL_PRICE',
    'width' => '10%',
    'default' => true,
  ),
  'date_modified' => 
  array (
    'vname' => 'LBL_DATE_MODIFIED',
    'width' => '45%',
    'default' => true,
  ),
  'bt_nhacungcap_bt_bt_sanpham_bt_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'vname' => 'LBL_BT_NHACUNGCAP_BT_BT_SANPHAM_BT_FROM_BT_NHACUNGCAP_BT_TITLE',
    'id' => 'BT_NHACUNGCAP_BT_BT_SANPHAM_BTBT_NHACUNGCAP_BT_IDA',
    'width' => '10%',
    'default' => true,
    'widget_class' => 'SubPanelDetailViewLink',
    'target_module' => 'BT_nhacungcap_bt',
    'target_record_key' => 'bt_nhacungcap_bt_bt_sanpham_btbt_nhacungcap_bt_ida',
  ),
  'bt_chitietdonhang_bt_bt_sanpham_bt_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'vname' => 'LBL_BT_CHITIETDONHANG_BT_BT_SANPHAM_BT_FROM_BT_CHITIETDONHANG_BT_TITLE',
    'id' => 'BT_CHITIETDONHANG_BT_BT_SANPHAM_BTBT_CHITIETDONHANG_BT_IDA',
    'width' => '10%',
    'default' => true,
    'widget_class' => 'SubPanelDetailViewLink',
    'target_module' => 'BT_chitietdonhang_bt',
    'target_record_key' => 'bt_chitietdonhang_bt_bt_sanpham_btbt_chitietdonhang_bt_ida',
  ),
  'edit_button' => 
  array (
    'vname' => 'LBL_EDIT_BUTTON',
    'widget_class' => 'SubPanelEditButton',
    'module' => 'BT_sanpham_bt',
    'width' => '4%',
    'default' => true,
  ),
  'remove_button' => 
  array (
    'vname' => 'LBL_REMOVE',
    'widget_class' => 'SubPanelRemoveButton',
    'module' => 'BT_sanpham_bt',
    'width' => '5%',
    'default' => true,
  ),
);