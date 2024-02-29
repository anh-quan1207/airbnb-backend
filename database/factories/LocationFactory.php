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
            'Hà Nội', 'Hồ Chí Minh', 'Đà Nẵng', 'Hạ Long', 'Huế',
            'Sapa', 'Hội An', 'Phong Nha', 'Nha Trang', 'Đà Lạt',
        ];
        $province = Province::inRandomOrder()->first();

        return [
            'province_id' => $province->id,
            'location_name' => $this->faker->unique()->randomElement($locations),
        ];
    }
}
