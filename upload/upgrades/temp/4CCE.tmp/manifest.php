<?php
/*********************************************************************************
 * SugarCRM Community Edition is a customer relationship management program developed by
 * SugarCRM, Inc. Copyright (C) 2004-2013 SugarCRM Inc.
 * 
 * This program is free software; you can redistribute it and/or modify it under
 * the terms of the GNU Affero General Public License version 3 as published by the
 * Free Software Foundation with the addition of the following permission added
 * to Section 15 as permitted in Section 7(a): FOR ANY PART OF THE COVERED WORK
 * IN WHICH THE COPYRIGHT IS OWNED BY SUGARCRM, SUGARCRM DISCLAIMS THE WARRANTY
 * OF NON INFRINGEMENT OF THIRD PARTY RIGHTS.
 * 
 * This program is distributed in the hope that it will be useful, but WITHOUT
 * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS
 * FOR A PARTICULAR PURPOSE.  See the GNU Affero General Public License for more
 * details.
 * 
 * You should have received a copy of the GNU Affero General Public License along with
 * this program; if not, see http://www.gnu.org/licenses or write to the Free
 * Software Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA
 * 02110-1301 USA.
 * 
 * You can contact SugarCRM, Inc. headquarters at 10050 North Wolfe Road,
 * SW2-130, Cupertino, CA 95014, USA. or at email address contact@sugarcrm.com.
 * 
 * The interactive user interfaces in modified source and object code versions
 * of this program must display Appropriate Legal Notices, as required under
 * Section 5 of the GNU Affero General Public License version 3.
 * 
 * In accordance with Section 7(b) of the GNU Affero General Public License version 3,
 * these Appropriate Legal Notices must retain the display of the "Powered by
 * SugarCRM" logo. If the display of the logo is not reasonably feasible for
 * technical reasons, the Appropriate Legal Notices must display the words
 * "Powered by SugarCRM".
 ********************************************************************************/


// THIS CONTENT IS GENERATED BY MBPackage.php
$manifest = array (
  0 => 
  array (
    'acceptable_sugar_versions' => 
    array (
      0 => '',
    ),
  ),
  1 => 
  array (
    'acceptable_sugar_flavors' => 
    array (
      0 => 'CE',
      1 => 'PRO',
      2 => 'ENT',
    ),
  ),
  'readme' => '',
  'key' => 'BT',
  'author' => '',
  'description' => '',
  'icon' => '',
  'is_uninstallable' => true,
  'name' => 'BTCRM',
  'published_date' => '2023-02-08 04:13:50',
  'type' => 'module',
  'version' => 1675829630,
  'remove_tables' => 'prompt',
);


$installdefs = array (
  'id' => 'BTCRM',
  'beans' => 
  array (
    0 => 
    array (
      'module' => 'BT_donhang_bt',
      'class' => 'BT_donhang_bt',
      'path' => 'modules/BT_donhang_bt/BT_donhang_bt.php',
      'tab' => true,
    ),
    1 => 
    array (
      'module' => 'BT_nhacungcap_bt',
      'class' => 'BT_nhacungcap_bt',
      'path' => 'modules/BT_nhacungcap_bt/BT_nhacungcap_bt.php',
      'tab' => true,
    ),
    2 => 
    array (
      'module' => 'BT_sanpham_bt',
      'class' => 'BT_sanpham_bt',
      'path' => 'modules/BT_sanpham_bt/BT_sanpham_bt.php',
      'tab' => true,
    ),
  ),
  'layoutdefs' => 
  array (
    0 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/layoutdefs/bt_nhacungcap_bt_bt_sanpham_bt_BT_nhacungcap_bt.php',
      'to_module' => 'BT_nhacungcap_bt',
    ),
  ),
  'relationships' => 
  array (
    0 => 
    array (
      'meta_data' => '<basepath>/SugarModules/relationships/relationships/bt_nhacungcap_bt_bt_sanpham_btMetaData.php',
    ),
    1 => 
    array (
      'meta_data' => '<basepath>/SugarModules/relationships/relationships/bt_sanpham_bt_bt_nhacungcap_btMetaData.php',
    ),
  ),
  'image_dir' => '<basepath>/icons',
  'copy' => 
  array (
    0 => 
    array (
      'from' => '<basepath>/SugarModules/modules/BT_donhang_bt',
      'to' => 'modules/BT_donhang_bt',
    ),
    1 => 
    array (
      'from' => '<basepath>/SugarModules/modules/BT_nhacungcap_bt',
      'to' => 'modules/BT_nhacungcap_bt',
    ),
    2 => 
    array (
      'from' => '<basepath>/SugarModules/modules/BT_sanpham_bt',
      'to' => 'modules/BT_sanpham_bt',
    ),
  ),
  'language' => 
  array (
    0 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/BT_sanpham_bt.php',
      'to_module' => 'BT_sanpham_bt',
      'language' => 'en_us',
    ),
    1 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/BT_nhacungcap_bt.php',
      'to_module' => 'BT_nhacungcap_bt',
      'language' => 'en_us',
    ),
    2 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/BT_nhacungcap_bt.php',
      'to_module' => 'BT_nhacungcap_bt',
      'language' => 'en_us',
    ),
    3 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/BT_sanpham_bt.php',
      'to_module' => 'BT_sanpham_bt',
      'language' => 'en_us',
    ),
    4 => 
    array (
      'from' => '<basepath>/SugarModules/language/application/en_us.lang.php',
      'to_module' => 'application',
      'language' => 'en_us',
    ),
  ),
  'vardefs' => 
  array (
    0 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/vardefs/bt_nhacungcap_bt_bt_sanpham_bt_BT_sanpham_bt.php',
      'to_module' => 'BT_sanpham_bt',
    ),
    1 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/vardefs/bt_nhacungcap_bt_bt_sanpham_bt_BT_nhacungcap_bt.php',
      'to_module' => 'BT_nhacungcap_bt',
    ),
    2 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/vardefs/bt_sanpham_bt_bt_nhacungcap_bt_BT_nhacungcap_bt.php',
      'to_module' => 'BT_nhacungcap_bt',
    ),
    3 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/vardefs/bt_sanpham_bt_bt_nhacungcap_bt_BT_sanpham_bt.php',
      'to_module' => 'BT_sanpham_bt',
    ),
  ),
  'layoutfields' => 
  array (
    0 => 
    array (
      'additional_fields' => 
      array (
      ),
    ),
    1 => 
    array (
      'additional_fields' => 
      array (
      ),
    ),
  ),
);