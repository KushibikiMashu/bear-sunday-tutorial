<?php

namespace Ray\Di\Compiler;

$instance = new \BEAR\Package\Provide\Logger\MonologProvider(unserialize('O:17:"BEAR\\AppMeta\\Meta":4:{s:4:"name";s:18:"MyVendor\\MyProject";s:6:"appDir";s:54:"/Users/matthew/sample_program/php/bear-sunday-tutorial";s:6:"tmpDir";s:70:"/Users/matthew/sample_program/php/bear-sunday-tutorial/var/tmp/hal-app";s:6:"logDir";s:70:"/Users/matthew/sample_program/php/bear-sunday-tutorial/var/log/hal-app";}'));
$is_singleton = true;
return $instance->get();
