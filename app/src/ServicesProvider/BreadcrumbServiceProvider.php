<?php

/*
 * UserFrosting Breadcrumb Sprinkle
 *
 * @link      https://github.com/lcharette/UF_Breadcrumb
 * @copyright Copyright (c) 2020 Louis Charette
 * @license   https://github.com/lcharette/UF_Breadcrumb/blob/master/LICENSE (MIT License)
 */

namespace UserFrosting\Sprinkle\Breadcrumb\ServicesProvider;

use UserFrosting\Sprinkle\Core\Router;
use UserFrosting\Config\Config;
use UserFrosting\I18n\Translator;
use Psr\Container\ContainerInterface;
use UserFrosting\Sprinkle\Breadcrumb\Manager;
use UserFrosting\Sprinkle\Breadcrumb\Twig\BreadcrumbExtension;

/**
 * Registers services for the Breadcrumb sprinkle.
 */
class BreadcrumbServiceProvider implements ServicesProviderInterface
{
    /**
     * Register UserFrosting's Breadcrumb services.
     *
     * @param ContainerInterface $container A DI container implementing ArrayAccess and container-interop.
     */
    public function register(): array 
    {
        return [
            Manager::Class => function (Config $config, Translator $translator, Router $router) {
                return new Manager($config, $translator, $router);
            }
        ];
    }
}
