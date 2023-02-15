<?php 
 //WARNING: The contents of this file are auto-generated


// created: 2023-02-08 08:26:49
$dictionary["Account"]["fields"]["bt_chitietdonhang_bt_accounts"] = array (
  'name' => 'bt_chitietdonhang_bt_accounts',
  'type' => 'link',
  'relationship' => 'bt_chitietdonhang_bt_accounts',
  'source' => 'non-db',
  'module' => 'BT_chitietdonhang_bt',
  'bean_name' => 'BT_chitietdonhang_bt',
  'vname' => 'LBL_BT_CHITIETDONHANG_BT_ACCOUNTS_FROM_BT_CHITIETDONHANG_BT_TITLE',
  'id_name' => 'bt_chitietdonhang_bt_accountsbt_chitietdonhang_bt_ida',
);
$dictionary["Account"]["fields"]["bt_chitietdonhang_bt_accounts_name"] = array (
  'name' => 'bt_chitietdonhang_bt_accounts_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_BT_CHITIETDONHANG_BT_ACCOUNTS_FROM_BT_CHITIETDONHANG_BT_TITLE',
  'save' => true,
  'id_name' => 'bt_chitietdonhang_bt_accountsbt_chitietdonhang_bt_ida',
  'link' => 'bt_chitietdonhang_bt_accounts',
  'table' => 'bt_chitietdonhang_bt',
  'module' => 'BT_chitietdonhang_bt',
  'rname' => 'name',
);
$dictionary["Account"]["fields"]["bt_chitietdonhang_bt_accountsbt_chitietdonhang_bt_ida"] = array (
  'name' => 'bt_chitietdonhang_bt_accountsbt_chitietdonhang_bt_ida',
  'type' => 'link',
  'relationship' => 'bt_chitietdonhang_bt_accounts',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_BT_CHITIETDONHANG_BT_ACCOUNTS_FROM_ACCOUNTS_TITLE',
);

?>