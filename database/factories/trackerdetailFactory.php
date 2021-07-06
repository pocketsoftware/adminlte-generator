<?php

namespace Database\Factories;

use App\Models\trackerdetail;
use Illuminate\Database\Eloquent\Factories\Factory;

class trackerdetailFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = trackerdetail::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'OC' => $this->faker->word,
        'fullname' => $this->faker->word,
        'deladdr' => $this->faker->word,
        'CSZ' => $this->faker->word,
        'intelligentmailbarcode' => $this->faker->word,
        'cardnumberwcheck' => $this->faker->word,
        'type' => $this->faker->word,
        'serialnumber' => $this->faker->word,
        'imbalpha' => $this->faker->word,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
