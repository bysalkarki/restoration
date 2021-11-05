<?php

namespace Tests\Feature\Http\Controllers;

use App\Models\Blog;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use JMac\Testing\Traits\AdditionalAssertions;
use Tests\TestCase;

/**
 * @see \App\Http\Controllers\BlogController
 */
class BlogControllerTest extends TestCase
{
    use AdditionalAssertions, RefreshDatabase, WithFaker;

    /**
     * @test
     */
    public function index_displays_view()
    {
        $blogs = Blog::factory()->count(3)->create();

        $response = $this->get(route('blog.index'));

        $response->assertOk();
        $response->assertViewIs('blog.index');
        $response->assertViewHas('blogs');
    }


    /**
     * @test
     */
    public function create_displays_view()
    {
        $response = $this->get(route('blog.create'));

        $response->assertOk();
        $response->assertViewIs('blog.create');
    }


    /**
     * @test
     */
    public function store_uses_form_request_validation()
    {
        $this->assertActionUsesFormRequest(
            \App\Http\Controllers\BlogController::class,
            'store',
            \App\Http\Requests\BlogStoreRequest::class
        );
    }

    /**
     * @test
     */
    public function store_saves_and_redirects()
    {
        $title = $this->faker->sentence(4);
        $description = $this->faker->text;
        $view = $this->faker->randomNumber();
        $slug = $this->faker->slug;
        $publishStatus = $this->faker->boolean;
        $image = $this->faker->word;

        $response = $this->post(route('blog.store'), [
            'title' => $title,
            'description' => $description,
            'view' => $view,
            'slug' => $slug,
            'publishStatus' => $publishStatus,
            'image' => $image,
        ]);

        $blogs = Blog::query()
            ->where('title', $title)
            ->where('description', $description)
            ->where('view', $view)
            ->where('slug', $slug)
            ->where('publishStatus', $publishStatus)
            ->where('image', $image)
            ->get();
        $this->assertCount(1, $blogs);
        $blog = $blogs->first();

        $response->assertRedirect(route('blog.index'));
        $response->assertSessionHas('blog.id', $blog->id);
    }


    /**
     * @test
     */
    public function show_displays_view()
    {
        $blog = Blog::factory()->create();

        $response = $this->get(route('blog.show', $blog));

        $response->assertOk();
        $response->assertViewIs('blog.show');
        $response->assertViewHas('blog');
    }


    /**
     * @test
     */
    public function edit_displays_view()
    {
        $blog = Blog::factory()->create();

        $response = $this->get(route('blog.edit', $blog));

        $response->assertOk();
        $response->assertViewIs('blog.edit');
        $response->assertViewHas('blog');
    }


    /**
     * @test
     */
    public function update_uses_form_request_validation()
    {
        $this->assertActionUsesFormRequest(
            \App\Http\Controllers\BlogController::class,
            'update',
            \App\Http\Requests\BlogUpdateRequest::class
        );
    }

    /**
     * @test
     */
    public function update_redirects()
    {
        $blog = Blog::factory()->create();
        $title = $this->faker->sentence(4);
        $description = $this->faker->text;
        $view = $this->faker->randomNumber();
        $slug = $this->faker->slug;
        $publishStatus = $this->faker->boolean;
        $image = $this->faker->word;

        $response = $this->put(route('blog.update', $blog), [
            'title' => $title,
            'description' => $description,
            'view' => $view,
            'slug' => $slug,
            'publishStatus' => $publishStatus,
            'image' => $image,
        ]);

        $blog->refresh();

        $response->assertRedirect(route('blog.index'));
        $response->assertSessionHas('blog.id', $blog->id);

        $this->assertEquals($title, $blog->title);
        $this->assertEquals($description, $blog->description);
        $this->assertEquals($view, $blog->view);
        $this->assertEquals($slug, $blog->slug);
        $this->assertEquals($publishStatus, $blog->publishStatus);
        $this->assertEquals($image, $blog->image);
    }


    /**
     * @test
     */
    public function destroy_deletes_and_redirects()
    {
        $blog = Blog::factory()->create();

        $response = $this->delete(route('blog.destroy', $blog));

        $response->assertRedirect(route('blog.index'));

        $this->assertDeleted($blog);
    }
}
