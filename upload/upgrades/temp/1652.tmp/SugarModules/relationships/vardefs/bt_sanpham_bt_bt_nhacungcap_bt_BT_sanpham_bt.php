<?php
// created: 2023-02-08 05:47:14
$dictionary["BT_sanpham_bt"]["fields"]["bt_sanpham_bt_bt_nhacungcap_bt"] = array (
  'name' => 'bt_sanpham_bt_bt_nhacungcap_bt',
  'type' => 'link',
  'relationship' => 'bt_sanpham_bt_bt_nhacungcap_bt',
  'source' => 'non-db',
  'module' => 'BT_nhacungcap_bt',
  'bean_name' => 'BT_nhacungcap_bt',
  'vname' => 'LBL_BT_SANPHAM_BT_BT_NHACUNGCAP_BT_FROM_BT_NHACUNGCAP_BT_TITLE',
  'id_name' => 'bt_sanpham_bt_bt_nhacungcap_btbt_nhacungcap_bt_idb',
);
$dictionary["BT_sanpham_bt"]["fields"]["bt_sanpham_bt_bt_nhacungcap_bt_name"] = array (
  'name' => 'bt_sanpham_bt_bt_nhacungcap_bt_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_BT_SANPHAM_BT_BT_NHACUNGCAP_BT_FROM_BT_NHACUNGCAP_BT_TITLE',
  'save' => true,
  'id_name' => 'bt_sanpham_bt_bt_nhacungcap_btbt_nhacungcap_bt_idb',
  'link' => 'bt_sanpham_bt_bt_nhacungcap_bt',
  'table' => 'bt_nhacungcap_bt',
  'module' => 'BT_nhacungcap_bt',
  'rname' => 'name',
);
$dictionary["BT_sanpham_bt"]["fields"]["bt_sanpham_bt_bt_nhacungcap_btbt_nhacungcap_bt_idb"] = array (
  'name' => 'bt_sanpham_bt_bt_nhacungcap_btbt_nhacungcap_bt_idb',
  'type' => 'link',
  'relationship' => 'bt_sanpham_bt_bt_nhacungcap_bt',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'left',
  'vname' => 'LBL_BT_SANPHAM_BT_BT_NHACUNGCAP_BT_FROM_BT_NHACUNGCAP_BT_TITLE',
);
