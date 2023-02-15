<?php
// created: 2023-02-09 04:56:28
$dictionary["t_nhacungcap_t_sanpham"] = array (
  'true_relationship_type' => 'one-to-many',
  'relationships' => 
  array (
    't_nhacungcap_t_sanpham' => 
    array (
      'lhs_module' => 'T_nhacungcap',
      'lhs_table' => 't_nhacungcap',
      'lhs_key' => 'id',
      'rhs_module' => 'T_sanpham',
      'rhs_table' => 't_sanpham',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 't_nhacungcap_t_sanpham_c',
      'join_key_lhs' => 't_nhacungcap_t_sanphamt_nhacungcap_ida',
      'join_key_rhs' => 't_nhacungcap_t_sanphamt_sanpham_idb',
    ),
  ),
  'table' => 't_nhacungcap_t_sanpham_c',
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
      'name' => 't_nhacungcap_t_sanphamt_nhacungcap_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 't_nhacungcap_t_sanphamt_sanpham_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 't_nhacungcap_t_sanphamspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 't_nhacungcap_t_sanpham_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 't_nhacungcap_t_sanphamt_nhacungcap_ida',
      ),
    ),
    2 => 
    array (
      'name' => 't_nhacungcap_t_sanpham_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 't_nhacungcap_t_sanphamt_sanpham_idb',
      ),
    ),
  ),
);