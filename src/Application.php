<?php

namespace NenMvc;

use Nen\Application as NenApplication;
use Nen\Router\RoutesInterface;

/**
 * Class Application
 */
class Application extends NenApplication
{
    /**
     * {@inheritdoc}
     */
    public function __construct(RoutesInterface $routes)
    {
        parent::__construct($routes);
    }
}
