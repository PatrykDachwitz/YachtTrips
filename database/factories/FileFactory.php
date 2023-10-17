<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\File>
 */
class FileFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    private function getPreviewFile() {
        $preview = [
            '/file_preview/docx.png',
            '/file_preview/svg.png',
            '/file_preview/php.png',
            '/file_preview/png.png',
            '/file_preview/tiff.png',
            '/file_preview/wav.png',
            '/file_preview/zip.png',
        ];
        return $preview[array_rand($preview)];
    }

    public function definition(): array
    {
        return [
            "name" => fake()->name() . "." . fake()->fileExtension(),
            "extension" => fake()->fileExtension(),
            'path' => fake()->filePath(),
            'preview_path' => $this->getPreviewFile(),
            'size' => rand(1024, 5024),
            'author_id' => rand(1, 12),
            'mime' => fake()->mimeType(),
            'folder_id' => rand(1, 3)
        ];
    }
}
