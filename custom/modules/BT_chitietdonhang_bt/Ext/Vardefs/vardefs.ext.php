<?php 
 //WARNING: The contents of this file are auto-generated


// created: 2023-02-08 08:26:49
$dictionary["BT_chitietdonhang_bt"]["fields"]["bt_chitietdonhang_bt_accounts"] = array (
  'name' => 'bt_chitietdonhang_bt_accounts',
  'type' => 'link',
  'relationship' => 'bt_chitietdonhang_bt_accounts',
  'source' => 'non-db',
  'module' => 'Accounts',
  'bean_name' => 'Account',
  'side' => 'right',
  'vname' => 'LBL_BT_CHITIETDONHANG_BT_ACCOUNTS_FROM_ACCOUNTS_TITLE',
);


// created: 2023-02-08 08:26:49
$dictionary["BT_chitietdonhang_bt"]["fields"]["bt_chitietdonhang_bt_bt_sanpham_bt"] = array (
  'name' => 'bt_chitietdonhang_bt_bt_sanpham_bt',
  'type' => 'link',
  'relationship' => 'bt_chitietdonhang_bt_bt_sanpham_bt',
  'source' => 'non-db',
  'module' => 'BT_sanpham_bt',
  'bean_name' => 'BT_sanpham_bt',
  'side' => 'right',
  'vname' => 'LBL_BT_CHITIETDONHANG_BT_BT_SANPHAM_BT_FROM_BT_SANPHAM_BT_TITLE',
);


 // created: 2023-02-10 14:06:09

 

 // created: 2023-02-08 09:41:06
$dictionary['BT_chitietdonhang_bt']['fields']['discount_c']['labelValue']='discount';

 

 // created: 2023-02-08 09:43:02
$dictionary['BT_chitietdonhang_bt']['fields']['name']['required']=false;
$dictionary['BT_chitietdonhang_bt']['fields']['name']['duplicate_merge']='disabled';
$dictionary['BT_chitietdonhang_bt']['fields']['name']['duplicate_merge_dom_value']='0';
$dictionary['BT_chitietdonhang_bt']['fields']['name']['merge_filter']='disabled';
$dictionary['BT_chitietdonhang_bt']['fields']['name']['unified_search']=false;

 

 // created: 2023-02-10 05:59:11
$dictionary['BT_chitietdonhang_bt']['fields']['price_c']['labelValue']='price';

 

 // created: 2023-02-08 09:22:20
$dictionary['BT_chitietdonhang_bt']['fields']['tensp_c']['labelValue']='tensp';

 

 // created: 2023-02-10 14:06:10
$dictionary['BT_chitietdonhang_bt']['fields']['ten_donhang_c']['labelValue']='ten donhang';

 

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
?>