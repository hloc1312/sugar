<?php
// created: 2023-02-08 08:26:50
$dictionary["BT_nhacungcap_bt"]["fields"]["bt_sanpham_bt_bt_nhacungcap_bt"] = array (
  'name' => 'bt_sanpham_bt_bt_nhacungcap_bt',
  'type' => 'link',
  'relationship' => 'bt_sanpham_bt_bt_nhacungcap_bt',
  'source' => 'non-db',
  'module' => 'BT_sanpham_bt',
  'bean_name' => 'BT_sanpham_bt',
  'vname' => 'LBL_BT_SANPHAM_BT_BT_NHACUNGCAP_BT_FROM_BT_SANPHAM_BT_TITLE',
  'id_name' => 'bt_sanpham_bt_bt_nhacungcap_btbt_sanpham_bt_ida',
);
$dictionary["BT_nhacungcap_bt"]["fields"]["bt_sanpham_bt_bt_nhacungcap_bt_name"] = array (
  'name' => 'bt_sanpham_bt_bt_nhacungcap_bt_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_BT_SANPHAM_BT_BT_NHACUNGCAP_BT_FROM_BT_SANPHAM_BT_TITLE',
  'save' => true,
  'id_name' => 'bt_sanpham_bt_bt_nhacungcap_btbt_sanpham_bt_ida',
  'link' => 'bt_sanpham_bt_bt_nhacungcap_bt',
  'table' => 'bt_sanpham_bt',
  'module' => 'BT_sanpham_bt',
  'rname' => 'name',
);
$dictionary["BT_nhacungcap_bt"]["fields"]["bt_sanpham_bt_bt_nhacungcap_btbt_sanpham_bt_ida"] = array (
  'name' => 'bt_sanpham_bt_bt_nhacungcap_btbt_sanpham_bt_ida',
  'type' => 'link',
  'relationship' => 'bt_sanpham_bt_bt_nhacungcap_bt',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'left',
  'vname' => 'LBL_BT_SANPHAM_BT_BT_NHACUNGCAP_BT_FROM_BT_SANPHAM_BT_TITLE',
);
