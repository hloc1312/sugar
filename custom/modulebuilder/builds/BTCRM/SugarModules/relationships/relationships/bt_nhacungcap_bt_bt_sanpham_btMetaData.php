<?php
// created: 2023-02-08 08:26:50
$dictionary["bt_nhacungcap_bt_bt_sanpham_bt"] = array (
  'true_relationship_type' => 'one-to-many',
  'relationships' => 
  array (
    'bt_nhacungcap_bt_bt_sanpham_bt' => 
    array (
      'lhs_module' => 'BT_nhacungcap_bt',
      'lhs_table' => 'bt_nhacungcap_bt',
      'lhs_key' => 'id',
      'rhs_module' => 'BT_sanpham_bt',
      'rhs_table' => 'bt_sanpham_bt',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'bt_nhacungcap_bt_bt_sanpham_bt_c',
      'join_key_lhs' => 'bt_nhacungcap_bt_bt_sanpham_btbt_nhacungcap_bt_ida',
      'join_key_rhs' => 'bt_nhacungcap_bt_bt_sanpham_btbt_sanpham_bt_idb',
    ),
  ),
  'table' => 'bt_nhacungcap_bt_bt_sanpham_bt_c',
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
      'name' => 'bt_nhacungcap_bt_bt_sanpham_btbt_nhacungcap_bt_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'bt_nhacungcap_bt_bt_sanpham_btbt_sanpham_bt_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'bt_nhacungcap_bt_bt_sanpham_btspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'bt_nhacungcap_bt_bt_sanpham_bt_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'bt_nhacungcap_bt_bt_sanpham_btbt_nhacungcap_bt_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'bt_nhacungcap_bt_bt_sanpham_bt_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'bt_nhacungcap_bt_bt_sanpham_btbt_sanpham_bt_idb',
      ),
    ),
  ),
);