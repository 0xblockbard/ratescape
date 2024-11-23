<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

use Hash;
use App\Traits\HelpersTrait;

class UserFactory extends Factory
{
    use HelpersTrait;

    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = User::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $uuid = $this->generatePseudoUUID(12);;

        return [
            'name'              => $this->faker->name,
            'email'             => $this->faker->unique()->safeEmail,
            'password'          => Hash::make(Str::random(10)),
            'email_verified_at' => now(),
            'remember_token'    => Str::random(10),
            'uuid'              => $uuid
        ];
    }
}
