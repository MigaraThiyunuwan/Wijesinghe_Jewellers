<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\File;

class ImageProcessingController extends Controller
{
    public function processImage(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'necklace_image' => 'required|string',
            'item_id' => 'required',
        ]);
        $item_id = $request->item_id;
        $necklace_image = $request->necklace_image;
        $image = $request->file('image');
        $filename = time() . '.' . $image->getClientOriginalExtension();
        $path = $image->storeAs('uploads', $filename, 'public');

       
        // Call the Python script to process the image
        $outputFilename = $this->addNecklaceToImage($path, $necklace_image);
        
        // Check if the outputFilename is null (indicating an error) or if the file does not exist
        if ($outputFilename === null || !File::exists(public_path('storage/' . $outputFilename))) {
            return view('shop.show_image', [
                'imagePath' => null,
                'path' => $path ,
                'item_id' => $item_id
            ])->with('error', 'The processed image could not be found or no face was detected.');
        }
        
        // Return the processed image path and the original uploaded image path to the view
        return view('shop.show_image', [
            'imagePath' => '/storage/' . $outputFilename,
            'path' => '/storage/' . $path ,
            'item_id' => $item_id
        ]);
    }

    private function addNecklaceToImage($imagePath, $necklace_image)
    {

        $batchFilePath = base_path('python_scripts/run_script.bat');
        // $necklaceImagePath = base_path('public/necklace5.png');
        $necklaceImagePath = base_path('public/storage/'.$necklace_image);
        $outputImagePath = 'uploads/processed_' . basename($imagePath);
        $outputPath = storage_path('app/public/' . $outputImagePath);
        
        $test = base_path('public/storage/'.$imagePath);
        
        // Escape and quote the paths to handle spaces and special characters
        $escapedBatchFilePath = escapeshellarg($batchFilePath);
        $escapedImagePath = escapeshellarg($test);
        $escapedNecklaceImagePath = escapeshellarg($necklaceImagePath);
        $escapedOutputPath = escapeshellarg($outputPath);


        $command = "$escapedBatchFilePath $escapedImagePath $escapedNecklaceImagePath $escapedOutputPath";

        $output = shell_exec($command);
        Log::info("output :". $output );
        // Return the output or indicate if no face was detected
        if (trim($output) === 'No face detected.') {
            return null;  // Return null to indicate an error
        }

        $fullOutputImagePath = public_path($outputImagePath);

        return $outputImagePath;
    }
}