<?php

namespace Database\Factories;

use App\Models\Blogpost;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class BlogpostFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Blogpost::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $random_word_length = rand(4, 10);
        
        $title   = $this->faker->words($random_word_length, true);
        $slug   = Str::slug($title);

        return [

            'title'             => $title,
            'slug'              => $slug,
            'tagline'           => $this->faker->sentence(2, true),
            'excerpt'           => $this->faker->sentence(6, true),
            
            'layout_type'       => "standard",
            'type'              => "standard",

            'meta_title'        => $this->faker->sentence(6, true),
            'meta_description'  => $this->faker->sentence(6, true),

            'content'           => $this->faker->sentence(30, true),
            
            'uuid'              => $this->faker->uuid(),
            
            'status'            => 1,
            'custom_slug'       => 1,
            
            'featured_image'    => 'assets/projects/placeholder-logo.png',

            'published_at'      => $this->faker->dateTime()
        ];
    }
}
