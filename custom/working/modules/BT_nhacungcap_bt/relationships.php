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

$relationships = array (
  'bt_nhacungcap_bt_modified_user' => 
  array (
    'id' => '75fab7b0-f30c-442c-86b7-63e48c9f9c79',
    'relationship_name' => 'bt_nhacungcap_bt_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'BT_nhacungcap_bt',
    'rhs_table' => 'bt_nhacungcap_bt',
    'rhs_key' => 'modified_user_id',
    'join_table' => NULL,
    'join_key_lhs' => NULL,
    'join_key_rhs' => NULL,
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => NULL,
    'relationship_role_column_value' => NULL,
    'reverse' => '0',
    'deleted' => '0',
    'readonly' => true,
    'rhs_subpanel' => NULL,
    'lhs_subpanel' => NULL,
    'relationship_only' => false,
    'for_activities' => false,
    'is_custom' => false,
    'from_studio' => false,
  ),
  'bt_nhacungcap_bt_created_by' => 
  array (
    'id' => '765cfb84-59b9-4a30-5a51-63e48caad1f2',
    'relationship_name' => 'bt_nhacungcap_bt_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'BT_nhacungcap_bt',
    'rhs_table' => 'bt_nhacungcap_bt',
    'rhs_key' => 'created_by',
    'join_table' => NULL,
    'join_key_lhs' => NULL,
    'join_key_rhs' => NULL,
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => NULL,
    'relationship_role_column_value' => NULL,
    'reverse' => '0',
    'deleted' => '0',
    'readonly' => true,
    'rhs_subpanel' => NULL,
    'lhs_subpanel' => NULL,
    'relationship_only' => false,
    'for_activities' => false,
    'is_custom' => false,
    'from_studio' => false,
  ),
  'bt_nhacungcap_bt_assigned_user' => 
  array (
    'id' => '76b7fc5a-9ece-79b4-b785-63e48c87bb87',
    'relationship_name' => 'bt_nhacungcap_bt_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'BT_nhacungcap_bt',
    'rhs_table' => 'bt_nhacungcap_bt',
    'rhs_key' => 'assigned_user_id',
    'join_table' => NULL,
    'join_key_lhs' => NULL,
    'join_key_rhs' => NULL,
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => NULL,
    'relationship_role_column_value' => NULL,
    'reverse' => '0',
    'deleted' => '0',
    'readonly' => true,
    'rhs_subpanel' => NULL,
    'lhs_subpanel' => NULL,
    'relationship_only' => false,
    'for_activities' => false,
    'is_custom' => false,
    'from_studio' => false,
  ),
  'ncc_sps' => 
  array (
    'id' => 'a2b61ef9-967d-4003-7d83-63e48cc8383d',
    'relationship_name' => 'ncc_sps',
    'lhs_module' => 'BT_nhacungcap_bt',
    'lhs_table' => 'bt_nhacungcap_bt',
    'lhs_key' => 'id',
    'rhs_module' => 'BT_sanpham_bt',
    'rhs_table' => 'bt_sanpham_bt',
    'rhs_key' => 'ncc_id',
    'join_table' => NULL,
    'join_key_lhs' => NULL,
    'join_key_rhs' => NULL,
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => NULL,
    'relationship_role_column_value' => NULL,
    'reverse' => '0',
    'deleted' => '0',
    'readonly' => true,
    'rhs_subpanel' => 'default',
    'lhs_subpanel' => NULL,
    'relationship_only' => false,
    'for_activities' => false,
    'is_custom' => false,
    'from_studio' => false,
  ),
  'bt_nhacungcap_bt_bt_sanpham_bt' => 
  array (
    'id' => 'b978656c-08ae-cb36-1d0b-63e48c341389',
    'relationship_name' => 'bt_nhacungcap_bt_bt_sanpham_bt',
    'lhs_module' => 'BT_nhacungcap_bt',
    'lhs_table' => 'bt_nhacungcap_bt',
    'lhs_key' => 'id',
    'rhs_module' => 'BT_sanpham_bt',
    'rhs_table' => 'bt_sanpham_bt',
    'rhs_key' => 'id',
    'join_table' => 'bt_nhacungcap_bt_bt_sanpham_bt_c',
    'join_key_lhs' => 'bt_nhacungcap_bt_bt_sanpham_btbt_nhacungcap_bt_ida',
    'join_key_rhs' => 'bt_nhacungcap_bt_bt_sanpham_btbt_sanpham_bt_idb',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => NULL,
    'relationship_role_column_value' => NULL,
    'reverse' => '0',
    'deleted' => '0',
    'readonly' => true,
    'rhs_subpanel' => 'default',
    'lhs_subpanel' => NULL,
    'is_custom' => true,
    'relationship_only' => false,
    'for_activities' => false,
    'from_studio' => false,
  ),
  'bt_sanpham_bt_bt_nhacungcap_bt' => 
  array (
    'id' => 'ba22b685-1b2d-6680-c7a9-63e48cb12761',
    'relationship_name' => 'bt_sanpham_bt_bt_nhacungcap_bt',
    'lhs_module' => 'BT_sanpham_bt',
    'lhs_table' => 'bt_sanpham_bt',
    'lhs_key' => 'id',
    'rhs_module' => 'BT_nhacungcap_bt',
    'rhs_table' => 'bt_nhacungcap_bt',
    'rhs_key' => 'id',
    'join_table' => 'bt_sanpham_bt_bt_nhacungcap_bt_c',
    'join_key_lhs' => 'bt_sanpham_bt_bt_nhacungcap_btbt_sanpham_bt_ida',
    'join_key_rhs' => 'bt_sanpham_bt_bt_nhacungcap_btbt_nhacungcap_bt_idb',
    'relationship_type' => 'one-to-one',
    'relationship_role_column' => NULL,
    'relationship_role_column_value' => NULL,
    'reverse' => '0',
    'deleted' => '0',
    'readonly' => true,
    'rhs_subpanel' => NULL,
    'lhs_subpanel' => 'default',
    'is_custom' => true,
    'relationship_only' => false,
    'for_activities' => false,
    'from_studio' => false,
  ),
);