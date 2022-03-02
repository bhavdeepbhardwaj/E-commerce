<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class BannerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'seq'             => $this->faker->numberBetween(1,10),
            'type'            => $this->faker->randomElement(['Home','Product','Promo']),
            'url'             => $this->faker->url(),
            'slug'            => $this->faker->slug(),
            'webImage'        => $this->faker->imageUrl(1920,720),
            'mobImage'        => $this->faker->imageUrl(350,600),
            'status'          => $this->faker->randomElement(['active','inactive']),
            'startDate'       => $this->faker->date(),
            'endDate'         => $this->faker->date(),
            'title'           => $this->faker->text(10),
            'description'     => $this->faker->text(50),
        ];
    }
}
