<?php

namespace Tests\Feature\Http\Controllers;

use App\Models\Partner;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use JMac\Testing\Traits\AdditionalAssertions;
use Tests\TestCase;

/**
 * @see \App\Http\Controllers\PartnerController
 */
class PartnerControllerTest extends TestCase
{
    use AdditionalAssertions, RefreshDatabase, WithFaker;

    /**
     * @test
     */
    public function index_displays_view()
    {
        $partners = Partner::factory()->count(3)->create();

        $response = $this->get(route('partner.index'));

        $response->assertOk();
        $response->assertViewIs('partner.index');
        $response->assertViewHas('partners');
    }


    /**
     * @test
     */
    public function create_displays_view()
    {
        $response = $this->get(route('partner.create'));

        $response->assertOk();
        $response->assertViewIs('partner.create');
    }


    /**
     * @test
     */
    public function store_uses_form_request_validation()
    {
        $this->assertActionUsesFormRequest(
            \App\Http\Controllers\PartnerController::class,
            'store',
            \App\Http\Requests\PartnerStoreRequest::class
        );
    }

    /**
     * @test
     */
    public function store_saves_and_redirects()
    {
        $name = $this->faker->name;
        $image = $this->faker->word;
        $publishStatus = $this->faker->boolean;

        $response = $this->post(route('partner.store'), [
            'name' => $name,
            'image' => $image,
            'publishStatus' => $publishStatus,
        ]);

        $partners = Partner::query()
            ->where('name', $name)
            ->where('image', $image)
            ->where('publishStatus', $publishStatus)
            ->get();
        $this->assertCount(1, $partners);
        $partner = $partners->first();

        $response->assertRedirect(route('partner.index'));
        $response->assertSessionHas('partner.id', $partner->id);
    }


    /**
     * @test
     */
    public function show_displays_view()
    {
        $partner = Partner::factory()->create();

        $response = $this->get(route('partner.show', $partner));

        $response->assertOk();
        $response->assertViewIs('partner.show');
        $response->assertViewHas('partner');
    }


    /**
     * @test
     */
    public function edit_displays_view()
    {
        $partner = Partner::factory()->create();

        $response = $this->get(route('partner.edit', $partner));

        $response->assertOk();
        $response->assertViewIs('partner.edit');
        $response->assertViewHas('partner');
    }


    /**
     * @test
     */
    public function update_uses_form_request_validation()
    {
        $this->assertActionUsesFormRequest(
            \App\Http\Controllers\PartnerController::class,
            'update',
            \App\Http\Requests\PartnerUpdateRequest::class
        );
    }

    /**
     * @test
     */
    public function update_redirects()
    {
        $partner = Partner::factory()->create();
        $name = $this->faker->name;
        $image = $this->faker->word;
        $publishStatus = $this->faker->boolean;

        $response = $this->put(route('partner.update', $partner), [
            'name' => $name,
            'image' => $image,
            'publishStatus' => $publishStatus,
        ]);

        $partner->refresh();

        $response->assertRedirect(route('partner.index'));
        $response->assertSessionHas('partner.id', $partner->id);

        $this->assertEquals($name, $partner->name);
        $this->assertEquals($image, $partner->image);
        $this->assertEquals($publishStatus, $partner->publishStatus);
    }


    /**
     * @test
     */
    public function destroy_deletes_and_redirects()
    {
        $partner = Partner::factory()->create();

        $response = $this->delete(route('partner.destroy', $partner));

        $response->assertRedirect(route('partner.index'));

        $this->assertDeleted($partner);
    }
}
