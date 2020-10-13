<?php

/**
 * @Project NUKEVIET 4.x
 * @Author VINADES.,JSC <contact@vinades.vn>
 * @Copyright (C) 2020 VINADES.,JSC. All rights reserved
 * @License: Not free read more http://nukeviet.vn/vi/store/modules/nvtools/
 * @Createdate Fri, 09 Oct 2020 06:26:01 GMT
 */

if (!defined('NV_MAINFILE')) {
    die('Stop!!!');
}

$sql_drop_module = [];
$sql_drop_module[] = "DROP TABLE IF EXISTS " . $db_config['prefix'] . "_" . $module_data . "_asuzacinfo";

$sql_create_module = $sql_drop_module;
$sql_create_module[] = "CREATE TABLE " . $db_config['prefix'] . "_" . $module_data . "_asuzacinfo (
  id_contact int(11) NOT NULL AUTO_INCREMENT,
  name text DEFAULT NULL,
  alias varchar(100) NOT NULL,
  email text DEFAULT NULL,
  phone varchar(20) DEFAULT NULL,
  comment text DEFAULT NULL
) ENGINE=MyISAM;";
