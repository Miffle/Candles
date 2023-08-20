<?php

namespace Tests\Feature;

use App\Models\Types;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use function PHPUnit\Framework\assertEquals;

class CatalogTest extends TestCase
{

    /**
     * A basic feature test example.
     */

    use RefreshDatabase;
    public function test_load_page(): void
    {
        $response = $this->get('/catalog');
        $response->assertStatus(200);
    }
    public function test_type_count(){
        $this->create_types_and_products();
        $onPageTypesCount = $this->get("/catalog")->viewData("categories")->count();
        assertEquals($onPageTypesCount, $this->TypesCount);
    }

    public function test_type_name()
    {
        $this->create_types_and_products();
        $this->onCatalogPageElements = $this->get("/catalog")->viewData("categories");
        for ($i = 0; $i < $this->Types->count(); $i++) {
            assertEquals($this->onCatalogPageElements[$i]->name, $this->Types[$i]->name);
            echo $this->onCatalogPageElements[$i]->name . " - - - " . $this->Types[$i]->name . "\n";
        }
    }
    public function test_type_engName()
    {
        $this->create_types_and_products();
        $this->onCatalogPageElements = $this->get("/catalog")->viewData("categories");
        for ($i = 0; $i < $this->Types->count(); $i++) {
            assertEquals($this->onCatalogPageElements[$i]->engName, $this->Types[$i]->engName);
            echo $this->onCatalogPageElements[$i]->engName . " - - - " . $this->Types[$i]->engName . "\n";
        }
    }
}
