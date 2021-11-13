<?php

namespace Tests\Feature\Http\Controllers;

use App\Models\Extra;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use JMac\Testing\Traits\AdditionalAssertions;
use Tests\TestCase;

/**
 * @see \App\Http\Controllers\ExtraController
 */
class ExtraControllerTest extends TestCase
{
    use AdditionalAssertions, RefreshDatabase, WithFaker;

    /**
     * @test
     */
    public function index_displays_view()
    {
        $extras = Extra::factory()->count(3)->create();

        $response = $this->get(route('extra.index'));

        $response->assertOk();
        $response->assertViewIs('extra.index');
        $response->assertViewHas('extras');
    }


    /**
     * @test
     */
    public function create_displays_view()
    {
        $response = $this->get(route('extra.create'));

        $response->assertOk();
        $response->assertViewIs('extra.create');
    }


    /**
     * @test
     */
    public function store_uses_form_request_validation()
    {
        $this->assertActionUsesFormRequest(
            \App\Http\Controllers\ExtraController::class,
            'store',
            \App\Http\Requests\ExtraStoreRequest::class
        );
    }

    /**
     * @test
     */
    public function store_saves_and_redirects()
    {
        $title = $this->faker->sentence(4);
        $description = $this->faker->text;

        $response = $this->post(route('extra.store'), [
            'title' => $title,
            'description' => $description,
        ]);

        $extras = Extra::query()
            ->where('title', $title)
            ->where('description', $description)
            ->get();
        $this->assertCount(1, $extras);
        $extra = $extras->first();

        $response->assertRedirect(route('extra.index'));
        $response->assertSessionHas('extra.id', $extra->id);
    }


    /**
     * @test
     */
    public function show_displays_view()
    {
        $extra = Extra::factory()->create();

        $response = $this->get(route('extra.show', $extra));

        $response->assertOk();
        $response->assertViewIs('extra.show');
        $response->assertViewHas('extra');
    }


    /**
     * @test
     */
    public function edit_displays_view()
    {
        $extra = Extra::factory()->create();

        $response = $this->get(route('extra.edit', $extra));

        $response->assertOk();
        $response->assertViewIs('extra.edit');
        $response->assertViewHas('extra');
    }


    /**
     * @test
     */
    public function update_uses_form_request_validation()
    {
        $this->assertActionUsesFormRequest(
            \App\Http\Controllers\ExtraController::class,
            'update',
            \App\Http\Requests\ExtraUpdateRequest::class
        );
    }

    /**
     * @test
     */
    public function update_redirects()
    {
        $extra = Extra::factory()->create();
        $title = $this->faker->sentence(4);
        $description = $this->faker->text;

        $response = $this->put(route('extra.update', $extra), [
            'title' => $title,
            'description' => $description,
        ]);

        $extra->refresh();

        $response->assertRedirect(route('extra.index'));
        $response->assertSessionHas('extra.id', $extra->id);

        $this->assertEquals($title, $extra->title);
        $this->assertEquals($description, $extra->description);
    }


    /**
     * @test
     */
    public function destroy_deletes_and_redirects()
    {
        $extra = Extra::factory()->create();

        $response = $this->delete(route('extra.destroy', $extra));

        $response->assertRedirect(route('extra.index'));

        $this->assertDeleted($extra);
    }
}
