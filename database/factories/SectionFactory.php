<?php

namespace Database\Factories;

use App\Models\Section;
use Illuminate\Database\Eloquent\Factories\Factory;

class SectionFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Section::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {     $name = $this->faker->text(30);
        return [
            'name' => $name,
            'slug' => $name,
            'number'   => rand(0,10),

            'course_id' => rand(0,20)
        ];
    }
}
