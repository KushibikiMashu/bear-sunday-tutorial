<?php
namespace MyVendor\MyProject\Interceptor;

use MyVendor\MyProject\MyLoggerInterface;
use Ray\Aop\MethodInterceptor;
use Ray\Aop\MethodInvocation;

class BenchMarker implements MethodInterceptor
{
    /**
     * @var MyLoggerInterface
     */
    public function __construct(MyLoggerInterface $logger)
    {
        $this->logger = $logger;
    }

    public function invoke(MethodInvocation $invocation)
    {
        $start = microtime(true);
        $result = $invocation->proceed();
        $time =  microtime(true) - $start;
        $messge = sprintf('%s: %0.5f(µs)', $invocation->getMethod()->getName(), $time);
        $this->logger->log($messge);

        return $result;
    }
}