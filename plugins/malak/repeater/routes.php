<?php
use Illuminate\Support\Facades\Route;
use Malak\Repeater\Models\Slider;
use Media\Classes\MediaLibrary;

Route::get('slider/{slug}', function ($slug) {
    // Find the slider record by its slug column
    $slide = Slider::where('slug', $slug)->first();

    if (!$slide) {
        return response()->json(['error' => 'Not found'], 404);
    }

    // Process each repeater item just like before
    $items = collect($slide->repeater ?? [])->map(function ($item) {
        if (!empty($item['image']) && !str_starts_with($item['image'], 'http')) {
            $item['image'] = MediaLibrary::url($item['image']);
        }
        if (!empty($item['background']) && !str_starts_with($item['background'], 'http')) {
            $item['background'] = MediaLibrary::url($item['background']);
        }
        $item['description'] = strip_tags($item['description'] ?? '');
        return $item;
    })->toArray();

    return response()->json([
        'id'          => $slide->id,
        'slug'        => $slide->slug,
        'title'       => $slide->title,
        'description' => $slide->description,
        'repeater'    => $items,
    ]);
});
