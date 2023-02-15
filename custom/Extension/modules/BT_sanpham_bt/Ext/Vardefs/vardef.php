<?php
$dictionary["BT_sanpham_bt"]["fields"]["ncc_name"] = array(
    'required'   => true,
    'source'     => 'non-db',
    'name'       => 'ncc_name',
    'vname'      => 'LBL_NCC_NAME',
    'type'       => 'relate',
    'rname'      => 'name',
    'id_name'    => 'ncc_id',
    'join_name'  => 'BT_nhacungcap_bt',
    'link'       => 'ncc_link',
    'table'      => 'bt_nhacungcap_bt',
    'module'     => 'BT_nhacungcap_bt',
    'dbType' => 'varchar',
    'len' => '255',
    'unified_search' => true,
    'isnull' => 'true',

);


$dictionary["BT_sanpham_bt"]["fields"]["ncc_id"] = array(
    'name'              => 'ncc_id',
    'rname'             => 'id',
    'vname'             => 'LBL_NCC_ID',
    // 'type'              => 'id',
    'type'              => 'relate',
    'table'             => 'bt_nhacungcap_bt',
    'isnull'            => 'true',
    'module'            => 'BT_nhacungcap_bt',
    'dbType'            => 'id',
    'massupdate' => false,
    'duplicate_merge'=> 'disabled',
    'hideacl'=>true,
    'reportable'=>false,

);


$dictionary["BT_sanpham_bt"]["fields"]["ncc_link"] = array(
    'name'          => 'ncc_link',
    'type'          => 'link',
    'relationship'  => 'ncc_sps',
    'module'        => 'BT_nhacungcap_bt',
    'bean_name'     => 'BT_nhacungcap_bt',
    'source'        => 'non-db',
    'vname'         => 'LBL_NCC_LINK',
);



$dictionary["BT_nhacungcap_bt"]["relationships"]["ncc_sps"] = array (
    'lhs_module' => 'BT_nhacungcap_bt',
    'lhs_table' => 'bt_nhacungcap_bt',
    'lhs_key' => 'id',
    'rhs_module' => 'BT_sanpham_bt',
    'rhs_table' => 'bt_sanpham_bt',
    'rhs_key' => 'ncc_id',
    'relationship_type' => 'one-to-many'
);