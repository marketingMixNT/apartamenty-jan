<?php

namespace App\Observers;

use App\Models\PageAttractions;
use Illuminate\Support\Facades\Storage;

class PageAttractionsObserver
{
    /**
     * Handle the PageAttractions "created" event.
     */
    public function created(PageAttractions $pageAttractions): void
    {
        //
    }

    /**
     * Handle the PageAttractions "updated" event.
     */
    public function updated(PageAttractions $pageAttractions): void
    {
        if ($pageAttractions->isDirty('banner')) {
            Storage::disk('public')->delete($pageAttractions->getOriginal('banner'));
        }
    }

    /**
     * Handle the PageAttractions "deleted" event.
     */
    public function deleted(PageAttractions $pageAttractions): void
    {
        if (!is_null($pageAttractions->banner)) {
            Storage::disk('public')->delete($pageAttractions->getOriginal('banner'));
        }
    }

    /**
     * Handle the PageAttractions "restored" event.
     */
    public function restored(PageAttractions $pageAttractions): void
    {
        //
    }

    /**
     * Handle the PageAttractions "force deleted" event.
     */
    public function forceDeleted(PageAttractions $pageAttractions): void
    {
        //
    }
}
