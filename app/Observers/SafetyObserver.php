<?php

namespace App\Observers;

use App\Models\Safety;
use Illuminate\Support\Facades\Storage;

class SafetyObserver
{
    /**
     * Handle the Safety "created" event.
     */
    public function created(Safety $safety): void
    {
        //
    }

    /**
     * Handle the Safety "updated" event.
     */
    public function updated(Safety $safety): void
    {
        if ($safety->isDirty('image')) {
            Storage::disk('public')->delete($safety->getOriginal('image'));
        }
    }

    /**
     * Handle the Safety "deleted" event.
     */
    public function deleted(Safety $safety): void
    {
        if (!is_null($safety->image)) {
            Storage::disk('public')->delete($safety->getOriginal('image'));
        }
    }

    /**
     * Handle the Safety "restored" event.
     */
    public function restored(Safety $safety): void
    {
        //
    }

    /**
     * Handle the Safety "force deleted" event.
     */
    public function forceDeleted(Safety $safety): void
    {
        //
    }
}
