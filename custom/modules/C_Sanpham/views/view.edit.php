<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
class C_SanphamViewEdit extends ViewEdit
{
 public function display()
 {
     //truyền giá trị của field ticker_symbol vào tpl      
     $this->ss->assign("ABC", $this -> bean -> price);
     parent::display(); // TODO: Change the autogenerated stub
 }
}