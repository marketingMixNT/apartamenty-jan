<?php

namespace App\Observers;

use App\Models\PageSafety;
use Illuminate\Support\Facades\Storage;

class PageSafetyObserver
{
    /**
     * Handle the PageSafety "created" event.
     */
    public function created(PageSafety $pageSafety): void
    {
        //
    }

    /**
     * Handle the PageSafety "updated" event.
     */
    public function updated(PageSafety $pageSafety): void
    {
        if ($pageSafety->isDirty('banner')) {
            Storage::disk('public')->delete($pageSafety->getOriginal('banner'));
        }
    }

    /**
     * Handle the PageSafety "deleted" event.
     */
    public function deleted(PageSafety $pageSafety): void
    {
        if (!is_null($pageSafety->banner)) {
            Storage::disk('public')->delete($pageSafety->getOriginal('banner'));
        }
    }

    /**
     * Handle the PageSafety "restored" event.
     */
    public function restored(PageSafety $pageSafety): void
    {
        //
    }

    /**
     * Handle the PageSafety "force deleted" event.
     */
    public function forceDeleted(PageSafety $pageSafety): void
    {
        //
    }
}
