<?php

namespace App\Observers;

use App\Models\LocalAttraction;
use Illuminate\Support\Facades\Storage;

class LocalAttractionObserver
{
    /**
     * Handle the LocalAttraction "created" event.
     */
    public function created(LocalAttraction $localAttraction): void
    {
        //
    }

    /**
     * Handle the LocalAttraction "updated" event.
     */
    public function updated(LocalAttraction $localAttraction): void
    {
        if ($localAttraction->isDirty('images')) {
            Storage::disk('public')->delete($localAttraction->getOriginal('images'));
        }
    }

    /**
     * Handle the LocalAttraction "deleted" event.
     */
    public function deleted(LocalAttraction $localAttraction): void
    {
        if (!is_null($localAttraction->images)) {
            Storage::disk('public')->delete($localAttraction->getOriginal('images'));
        }
    }

    /**
     * Handle the LocalAttraction "restored" event.
     */
    public function restored(LocalAttraction $localAttraction): void
    {
        //
    }

    /**
     * Handle the LocalAttraction "force deleted" event.
     */
    public function forceDeleted(LocalAttraction $localAttraction): void
    {
        //
    }
}
