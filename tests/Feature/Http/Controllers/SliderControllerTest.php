<?php

namespace Tests\Feature\Http\Controllers;

use App\Models\Slider;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use JMac\Testing\Traits\AdditionalAssertions;
use Tests\TestCase;

/**
 * @see \App\Http\Controllers\SliderController
 */
class SliderControllerTest extends TestCase
{
    use AdditionalAssertions, RefreshDatabase, WithFaker;

    /**
     * @test
     */
    public function index_displays_view()
    {
        $sliders = Slider::factory()->count(3)->create();

        $response = $this->get(route('slider.index'));

        $response->assertOk();
        $response->assertViewIs('slider.index');
        $response->assertViewHas('sliders');
    }


    /**
     * @test
     */
    public function create_displays_view()
    {
        $response = $this->get(route('slider.create'));

        $response->assertOk();
        $response->assertViewIs('slider.create');
    }


    /**
     * @test
     */
    public function store_uses_form_request_validation()
    {
        $this->assertActionUsesFormRequest(
            \App\Http\Controllers\SliderController::class,
            'store',
            \App\Http\Requests\SliderStoreRequest::class
        );
    }

    /**
     * @test
     */
    public function store_saves_and_redirects()
    {
        $title = $this->faker->sentence(4);
        $description = $this->faker->text;
        $publishStatus = $this->faker->boolean;
        $position = $this->faker->randomNumber();
        $image = $this->faker->word;

        $response = $this->post(route('slider.store'), [
            'title' => $title,
            'description' => $description,
            'publishStatus' => $publishStatus,
            'position' => $position,
            'image' => $image,
        ]);

        $sliders = Slider::query()
            ->where('title', $title)
            ->where('description', $description)
            ->where('publishStatus', $publishStatus)
            ->where('position', $position)
            ->where('image', $image)
            ->get();
        $this->assertCount(1, $sliders);
        $slider = $sliders->first();

        $response->assertRedirect(route('slider.index'));
        $response->assertSessionHas('slider.id', $slider->id);
    }


    /**
     * @test
     */
    public function show_displays_view()
    {
        $slider = Slider::factory()->create();

        $response = $this->get(route('slider.show', $slider));

        $response->assertOk();
        $response->assertViewIs('slider.show');
        $response->assertViewHas('slider');
    }


    /**
     * @test
     */
    public function edit_displays_view()
    {
        $slider = Slider::factory()->create();

        $response = $this->get(route('slider.edit', $slider));

        $response->assertOk();
        $response->assertViewIs('slider.edit');
        $response->assertViewHas('slider');
    }


    /**
     * @test
     */
    public function update_uses_form_request_validation()
    {
        $this->assertActionUsesFormRequest(
            \App\Http\Controllers\SliderController::class,
            'update',
            \App\Http\Requests\SliderUpdateRequest::class
        );
    }

    /**
     * @test
     */
    public function update_redirects()
    {
        $slider = Slider::factory()->create();
        $title = $this->faker->sentence(4);
        $description = $this->faker->text;
        $publishStatus = $this->faker->boolean;
        $position = $this->faker->randomNumber();
        $image = $this->faker->word;

        $response = $this->put(route('slider.update', $slider), [
            'title' => $title,
            'description' => $description,
            'publishStatus' => $publishStatus,
            'position' => $position,
            'image' => $image,
        ]);

        $slider->refresh();

        $response->assertRedirect(route('slider.index'));
        $response->assertSessionHas('slider.id', $slider->id);

        $this->assertEquals($title, $slider->title);
        $this->assertEquals($description, $slider->description);
        $this->assertEquals($publishStatus, $slider->publishStatus);
        $this->assertEquals($position, $slider->position);
        $this->assertEquals($image, $slider->image);
    }


    /**
     * @test
     */
    public function destroy_deletes_and_redirects()
    {
        $slider = Slider::factory()->create();

        $response = $this->delete(route('slider.destroy', $slider));

        $response->assertRedirect(route('slider.index'));

        $this->assertDeleted($slider);
    }
}
