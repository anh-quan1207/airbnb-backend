<?php

namespace Database\Factories;
use App\Models\Province;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Location>
 */
class LocationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $locations = [
            'Chùa Bái Đính', 'Bà Nà Hills', 'Sầm Sơn', 'Hạ Long', 'Cửa Lò',
            'Sapa', 'Hội An', 'Phong Nha', 'Biển Nha Trang', 'Phú Quốc',
        ];
        $province = Province::inRandomOrder()->first();

        return [
            'province_id' => $province->id,
            'location_name' => $this->faker->unique()->randomElement($locations),
        ];
    }
}
