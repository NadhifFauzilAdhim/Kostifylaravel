<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Listing>
 */
class ListingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
          'category_id'=> fake()->numberBetween(1,3),
          'user_id'=> fake()->numberBetween(1,10),
          'placename' => 'Test Random Data',
          'forgender' => fake()->randomElement(['Putra','Putri']),
          'slug' =>fake()->slug(),
          'price' => fake()->randomNumber(6,true),
          'location' => fake()->streetAddress(),
          'region'=> fake()->city(),
          'available'=> fake()->randomDigitNot(2),
          'facility'=>'Pokonya ini tentang fasilitas dari kosan, Bisa milih, dapet apa aja, udah ah cape nulis panjang lebar'
          
        ];
    }
}
