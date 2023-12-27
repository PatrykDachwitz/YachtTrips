<?php

namespace Database\Seeders;

use App\Models\Trip;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GalleryTripSeeder extends Seeder
{
    const COUNT_IMAGES_GALLERY = 6;
    /**
     * Run the database seeds.
     */

    private function getRandomImages() {
        $images = (DB::table('files')
            ->select('id')
            ->where('folder_id', 5)
            ->get())->toArray();

        $currentGallery = [];

        for ($i = 1 ; $i <= self::COUNT_IMAGES_GALLERY; $i++) {
            $positionRandomImage = array_rand($images);

            $currentGallery[] = $images[$positionRandomImage]->id;
            unset($images[$positionRandomImage]);
        }

        return $currentGallery;
    }

    public function run(Trip $trips): void
    {


        foreach ($trips
                     ->with('images')
                     ->get() as $trip) {
            $images = $this->getRandomImages();
            foreach ($images as $key => $image) {
                $trip->images()->attach($image, [
                    'position' => ($key + 1),
                    'default' => 0,
                ]);
            }

        }
    }
}
