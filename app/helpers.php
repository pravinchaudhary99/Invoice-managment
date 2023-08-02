<?php

use Carbon\Carbon;
use Illuminate\Support\Facades\File;

function storeImageFile($requestFile) :string {
    $image = $requestFile;
    $imageName = time().'.'.$image->extension();
    if(!File::isDirectory(public_path('uploads'))){
        File::makeDirectory(public_path('uploads'), 0777, true, true);
    }
    $image -> move(public_path('uploads'), $imageName);
    $fullFilePath = 'uploads/'. $imageName;
    dd($fullFilePath);
    return $fullFilePath;
}