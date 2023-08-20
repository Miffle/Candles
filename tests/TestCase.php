<?php

namespace Tests;

use App\Models\Products;
use App\Models\Types;
use Illuminate\Foundation\Testing\TestCase as BaseTestCase;

abstract class TestCase extends BaseTestCase
{
    use CreatesApplication;

    protected int $TypesCount = 50;
    protected $Types;
    protected $onCatalogPageElements;

    protected function create_types_and_products(): void
    {
        $this->Types = Types::factory()->count($this->TypesCount)->create();
    }
}
