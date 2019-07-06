<?php

namespace Ray\Di\Compiler;

$instance = new \BEAR\Resource\Module\SchemeCollectionProvider('MyVendor\\MyProject', $injector());
$is_singleton = false;
return $instance->get();
