<?php

namespace App\Observers;

use App\Models\Apartment;
use Illuminate\Support\Facades\Storage;

class ApartmentObserver
{
    /**
     * Handle the Apartment "created" event.
     */
    public function created(Apartment $apartment): void
    {
        //
    }

    /**
     * Handle the Apartment "updated" event.
     */
    public function updated(Apartment $apartment): void
    {
        if ($apartment->isDirty('thumbnail')) {
            Storage::disk('public')->delete($apartment->getOriginal('thumbnail'));
        }
        
    if ($apartment->isDirty('gallery')) {
        
        $originalGallery = $apartment->getOriginal('gallery');
        
     
        $currentGallery = $apartment->gallery; 

       
        $deletedImages = array_diff($originalGallery, $currentGallery);

       
        foreach ($deletedImages as $image) {
            Storage::disk('public')->delete($image);
        }
    }
    }

    /**
     * Handle the Apartment "deleted" event.
     */
    public function deleted(Apartment $apartment): void
    {
        if (!is_null($apartment->thumbnail)) {
            Storage::disk('public')->delete($apartment->getOriginal('thumbnail'));
        }
        if (!is_null($apartment->gallery)) {
            Storage::disk('public')->delete($apartment->getOriginal('gallery'));
        }
    }

    /**
     * Handle the Apartment "restored" event.
     */
    public function restored(Apartment $apartment): void
    {
        //
    }

    /**
     * Handle the Apartment "force deleted" event.
     */
    public function forceDeleted(Apartment $apartment): void
    {
        //
    }
}
