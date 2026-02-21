<?php

namespace App\traits;

use App\Models\SiteSetting;
use Illuminate\Support\Facades\Storage;
use Symfony\Component\HttpFoundation\Request;

trait UploadTrait
{

    public function upload($file)
    {
        $originalName = $file->getClientOriginalName();
        $filename = time() . '_' . $originalName;
        return $file->storeAs('assets/images', $filename, 'public');
    }

    public function imageExist($image)
    {
        if (Storage::disk('public')->exists($image)) {
            Storage::disk('public')->delete($image);
        }
    }
}
