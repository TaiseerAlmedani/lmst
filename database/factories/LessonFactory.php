<?php

namespace Database\Factories;

use App\Models\Lesson;
use Illuminate\Database\Eloquent\Factories\Factory;

class LessonFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Lesson::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {

            $name = $this->faker->text(30);
        return [
            'name' => $name,
            'slug' => $name,
            'type' => $this->faker->text(30),
            'section_id' => rand(0,20)
        ];
    }
}
