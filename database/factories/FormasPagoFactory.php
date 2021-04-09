<?php

namespace Database\Factories;

use App\Models\formaspago;
use Illuminate\Database\Eloquent\Factories\Factory;

class FormaspagoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = formaspago::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s'),
            'nombre' => $this->faker->randomElement(['Efectivo','credito','Debito']),
            'activo' => $this->faker->boolean,
        ];
    }
}