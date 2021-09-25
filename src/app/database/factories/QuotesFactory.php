<?php

namespace Database\Factories;

use App\Models\Quotes;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class QuotesFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Quotes::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->realText(100),
            'content' => $this->faker->text(random_int(255, 300)),
        ];
    }
}
