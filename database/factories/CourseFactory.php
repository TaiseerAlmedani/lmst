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
            // 'course-img' => $this->faker->image('public/storage/images',640,480, null, false),
            'course_img' => $this->faker->text(50),
            'teacher_name' => $this->faker->text(30),
            'teacher_img'=> $this->faker->text(50),
            'price' => rand(0,2000),
            'description' => $this->faker->text(100),
            'rate' => rand(0,5),
            'category_id' => rand(0,20),
            'outline'    => $this->faker->text(50)
        ];
    }
}
