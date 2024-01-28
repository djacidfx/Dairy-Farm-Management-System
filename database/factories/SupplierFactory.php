<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class SupplierFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'supplier_name' => $this->faker->name,
            'supplier_phone' => $this->faker->phoneNumber,
            'supplier_address' => $this->faker->address,
        ];
    }
}
