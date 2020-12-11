<?php

namespace Database\Factories;

use App\Models\orders;
use Illuminate\Database\Eloquent\Factories\Factory;

class ordersFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = orders::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'companyName' => $this->faker->word,
        'referenceName' => $this->faker->randomDigitNotNull,
        'projectName' => $this->faker->word,
        'address' => $this->faker->word,
        'zipcode' => $this->faker->word,
        'city' => $this->faker->word,
        'province' => $this->faker->word,
        'country' => $this->faker->word,
        'minimunNumberImages' => $this->faker->randomDigitNotNull,
        'checklist' => $this->faker->word,
        'comments' => $this->faker->word,
        'contributor' => $this->faker->randomDigitNotNull,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
