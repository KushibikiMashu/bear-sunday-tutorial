<?php
namespace MyVendor\MyProject;

interface MyLoggerInterface
{
    public function log(string $message) : void;
}