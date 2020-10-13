<?php

/**
 * @Project NUKEVIET 4.x
 * @Author VINADES.,JSC (contact@vinades.vn)
 * @Copyright (C) 2014 VINADES.,JSC. All rights reserved
 * @License GNU/GPL version 2 or any later version
 * @Createdate 3/25/2010 18:6
 */

if (! defined('NV_MAINFILE')) {
    die('Stop!!!');
}
if (defined('NV_EDITOR')) {
    require_once NV_ROOTDIR . '/' . NV_EDITORSDIR . '/' . NV_EDITOR . '/nv.php';
}
    global $module_name, $lang_module, $module_data;
    // $block_config['module'] and  defined('NV_SYSTEM')
// if (! defined('NV_SYSTEM')) {
    // if (file_exists(NV_ROOTDIR . '/themes/' . $global_config['module_theme'] . '/modules/asuzacinfo/block.contact_form.tpl')) {
    //     $block_theme = $global_config['module_theme'];
    // } elseif (file_exists(NV_ROOTDIR . '/themes/' . $global_config['site_theme'] . '/modules/asuzacinfo/block.contact_form.tpl')) {
    //     $block_theme = $global_config['site_theme'];
    // } else {
    //     $block_theme = 'default';
    // }
//    $xtpl = new XTemplate('info.tpl', NV_ROOTDIR . '/themes/' . $global_config['module_theme'] . '/modules/' . $module_file);
    $xtpl = new XTemplate('form.tpl', NV_ROOTDIR . '/themes/' .'asuzac_landingpage/modules/contact');
    $xtpl->assign('GLANG', $lang_global);
    $xtpl->assign('NV_BASE_SITEURL', NV_BASE_SITEURL);
    $xtpl->assign('MODULE_NAME', $module_name);
    $xtpl->assign('TEMPLATE', $block_theme);
    
    // if ($nv_Request->isset_request('submit', 'post')) {
    //     $name = $nv_Request->get_title('name', 'post', ''); 
    //     $email = $nv_Request->get_title('email', 'post', ''); 
    //     $phone = $nv_Request->get_title('phone', 'post', ''); 
    //     $comment = $nv_Request->get_title('comment', 'post', ''); 

      
    // }
    


    $xtpl->parse('main');
    $content = $xtpl->text('main');
// }