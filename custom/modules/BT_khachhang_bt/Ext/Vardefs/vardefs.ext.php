<?php 
 //WARNING: The contents of this file are auto-generated


 // created: 2023-02-10 04:08:18
$dictionary['BT_khachhang_bt']['fields']['first_name']['merge_filter']='disabled';

 

 // created: 2023-02-10 05:00:23
$dictionary['BT_khachhang_bt']['fields']['name']['required']=true;
$dictionary['BT_khachhang_bt']['fields']['name']['duplicate_merge']='disabled';
$dictionary['BT_khachhang_bt']['fields']['name']['duplicate_merge_dom_value']='0';
$dictionary['BT_khachhang_bt']['fields']['name']['merge_filter']='disabled';
$dictionary['BT_khachhang_bt']['fields']['name']['unified_search']=false;

 

$dictionary['BT_khachhang_bt']['fields']['first_name'] = array(
    'name' => 'first_name', 
    'type' => 'varchar', 
    'label' => 'LBL_FIRST_NAME', 
    'requited' => true,
);

$dictionary['BT_khachhang_bt']['fields']['last_name'] = array(
    'name' => 'last_name', 
    'type' => 'varchar', 
    'label' => 'LBL_LAST_NAME', 
    'requited' => true,
);


$dictionary['BT_khachhang_bt']['fields']['gender'] = array( 
    'name' => 'gender', 
    'type' => 'enum', 
    'label' => 'LBL_GENDER', 
    'options' => 'khachhang_gender_dom', 
);

$dictionary['BT_khachhang_bt']['fields']['age'] = array( 
    'name' => 'age', 
    'type' => 'int', 
    'label' => 'LBL_AGE', 
);

$dictionary['BT_khachhang_bt']['fields']['phone'] = array( 
    'name' => 'phone', 
    'type' => 'varchar', 
    'label' => 'LBL_PHONE', 
);

?>