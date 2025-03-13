<?php

namespace App\Services;

use Illuminate\Support\Facades\File;
use Intervention\Image\ImageManager;

class Thumbnail
{
    protected static $imageManager;

    // Ensure the ImageManager instance is created only once when called statically
    protected static function imageManager()
    {
        if (self::$imageManager === null) {
            self::$imageManager =  ImageManager::gd();
        }

        return self::$imageManager;
    }

    // Static method to generate thumbnails and folders
    public static function generate($rootFolder, $filename, $sizes = [150, 300])
    {
        // Ensure directories exist within the root folder
        self::ensureDirectories($rootFolder, $sizes);

        // Generate and save thumbnails for each size
        foreach ($sizes as $size) {
            self::createThumbnail($rootFolder, $filename, $size);
        }
    }

    // Dynamically create directories inside the root folder

    protected static function ensureDirectories($rootFolder, $sizes)
    {
        foreach ($sizes as $size) {
            $directory = "{$rootFolder}/{$size}x{$size}";

            if (!File::exists($directory)) {
                File::makeDirectory($directory, 0755, true);
            }
        }
    }


    // Create and save thumbnails for the given root folder and filename
    protected static function createThumbnail($rootFolder, $filename, $size)
    {
        $originalImagePath = "$rootFolder/$filename";

        // Check if the original image exists before creating a thumbnail
        if (File::exists($originalImagePath)) {
            // Create ImageManager instance
            $image = self::imageManager()->read($originalImagePath);

            // Resize and save the thumbnail
            $image->resize($size, $size);
            $thumbnailDirectory = "{$rootFolder}/{$size}x{$size}";
            $image->save("{$thumbnailDirectory}/$filename");
        }
    }
}





            // if (File::exists($originalImagePath)) {
            //     // Ensure directories exist
            //     File::ensureDirectoryExists(storage_path("app/public/products/150x150"), 0755, true);
            //     File::ensureDirectoryExists(storage_path("app/public/products/300x300"), 0755, true);

            //     // Create ImageManager instance
            //     $manager = ImageManager::gd();
            //     $thumbnail_150 = $manager->read($originalImagePath);
            //     $thumbnail_300 = $manager->read($originalImagePath);

            //     // Generate and save thumbnails
            //     $thumbnail_150->resize(150, 150)->save(storage_path("app/public/products/150x150/$filename"));
            //     $thumbnail_300->resize(300, 300)->save(storage_path("app/public/products/300x300/$filename"));
            // }