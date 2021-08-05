<?php

namespace Database\Factories;

use App\Models\Item;
use Illuminate\Database\Eloquent\Factories\Factory;

class ItemFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Item::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'pro_title' => $this->faker->name(),
            'price' => $this->faker->numberBetween(200,999),
            'seller_name' => $this->faker->name(),
            'seller_contact' => $this->faker->phoneNumber(),
            'image' => $this->faker->imageUrl(640,480),
            'address' => $this->faker->address(),
            'city' => $this->faker->city(),
            'description' => $this->faker->randomHtml(2,3),
            'category_id' => $this->faker->numberBetween(1,20)
            
        ];
    }
}
