<?php
    class SanPhamLogicHook{
        function ganMaSP($bean, $event,$args){
            // $bean->description = $bean->name;
            // $memberid = 'ABC000001';
            // list($mem_prefix,$mem_num) = sscanf($memberid,"%[A-Za-z]%[0-9]");
            // echo $mem_prefix . str_pad($mem_num + 1,6,'0',STR_PAD_LEFT);
            // $bean->id = 'ABC0001';
            // ++$bean->id;

            $bean->ten_ncc_c = $bean->ncc_name;
            $bean->bt_nhacungcap_bt_id_c = $bean->ncc_id; 
   
            global $db;
            
            $sqlselect = "SELECT * FROM bt_sanpham_bt ORDER BY masp DESC";    
            $row = $db->fetchOne($sqlselect);
            if(!empty($row)){  
                $bean->masp = ++$row['masp'];
              
            }else{
                $row['masp'] = "SKU0001";
                $bean->masp = $row['masp'];
            }

        }

    
    }