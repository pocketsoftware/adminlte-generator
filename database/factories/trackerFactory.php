<?php

namespace Database\Factories;

use App\Models\tracker;
use Illuminate\Database\Eloquent\Factories\Factory;

class trackerFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = tracker::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'project' => $this->faker->word,
        'email' => $this->faker->word,
        'verifyfile' => $this->faker->word,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
