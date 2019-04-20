<?php
if (!session_id()) session_start();

require_once '../app/init.php'; //Teknik bootstrapping

$app = new App;