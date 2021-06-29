<?php

namespace Database\Factories;

use App\Models\CourseTag;
use App\Models\Model;
use Illuminate\Database\Eloquent\Factories\Factory;

class CourseTagFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = CourseTag::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'course_id' => rand(1,50),
            'tag_id' => rand(1,15),
        ];
    }
}
