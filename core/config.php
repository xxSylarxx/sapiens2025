<?php

// config server
define("WEBURL", 'http://admin-sapiens-2025.demo');
define("DIROOT", dirname(__DIR__));

// config pagweb
define("EMPRESA", 'SAPIENS');
define("LIMXPAG", 3);

// config timezone
date_default_timezone_set('America/Los_Angeles');
setlocale(LC_TIME, "english");

// config database
/* define("BD_HOST", "sapientiacorporation.ipagemysql.com"); */
define("BD_HOST", "localhost");
define("BD_NAME", "web_sapiens");
/* define("BD_USER", "cubicol2"); */
define("BD_USER", "root");
/* define("BD_PASS", "Cubicol#2022"); */
define("BD_PASS", "");
define("BD_DRIVER", "mysql");

/* define("BD_HOST", "sapientiacorporation.ipagemysql.com");
define("BD_NAME", "web_sapiens");
define("BD_USER", "sapiens");
define("BD_PASS", "Cubicol#2022");
define("BD_DRIVER", "mysql"); */