<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\OtherObject;

class OtherObjectFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = OtherObject::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'title' => '{}',
            'description' => '{}',
            'thumbnail' => $this->faker->text(),
            'address' => $this->faker->text(),
            'mail' => $this->faker->text(),
            'phone' => $this->faker->phoneNumber(),
            'link' => $this->faker->text(),
            'sort' => $this->faker->numberBetween(-10000, 10000),
        ];
    }
}
