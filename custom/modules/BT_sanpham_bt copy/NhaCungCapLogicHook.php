<?php
    class NhaCungCapLogicHook{
        function ganMaNCC($bean, $event,$args){
            // $bean->description = $bean->name;
            // $memberid = 'ABC000001';
            // list($mem_prefix,$mem_num) = sscanf($memberid,"%[A-Za-z]%[0-9]");
            // echo $mem_prefix . str_pad($mem_num + 1,6,'0',STR_PAD_LEFT);
            // $bean->id = 'ABC0001';
            // ++$bean->id;
   
            global $db;
            
            $sqlselect = "SELECT * FROM bt_nhacungcap_bt ORDER BY mancc DESC";    
            $row = $db->fetchOne($sqlselect);
            if(!empty($row)){  
                $bean->mancc = ++$row['mancc'];
              
            }else{
                $row['mancc'] = "NCC0001";
                $bean->mancc = $row['mancc'];
            }

        }
    }