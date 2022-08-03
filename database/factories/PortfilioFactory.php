<?php

namespace Database\Factories;

use App\Models\Model;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class PortfilioFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Model::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $title = $this->faker->name();
        return [
            
            'category_id' => $this->faker->name(),
            'portfolio_name' => $title,
            'slug' => Str::slug($title),
            'portfolio_description' => $this->faker->name(),
            'portfolio_picture' => 'portfolio/default.jpg',

        ];
      
    }
}
