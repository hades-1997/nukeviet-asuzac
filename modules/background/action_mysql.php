<?php

/**
 * @Project NUKEVIET 4.x
 * @Author ASUZAC.,JSC <info@asuzac.com.vn>
 * @Copyright (C) 2020 ASUZAC.,JSC. All rights reserved
 * @License: Not free read more http://nukeviet.vn/vi/store/modules/nvtools/
 * @Createdate Thu, 08 Oct 2020 06:05:56 GMT
 */

if (!defined('NV_MAINFILE')) {
    die('Stop!!!');
}

$sql_drop_module = [];
$sql_drop_module[] = "DROP TABLE IF EXISTS " . $db_config['prefix'] . "_" . $module_data . "_background_asuzac";
$sql_drop_module[] = "DROP TABLE IF EXISTS " . $db_config['prefix'] . "_" . $module_data . "_caption";

$sql_create_module = $sql_drop_module;
$sql_create_module[] = "CREATE TABLE " . $db_config['prefix'] . "_" . $module_data . "_background_asuzac (
  id_background int(11) NOT NULL AUTO_INCREMENT,
  title_background varchar(50) DEFAULT NULL,
  alias text NOT NULL,
  images text DEFAULT NULL,
  descript_image varchar(150) DEFAULT NULL
) ENGINE=MyISAM;";

$sql_create_module[] = "CREATE TABLE " . $db_config['prefix'] . "_" . $module_data . "_caption (
  id_caption int(11) NOT NULL AUTO_INCREMENT,
  caption_background text DEFAULT NULL
) ENGINE=MyISAM;";
