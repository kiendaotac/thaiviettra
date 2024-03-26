<?php

namespace Database\Factories;

use App\Models\Address;
use Illuminate\Database\Eloquent\Factories\Factory;

class AddressFactory extends Factory
{
    protected $model = Address::class;

    public function definition(): array
    {
        return [
            'country' => 'VN',
            'street' => 'Láng Hạ',
            'state' => 'Ba Đình',
            'city' => 'Hà Nội',
            'zip' => 10000,
        ];
//        return [
//            'country' => strtolower($this->faker->countryCode()),
//            'street' => $this->faker->streetAddress(),
//            'state' => $this->faker->state(),
//            'city' => $this->faker->city(),
//            'zip' => $this->faker->postcode(),
//        ];
    }
}
