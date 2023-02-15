<?php
    class SanPhamLogic{
        function ganTenBangDesc($bean, $event,$args){
            // $bean->description = $bean->name;
            // $memberid = 'ABC000001';
            // list($mem_prefix,$mem_num) = sscanf($memberid,"%[A-Za-z]%[0-9]");
            // echo $mem_prefix . str_pad($mem_num + 1,6,'0',STR_PAD_LEFT);
            // $bean->id = 'ABC0001';
            // ++$bean->id;
   
            global $db;
            
            $sqlselect = "SELECT * FROM c_sanpham ORDER BY description DESC";    
            $row = $db->fetchOne($sqlselect);
            if(!empty($row)){  
                $bean->description = ++$row['description'];
              
            }else{
                $row['description'] = "MaSP00001";
                $bean->description = $row['description'];
            }

        }
    }