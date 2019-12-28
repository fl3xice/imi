<?php

use imi\imi;
use imi\uri;

require_once ".././vendor/autoload.php";

$Imi = new imi();
$Imi->saveUri(new uri(["http://","imi",".","gg"]));
print $Imi->getUri();