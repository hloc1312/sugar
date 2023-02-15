<?php
// created: 2023-02-08 05:47:13
$dictionary["bt_chitietdonhang_bt_accounts"] = array (
  'true_relationship_type' => 'one-to-many',
  'relationships' => 
  array (
    'bt_chitietdonhang_bt_accounts' => 
    array (
      'lhs_module' => 'BT_chitietdonhang_bt',
      'lhs_table' => 'bt_chitietdonhang_bt',
      'lhs_key' => 'id',
      'rhs_module' => 'Accounts',
      'rhs_table' => 'accounts',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'bt_chitietdonhang_bt_accounts_c',
      'join_key_lhs' => 'bt_chitietdonhang_bt_accountsbt_chitietdonhang_bt_ida',
      'join_key_rhs' => 'bt_chitietdonhang_bt_accountsaccounts_idb',
    ),
  ),
  'table' => 'bt_chitietdonhang_bt_accounts_c',
  'fields' => 
  array (
    0 => 
    array (
      'name' => 'id',
      'type' => 'varchar',
      'len' => 36,
    ),
    1 => 
    array (
      'name' => 'date_modified',
      'type' => 'datetime',
    ),
    2 => 
    array (
      'name' => 'deleted',
      'type' => 'bool',
      'len' => '1',
      'default' => '0',
      'required' => true,
    ),
    3 => 
    array (
      'name' => 'bt_chitietdonhang_bt_accountsbt_chitietdonhang_bt_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'bt_chitietdonhang_bt_accountsaccounts_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'bt_chitietdonhang_bt_accountsspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'bt_chitietdonhang_bt_accounts_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'bt_chitietdonhang_bt_accountsbt_chitietdonhang_bt_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'bt_chitietdonhang_bt_accounts_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'bt_chitietdonhang_bt_accountsaccounts_idb',
      ),
    ),
  ),
);