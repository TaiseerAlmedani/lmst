<?php

namespace Database\Factories;

use App\Models\Profile;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProfileFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Profile::class;

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
            'picture' => $this->faker->text(50),
            'about' => $this->faker->text(100),
            'email' =>$name.'@gmail.com',
            'country' => $this->faker->text(30),
            'gender' => $this->faker->text(20),
            'education' => $this->faker->text(100),
            'phone' => rand(1,20),
            'birthday' => $this->faker->date($format = 'Y-m-d', $max = 'now'),
            'user_id' => rand(1,50),
        ];
    }
}
