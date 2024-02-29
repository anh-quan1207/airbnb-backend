<?php

namespace Database\Factories;

use App\Models\Location;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Room>
 */
class RoomFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $imageUrls = [
            "https://images.unsplash.com/photo-1560185127-1e3f2a5e8a0a",  # Hotel Room
            "https://images.unsplash.com/photo-1582719478250-c89cae4dc85b",  # Hotel Lobby
            "https://images.unsplash.com/photo-1521782462922-9318be1cfd04",  # Hotel Exterior
            "https://images.unsplash.com/photo-1519710164239-da123dc03ef4",  # Hotel Pool
            "https://images.unsplash.com/photo-1590490360182-c33d57733427",  # Hotel Bed
            "https://images.unsplash.com/photo-1542314831-068cd1dbfeeb",  # Luxury Hotel
            "https://images.unsplash.com/photo-1576675784201-0e142b423952",  # Classic Hotel Room
            "https://images.unsplash.com/photo-1522708323590-d24dbb6b0267",  # Hotel Breakfast
            "https://images.unsplash.com/photo-1583416750470-965b2707b355",  # Modern Hotel Room
            "https://images.unsplash.com/photo-1512917774080-9991f1c4c750"   # Hotel View
        ];
        $location = Location::inRandomOrder()->first();

        return [
            'room_name' => substr($this->faker->text, 0, rand(3, 7)),
            'location_id' => $location->id,
            'guest' => $this->faker->numberBetween(1, 5),
            'bed_room' => $this->faker->numberBetween(1, 5),
            'bath_room' => $this->faker->numberBetween(1, 3),
            'description' => $this->faker->paragraph,
            'price' => $this->faker->numberBetween(300, 5000),
            'projector_or_tv' => $this->faker->boolean,
            'pool' => $this->faker->boolean,
            'image' => $this->faker->unique()->randomElement($imageUrls),
        ];
    }
}
