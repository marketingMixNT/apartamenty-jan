<?php

namespace App\Observers;

use App\Models\Features;
use Illuminate\Support\Facades\Storage;

class FeatureObserver
{
    /**
     * Handle the Features "created" event.
     */
    public function created(Features $features): void
    {
        //
    }

    /**
     * Handle the Features "updated" event.
     */
    public function updated(Features $features): void
    {
        if ($features->isDirty('icon')) {
            Storage::disk('public')->delete($features->getOriginal('icon'));
        }
    }

    /**
     * Handle the Features "deleted" event.
     */
    public function deleted(Features $features): void
    {
        if (!is_null($features->icon)) {
            Storage::disk('public')->delete($features->getOriginal('icon'));
        }
    }

    /**
     * Handle the Features "restored" event.
     */
    public function restored(Features $features): void
    {
        //
    }

    /**
     * Handle the Features "force deleted" event.
     */
    public function forceDeleted(Features $features): void
    {
        //
    }
}
