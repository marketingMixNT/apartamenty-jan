<?php

namespace App\Observers;

use App\Models\PageOtherObjects;
use Illuminate\Support\Facades\Storage;

class PageOtherObjectsObserver
{
    /**
     * Handle the PageOtherObjects "created" event.
     */
    public function created(PageOtherObjects $pageOtherObjects): void
    {
        //
    }

    /**
     * Handle the PageOtherObjects "updated" event.
     */
    public function updated(PageOtherObjects $pageOtherObjects): void
    {
        if ($pageOtherObjects->isDirty('banner')) {
            Storage::disk('public')->delete($pageOtherObjects->getOriginal('banner'));
        }
    }

    /**
     * Handle the PageOtherObjects "deleted" event.
     */
    public function deleted(PageOtherObjects $pageOtherObjects): void
    {
         if (!is_null($pageOtherObjects->banner)) {
            Storage::disk('public')->delete($pageOtherObjects->getOriginal('banner'));
        }
    }

    /**
     * Handle the PageOtherObjects "restored" event.
     */
    public function restored(PageOtherObjects $pageOtherObjects): void
    {
        //
    }

    /**
     * Handle the PageOtherObjects "force deleted" event.
     */
    public function forceDeleted(PageOtherObjects $pageOtherObjects): void
    {
        //
    }
}
