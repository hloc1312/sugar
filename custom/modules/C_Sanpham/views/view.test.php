<?php
class C_SanphamViewTEST extends SugarView
{
    // function MODULE_NAMViewACTION_NAME()
    // {
    //     parent::SugarView();
    // }

    // public function preDisplay()
    // {
    //     parent::preDisplay();
    // }

    public function display()
    {

        // code here
        echo "hello boiz";
        $smarty = new Sugar_Smarty();
        $smarty -> assign('ABC',123123);
        echo $smarty-> fetch("custom/modules/C_Sanpham/tpls/test.tpl");
        parent::display();
    }
}