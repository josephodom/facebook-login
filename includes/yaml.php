<?php

use Symfony\Component\Yaml\Yaml;

$settings = Yaml::parse(file_get_contents('settings.yaml'));

?>