<?php

namespace UserFrosting\Sprinkle\Breadcrumb;

use UserFrosting\Sprinkle\Core\Sprinkle\Recipe\TwigExtensionRecipe;
use UserFrosting\Sprinkle\SprinkleRecipe;

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
        return [];
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
        return [];
    }
}