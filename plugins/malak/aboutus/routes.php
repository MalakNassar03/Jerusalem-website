<?php

use Illuminate\Support\Facades\Route;
use Carbon\Carbon;

use malak\aboutus\models\AboutUs;

Route::get('about-us', function () {
    $about = AboutUs::with('Image')->first();

    if (!$about) {
        return response()->json(['about' => null], 404);
    }

    $formattedDate = Carbon::parse($about->date)
                           ->format('j F, Y');

    $file = $about->Image;
    $p2 = preg_replace('~</?pre[^>]*>~i', '', $about->paragraph2);


    return response()->json([
        'about' => [
            'title'       => $about->title,
            'link'        => $about->link,
            'date'        => $formattedDate,
            'paragraph1'  => $about->paragraph1,
            'paragraph2'  => $p2,
            'image_url'   => $file ? $file->getPath() : null,
        ],
    ]);
});
