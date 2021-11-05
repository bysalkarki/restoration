<?php

namespace Tests\Feature\Http\Controllers;

use App\Models\Appsetting;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

/**
 * @see \App\Http\Controllers\AppsettingController
 */
class AppsettingControllerTest extends TestCase
{
    use RefreshDatabase;

    /**
     * @test
     */
    public function index_displays_view()
    {
        $appsettings = Appsetting::factory()->count(3)->create();

        $response = $this->get(route('appsetting.index'));

        $response->assertOk();
        $response->assertViewIs('appsetting.form');
        $response->assertViewHas('appSettings');
    }


    /**
     * @test
     */
    public function store_saves_and_redirects()
    {
        $response = $this->post(route('appsetting.store'));

        $response->assertRedirect(route('appsetting.index'));

        $this->assertDatabaseHas(appsettings, [ /* ... */ ]);
    }
}
