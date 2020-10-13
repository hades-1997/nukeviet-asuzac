<?php

/**
 * @Project NUKEVIET 4.x
 * @Author ASUZAC.,JSC <info@asuzac.com.vn>
 * @Copyright (C) 2020 ASUZAC.,JSC. All rights reserved
 * @License: Not free read more http://nukeviet.vn/vi/store/modules/nvtools/
 * @Createdate Thu, 08 Oct 2020 06:05:56 GMT
 */

if (!defined('NV_IS_FILE_ADMIN')) {
    die('Stop!!!');
}

// Dưới đây là code mẫu. Xem hướng dẫn ở https://wiki.nukeviet.vn/programming4:module:menu

/*
$sql = 'SELECT * FROM ' . NV_PREFIXLANG . '_' . $mod_data . '_cat WHERE status=1 OR status=2 ORDER BY sort ASC';
$result = $db->query($sql);
while ($row = $result->fetch()) {
    $array_item[$row['catid']] = [
        'parentid' => $row['parentid'],
        'groups_view' => $row['groups_view'],
        'key' => $row['catid'],
        'title' => $row['title'],
        'alias' => $row['alias']
    ];
}
 */
