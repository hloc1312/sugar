<?php
$dictionary["BT_chitietdonhang_bt"]["fields"]["sanpham_name"] = array(
    'required'   => true,
    'source'     => 'non-db',
    'name'       => 'sanpham_name',
    'vname'      => 'LBL_SANPHAM_NAME',
    'type'       => 'relate',
    'rname'      => 'name',
    'id_name'    => 'sanpham_id',
    'join_name'  => 'BT_sanpham_bt',
    'link'       => 'sanpham_link',
    'table'      => 'bt_sanpham_bt',
    'module'     => 'BT_sanpham_bt',
);


$dictionary["BT_chitietdonhang_bt"]["fields"]["sanpham_id"] = array(
    'name'              => 'sanpham_id',
    'rname'             => 'id',
    'vname'             => 'LBL_SANPHAM_NAME',
    // 'type'              => 'id',
    'type'              => 'relate',
    'table'             => 'bt_sanpham_bt',
    'isnull'            => 'true',
    'module'            => 'BT_sanpham_bt',
    'dbType'            => 'id',
);


$dictionary["BT_chitietdonhang_bt"]["fields"]["sanpham_link"] = array(
    'name'          => 'sanpham_link',
    'type'          => 'link',
    'relationship'  => 'sanpham_chitietdonhangs',
    'module'        => 'BT_sanpham_bt',
    'bean_name'     => 'BT_sanpham_bt',
    'source'        => 'non-db',
    'vname'         => 'LBL_SANPHAM_NAME',
);


$dictionary["BT_sanpham_bt"]["relationships"]["sanpham_chitietdonhangs"] = array (
    'lhs_module' => 'BT_sanpham_bt',
    'lhs_table' => 'bt_sanpham_bt',
    'lhs_key' => 'id',
    'rhs_module' => 'BT_chitietdonhang_bt',
    'rhs_table' => 'bt_chitietdonhang_bt',
    'rhs_key' => 'sanpham_id',
    'relationship_type' => 'one-to-many'
);




// don hang
$dictionary["BT_chitietdonhang_bt"]["fields"]["donhang_name"] = array(
    'required'   => true,
    'source'     => 'non-db',
    'name'       => 'donhang_name',
    'vname'      => 'LBL_DONHANG_NAME',
    'type'       => 'relate',
    'rname'      => 'name',
    'id_name'    => 'donhang_id',
    'join_name'  => 'BT_donhang_bt',
    'link'       => 'donhang_link',
    'table'      => 'bt_donhang_bt',
    'module'     => 'BT_donhang_bt',
);


$dictionary["BT_chitietdonhang_bt"]["fields"]["donhang_id"] = array(
    'name'              => 'donhang_id',
    'rname'             => 'id',
    'vname'             => 'LBL_DONHANG_NAME',
    // 'type'              => 'id',
    'type'              => 'relate',
    'table'             => 'bt_donhang_bt',
    'isnull'            => 'true',
    'module'            => 'BT_donhang_bt',
    'dbType'            => 'id',
);


$dictionary["BT_chitietdonhang_bt"]["fields"]["donhang_link"] = array(
    'name'          => 'donhang_link',
    'type'          => 'link',
    'relationship'  => 'donhang_chitietdonhangs',
    'module'        => 'BT_donhang_bt',
    'bean_name'     => 'BT_donhang_bt',
    'source'        => 'non-db',
    'vname'         => 'LBL_DONHANG_NAME',
);


$dictionary["BT_donhang_bt"]["relationships"]["donhang_chitietdonhangs"] = array (
    'lhs_module' => 'BT_donhang_bt',
    'lhs_table' => 'bt_donhang_bt',
    'lhs_key' => 'id',
    'rhs_module' => 'BT_chitietdonhang_bt',
    'rhs_table' => 'bt_chitietdonhang_bt',
    'rhs_key' => 'donhang_id',
    'relationship_type' => 'one-to-many'
);