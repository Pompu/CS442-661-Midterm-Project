<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Event>
 */
class EventFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->realText($maxNbChars = 50),
            'detail' => fake()->sentence(10),
            'address' => str_replace("\n", ' ', fake()->address),
            'province' => fake()->state(),
            'district' => fake()->city(),
            'subdistrict' => fake()->streetName(),
            'location_detail' => fake()->sentence(),
            'dateTime' => fake()->dateTimeBetween('-1 years', '+1 years'),
            'image_path' => "https://s3-ap-southeast-1.amazonaws.com/tm-img-poster-event/897834403ad711ee911101117567899b.jpg?opt=mild&resize=w200,h290"
        ];
    }
}
