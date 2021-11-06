<?php

namespace Tests\Feature\Http\Controllers;

use App\Models\Team;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use JMac\Testing\Traits\AdditionalAssertions;
use Tests\TestCase;

/**
 * @see \App\Http\Controllers\TeamController
 */
class TeamControllerTest extends TestCase
{
    use AdditionalAssertions, RefreshDatabase, WithFaker;

    /**
     * @test
     */
    public function index_displays_view()
    {
        $teams = Team::factory()->count(3)->create();

        $response = $this->get(route('team.index'));

        $response->assertOk();
        $response->assertViewIs('team.index');
        $response->assertViewHas('teams');
    }


    /**
     * @test
     */
    public function create_displays_view()
    {
        $response = $this->get(route('team.create'));

        $response->assertOk();
        $response->assertViewIs('team.create');
    }


    /**
     * @test
     */
    public function store_uses_form_request_validation()
    {
        $this->assertActionUsesFormRequest(
            \App\Http\Controllers\TeamController::class,
            'store',
            \App\Http\Requests\TeamStoreRequest::class
        );
    }

    /**
     * @test
     */
    public function store_saves_and_redirects()
    {
        $name = $this->faker->name;

        $response = $this->post(route('team.store'), [
            'name' => $name,
        ]);

        $teams = Team::query()
            ->where('name', $name)
            ->get();
        $this->assertCount(1, $teams);
        $team = $teams->first();

        $response->assertRedirect(route('team.index'));
        $response->assertSessionHas('team.id', $team->id);
    }


    /**
     * @test
     */
    public function show_displays_view()
    {
        $team = Team::factory()->create();

        $response = $this->get(route('team.show', $team));

        $response->assertOk();
        $response->assertViewIs('team.show');
        $response->assertViewHas('team');
    }


    /**
     * @test
     */
    public function edit_displays_view()
    {
        $team = Team::factory()->create();

        $response = $this->get(route('team.edit', $team));

        $response->assertOk();
        $response->assertViewIs('team.edit');
        $response->assertViewHas('team');
    }


    /**
     * @test
     */
    public function update_uses_form_request_validation()
    {
        $this->assertActionUsesFormRequest(
            \App\Http\Controllers\TeamController::class,
            'update',
            \App\Http\Requests\TeamUpdateRequest::class
        );
    }

    /**
     * @test
     */
    public function update_redirects()
    {
        $team = Team::factory()->create();
        $name = $this->faker->name;

        $response = $this->put(route('team.update', $team), [
            'name' => $name,
        ]);

        $team->refresh();

        $response->assertRedirect(route('team.index'));
        $response->assertSessionHas('team.id', $team->id);

        $this->assertEquals($name, $team->name);
    }


    /**
     * @test
     */
    public function destroy_deletes_and_redirects()
    {
        $team = Team::factory()->create();

        $response = $this->delete(route('team.destroy', $team));

        $response->assertRedirect(route('team.index'));

        $this->assertDeleted($team);
    }
}
