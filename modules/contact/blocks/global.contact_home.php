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

if ($module_name != $block_config['module'] and defined('NV_SYSTEM')) {
    if (file_exists(NV_ROOTDIR . '/themes/' . $global_config['module_theme'] . '/modules/contact/block.contact_home.tpl')) {
        $block_theme = $global_config['module_theme'];
    } elseif (file_exists(NV_ROOTDIR . '/themes/' . $global_config['site_theme'] . '/modules/contact/block.contact_home.tpl')) {
        $block_theme = $global_config['site_theme'];
    } else {
        $block_theme = 'default';
    }

    $xtpl = new XTemplate('block.contact_home.tpl', NV_ROOTDIR . '/themes/' . $block_theme . '/modules/contact');
    $xtpl->assign('GLANG', $lang_global);
    $xtpl->assign('TEMPLATE', $block_theme);
    $xtpl->assign('MODULE', $block_config['module']);
    // $xtpl->assign('NV_BASE_SITEURL', NV_BASE_SITEURL);
    // $post = array();
    // $post['title'] = $nv_Request->get_title('title', 'post');
    // $post['email'] = $nv_Request->get_title('email', 'post');



    $xtpl->parse('main');
    $content = $xtpl->text('main');
}