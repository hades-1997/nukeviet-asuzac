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

$page_title = $module_info['site_title'];
$key_words = $module_info['keywords'];

$array_data = [];

//------------------
// Viết code vào đây
//------------------

$contents = nv_theme_background_main($array_data);

include NV_ROOTDIR . '/includes/header.php';
echo nv_site_theme($contents);
include NV_ROOTDIR . '/includes/footer.php';
