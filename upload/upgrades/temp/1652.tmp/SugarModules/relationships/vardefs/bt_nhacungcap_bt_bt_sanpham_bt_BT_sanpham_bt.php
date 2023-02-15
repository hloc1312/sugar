<?php
// created: 2023-02-08 05:47:13
$dictionary["BT_sanpham_bt"]["fields"]["bt_nhacungcap_bt_bt_sanpham_bt"] = array (
  'name' => 'bt_nhacungcap_bt_bt_sanpham_bt',
  'type' => 'link',
  'relationship' => 'bt_nhacungcap_bt_bt_sanpham_bt',
  'source' => 'non-db',
  'module' => 'BT_nhacungcap_bt',
  'bean_name' => 'BT_nhacungcap_bt',
  'vname' => 'LBL_BT_NHACUNGCAP_BT_BT_SANPHAM_BT_FROM_BT_NHACUNGCAP_BT_TITLE',
  'id_name' => 'bt_nhacungcap_bt_bt_sanpham_btbt_nhacungcap_bt_ida',
);
$dictionary["BT_sanpham_bt"]["fields"]["bt_nhacungcap_bt_bt_sanpham_bt_name"] = array (
  'name' => 'bt_nhacungcap_bt_bt_sanpham_bt_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_BT_NHACUNGCAP_BT_BT_SANPHAM_BT_FROM_BT_NHACUNGCAP_BT_TITLE',
  'save' => true,
  'id_name' => 'bt_nhacungcap_bt_bt_sanpham_btbt_nhacungcap_bt_ida',
  'link' => 'bt_nhacungcap_bt_bt_sanpham_bt',
  'table' => 'bt_nhacungcap_bt',
  'module' => 'BT_nhacungcap_bt',
  'rname' => 'name',
);
$dictionary["BT_sanpham_bt"]["fields"]["bt_nhacungcap_bt_bt_sanpham_btbt_nhacungcap_bt_ida"] = array (
  'name' => 'bt_nhacungcap_bt_bt_sanpham_btbt_nhacungcap_bt_ida',
  'type' => 'link',
  'relationship' => 'bt_nhacungcap_bt_bt_sanpham_bt',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_BT_NHACUNGCAP_BT_BT_SANPHAM_BT_FROM_BT_SANPHAM_BT_TITLE',
);
