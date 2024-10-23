<?php

namespace App\Observers;

use App\Models\OtherObject;
use Illuminate\Support\Facades\Storage;

class OtherObjectObserver
{
    /**
     * Handle the OtherObject "created" event.
     */
    public function created(OtherObject $otherObject): void
    {
        //
    }

    /**
     * Handle the OtherObject "updated" event.
     */
    public function updated(OtherObject $otherObject): void
    {
        if ($otherObject->isDirty('thumbnail')) {
            Storage::disk('public')->delete($otherObject->getOriginal('thumbnail'));
        }
    }

    /**
     * Handle the OtherObject "deleted" event.
     */
    public function deleted(OtherObject $otherObject): void
    {
        if (!is_null($otherObject->thumbnail)) {
            Storage::disk('public')->delete($otherObject->getOriginal('thumbnail'));
        }
    }

    /**
     * Handle the OtherObject "restored" event.
     */
    public function restored(OtherObject $otherObject): void
    {
        //
    }

    /**
     * Handle the OtherObject "force deleted" event.
     */
    public function forceDeleted(OtherObject $otherObject): void
    {
        //
    }
}
