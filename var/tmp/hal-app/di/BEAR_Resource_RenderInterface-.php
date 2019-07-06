<?php

namespace Ray\Di\Compiler;

$instance = new \BEAR\Resource\HalRenderer($singleton('Doctrine\\Common\\Annotations\\Reader-'), $prototype('BEAR\\Resource\\HalLink-'));
$is_singleton = false;
return $instance;
