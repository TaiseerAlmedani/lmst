<?php

namespace Database\Factories;

use App\Models\Course;
use Illuminate\Database\Eloquent\Factories\Factory;

class CourseFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Course::class;

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
            'course_img' => 'https://source.unsplash.com/random',
           'teacher_name' => $this->faker->text(30),
           'teacher_img'=> 'https://i.pinimg.com/474x/38/1e/c0/381ec006034984c22f0db62451b10e67.jpg',
           'price' => rand(10,2000),
           'description' => $this->faker->text(100),
           'rate' => rand(0,5),
           'category_id' => rand(1,15),
           'hours' => rand(1,40),
           'outline' => $this->faker->text(30),
        ];
    }
}
