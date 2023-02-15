<?php
$dictionary["BT_donhang_bt"]["fields"]["khachhang_name"] = array(
    'required'   => true,
    'source'     => 'non-db',
    'name'       => 'khachhang_name',
    'vname'      => 'LBL_KHACHHANG_NAME',
    'type'       => 'relate',
    'rname'      => 'name',
    'id_name'    => 'khachhang_id',
    'join_name'  => 'BT_khachhang_bt',
    'link'       => 'khachhang_link',
    'table'      => 'bt_khachhang_bt',
    'module'     => 'BT_khachhang_bt',
);


$dictionary["BT_donhang_bt"]["fields"]["khachhang_id"] = array(
    'name'              => 'khachhang_id',
    'rname'             => 'id',
    'vname'             => 'LBL_KHACHHANG_NAME',
    // 'type'              => 'id',
    'type'              => 'relate',
    'table'             => 'bt_khachhang_bt',
    'isnull'            => 'true',
    'module'            => 'BT_khachhang_bt',
    'dbType'            => 'id',
);


$dictionary["BT_donhang_bt"]["fields"]["khachhang_link"] = array(
    'name'          => 'khachhang_link',
    'type'          => 'link',
    'relationship'  => 'khachhang_donhangs',
    'module'        => 'BT_khachhang_bt',
    'bean_name'     => 'BT_khachhang_bt',
    'source'        => 'non-db',
    'vname'         => 'LBL_KHACHHANG_NAME',
);


$dictionary["BT_khachhang_bt"]["relationships"]["khachhang_donhangs"] = array (
    'lhs_module' => 'BT_khachhang_bt',
    'lhs_table' => 'bt_khachhang_bt',
    'lhs_key' => 'id',
    'rhs_module' => 'BT_donhang_bt',
    'rhs_table' => 'bt_khachhang_bt',
    'rhs_key' => 'khachhang_id',
    'relationship_type' => 'one-to-many'
);