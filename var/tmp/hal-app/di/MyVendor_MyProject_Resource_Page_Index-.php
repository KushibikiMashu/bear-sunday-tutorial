<?php

namespace Ray\Di\Compiler;

$instance = new \MyVendor\MyProject\Resource\Page\Index();
$instance->setRenderer($prototype('BEAR\\Resource\\RenderInterface-'));
$is_singleton = false;
return $instance;
