<?php

namespace UserFrosting\Sprinkle\Breadcrumb;

use UserFrosting\Sprinkle\Breadcrumb\Twig\BreadcrumbExtension;
use UserFrosting\Sprinkle\Core\Sprinkle\Recipe\TwigExtensionRecipe;
use UserFrosting\Sprinkle\SprinkleRecipe;
use UserFrosting\Sprinkle\Account\Account;
use UserFrosting\Sprinkle\Admin\Admin;
use UserFrosting\Sprinkle\Core\Core;
use UserFrosting\Theme\AdminLTE\AdminLTE;

class Breadcrumb implements SprinkleRecipe, TwigExtensionRecipe
{
    public function getName(): string
    {
        return 'Breadcrumb';
    }

    public function getPath(): string
    {
        return __DIR__ . '/../';
    }

    public function getSprinkles(): array
    {
        return [
            Core::class,
            AdminLTE::class,
        ];
    }

    public function getRoutes(): array
    {
        return [];
    }

    public function getServices(): array
    {
        return [];
    }

    public function getTwigExtensions(): array
    {
        return [
            BreadcrumbExtension::class,
        ];
    }
}