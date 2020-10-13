<?php

/**
 * @Project NUKEVIET 4.x
 * @Author ASUZAC.,JSC <info@asuzac.com.vn>
 * @Copyright (C) 2020 ASUZAC.,JSC. All rights reserved
 * @License: Not free read more http://nukeviet.vn/vi/store/modules/nvtools/
 * @Createdate Thu, 08 Oct 2020 06:05:56 GMT
 */

if (!defined('NV_IS_MOD_BACKGROUND')) {
    die('Stop!!!');
}

/**
 * nv_theme_background_main()
 * 
 * @param mixed $array_data
 * @return
 */
function nv_theme_background_main($array_data)
{
    global $module_info, $lang_module, $lang_global, $op;

    $xtpl = new XTemplate($op . '.tpl', NV_ROOTDIR . '/themes/' . $module_info['template'] . '/modules/' . $module_info['module_theme']);
    $xtpl->assign('LANG', $lang_module);
    $xtpl->assign('GLANG', $lang_global);

    //------------------
    // Viết code vào đây
    //------------------

    $xtpl->parse('main');
    return $xtpl->text('main');
}

/**
 * nv_theme_background_detail()
 * 
 * @param mixed $array_data
 * @return
 */
function nv_theme_background_detail($array_data)
{
    global $module_info, $lang_module, $lang_global, $op;

    $xtpl = new XTemplate($op . '.tpl', NV_ROOTDIR . '/themes/' . $module_info['template'] . '/modules/' . $module_info['module_theme']);
    $xtpl->assign('LANG', $lang_module);
    $xtpl->assign('GLANG', $lang_global);

    //------------------
    // Viết code vào đây
    //------------------

    $xtpl->parse('main');
    return $xtpl->text('main');
}

/**
 * nv_theme_background_search()
 * 
 * @param mixed $array_data
 * @return
 */
function nv_theme_background_search($array_data)
{
    global $module_info, $lang_module, $lang_global, $op;

    $xtpl = new XTemplate($op . '.tpl', NV_ROOTDIR . '/themes/' . $module_info['template'] . '/modules/' . $module_info['module_theme']);
    $xtpl->assign('LANG', $lang_module);
    $xtpl->assign('GLANG', $lang_global);

    //------------------
    // Viết code vào đây
    //------------------

    $xtpl->parse('main');
    return $xtpl->text('main');
}
