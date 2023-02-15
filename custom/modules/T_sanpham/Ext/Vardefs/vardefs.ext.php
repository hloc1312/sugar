<?php 
 //WARNING: The contents of this file are auto-generated


// created: 2023-02-09 04:56:28
$dictionary["T_sanpham"]["fields"]["t_nhacungcap_t_sanpham"] = array (
  'name' => 't_nhacungcap_t_sanpham',
  'type' => 'link',
  'relationship' => 't_nhacungcap_t_sanpham',
  'source' => 'non-db',
  'module' => 'T_nhacungcap',
  'bean_name' => false,
  'vname' => 'LBL_T_NHACUNGCAP_T_SANPHAM_FROM_T_NHACUNGCAP_TITLE',
  'id_name' => 't_nhacungcap_t_sanphamt_nhacungcap_ida',
);
$dictionary["T_sanpham"]["fields"]["t_nhacungcap_t_sanpham_name"] = array (
  'name' => 't_nhacungcap_t_sanpham_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_T_NHACUNGCAP_T_SANPHAM_FROM_T_NHACUNGCAP_TITLE',
  'save' => true,
  'id_name' => 't_nhacungcap_t_sanphamt_nhacungcap_ida',
  'link' => 't_nhacungcap_t_sanpham',
  'table' => 't_nhacungcap',
  'module' => 'T_nhacungcap',
  'rname' => 'name',
);
$dictionary["T_sanpham"]["fields"]["t_nhacungcap_t_sanphamt_nhacungcap_ida"] = array (
  'name' => 't_nhacungcap_t_sanphamt_nhacungcap_ida',
  'type' => 'link',
  'relationship' => 't_nhacungcap_t_sanpham',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_T_NHACUNGCAP_T_SANPHAM_FROM_T_SANPHAM_TITLE',
);

?>