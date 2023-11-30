<?php
declare(strict_types=1);
namespace App\Services\images;

trait ConvertRequestToPivotData
{
    public function getConvertImages(array $images) {
        $imagesCustom = [];

        for ($i = 0; $i < count($images['*']['devices']); $i++) {
            $imagesCustom[$i] = [
                "file_id" => $images['*']['id'][$i],
                "device" => $images['*']['devices'][$i],
            ];
        }

        return $imagesCustom;
    }

}
