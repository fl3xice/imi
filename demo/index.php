<?php

use imi\imi;
use imi\uiuri;

require_once ".././vendor/autoload.php";

$Imi = new imi();
$Imi->saveUri(new uiuri("http://imi.gg"));
