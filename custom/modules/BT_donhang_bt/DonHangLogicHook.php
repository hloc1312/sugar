<?php
    class DonHangLogicHook{
        function ganMaDH($bean, $event,$args){
            // $bean->description = $bean->name;
            // $memberid = 'ABC000001';
            // list($mem_prefix,$mem_num) = sscanf($memberid,"%[A-Za-z]%[0-9]");
            // echo $mem_prefix . str_pad($mem_num + 1,6,'0',STR_PAD_LEFT);
            // $bean->id = 'ABC0001';
            // ++$bean->id;
            
            $bean->ten_khachhang_c = $bean->khachhang_name;
            $bean->bt_khachhang_bt_id_c = $bean->khachhang_id;

            global $db;
            
            $sqlselect = "SELECT * FROM bt_donhang_bt ORDER BY mdh DESC";    
            $row = $db->fetchOne($sqlselect);
            if(!empty($row)){  
                $bean->mdh = ++$row['mdh'];
              
            }else{
                $row['mdh'] = "HD0001";
                $bean->mdh = $row['mdh'];
            }

        }

      
    }