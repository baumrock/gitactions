<?php namespace RockDeploy;
require_once __DIR__."/modules/RockDeploy/Deployment.php";
$deploy = new Deployment();
$deploy->hello();
$deploy->paths();
