<?php
class ChiTietDonHangLogicHook
{
    function ganMaDH($bean, $event, $args)
    {
        
        $bean->tensp_c = $bean->sanpham_name;
        $bean->bt_sanpham_bt_id_c = $bean->sanpham_id;
        $bean->ten_donhang_c = $bean->donhang_name;
        $bean->bt_donhang_bt_id_c = $bean->donhang_id;

        global $db;
        //Select
        $sqlSelect = "SELECT * FROM BT_sanpham_bt Where id='{$bean->sanpham_id}'";

        ////Hàm fetchOne trả về dòng đầu tiên của kết quả
        $row = $db->fetchOne($sqlSelect);

        if (!empty($row)) {
            //Không tìm thấy 
            $bean->price_c = +$row['price'];
        }

        $sqlSelectDonHang = "SELECT * FROM BT_donhang_bt Where id='{$bean->donhang_id}'";
        $rowDonHang = $db->fetchOne($sqlSelectDonHang);
        if(!empty($rowDonHang)){
            if($rowDonHang['price'] == 0.0){
                $total_price = $bean->price_c * $bean->soluong;
                $sqlUpdate = "UPDATE BT_donhang_bt SET price= {$total_price} WHERE id= '" . $bean->donhang_id ."'";
                $db->query($sqlUpdate);
            }else{
                $total_price = ($bean->price_c * $bean->soluong) + $rowDonHang['price'];
                $sqlUpdate = "UPDATE BT_donhang_bt SET price= {$total_price} WHERE id='" . $bean->donhang_id ."'";
                $db->query($sqlUpdate);
            }
        }
    }
}
