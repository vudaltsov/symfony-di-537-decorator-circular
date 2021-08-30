<?php

declare(strict_types=1);

namespace App;

final class ServiceDecorator implements ServiceInterface
{
    public function __construct(ServiceInterface $decoratedService)
    {
    }
}
