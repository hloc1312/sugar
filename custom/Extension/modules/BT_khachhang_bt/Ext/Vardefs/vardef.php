<?php
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
