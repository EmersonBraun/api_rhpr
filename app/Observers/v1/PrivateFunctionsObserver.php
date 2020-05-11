<?php

namespace App\Observers\v1;

use App\Models\v1\PrivateFunctions;

class PrivateFunctionsObserver
{
    /**
     * Handle the PrivateFunctions "retrieved" event.
     * after a record has been retrieved
     *
     * @param  \App\Models\v1\PrivateFunctions  $privateFunctions
     * @return void
     */
    public function retrieved(PrivateFunctions $privateFunctions)
    {
        //
    }

    /**
     * Handle the PrivateFunctions "creating" event.
     * before a record has been created
     *
     * @param  \App\Models\v1\PrivateFunctions  $privateFunctions
     * @return void
     */
    public function creating(PrivateFunctions $privateFunctions)
    {
        //
    }

    /**
     * Handle the PrivateFunctions "created" event.
     * after a record has been created
     *
     * @param  \App\Models\v1\PrivateFunctions  $privateFunctions
     * @return void
     */
    public function created(PrivateFunctions $privateFunctions)
    {
        //
    }

    /**
     * Handle the PrivateFunctions "updating" event.
     * before a record is updated
     *
     * @param  \App\Models\v1\PrivateFunctions  $privateFunctions
     * @return void
     */
    public function updating(PrivateFunctions $privateFunctions)
    {
        //
    }

    /**
     * Handle the PrivateFunctions "updated" event.
     * after a record has been updated.
     *
     * @param  \App\Models\v1\PrivateFunctions  $privateFunctions
     * @return void
     */
    public function updated(PrivateFunctions $privateFunctions)
    {
        //
    }

    /**
     * Handle the PrivateFunctions "saving" event.
     * before a record is saved (either created or updated)
     *
     * @param  \App\Models\v1\PrivateFunctions  $privateFunctions
     * @return void
     */
    public function saving(PrivateFunctions $privateFunctions)
    {
        //
    }

    /**
     * Handle the PrivateFunctions "saved" event.
     * after a record has been saved (either created or updated).
     *
     * @param  \App\Models\v1\PrivateFunctions  $privateFunctions
     * @return void
     */
    public function saved(PrivateFunctions $privateFunctions)
    {
        //
    }

    /**
     * Handle the PrivateFunctions "deleting" event.
     * before a record is deleted or soft-deleted.
     *
     * @param  \App\Models\v1\PrivateFunctions  $privateFunctions
     * @return void
     */
    public function deleting(PrivateFunctions $privateFunctions)
    {
        //
    }

    /**
     * Handle the PrivateFunctions "deleted" event.
     * after a record has been deleted or soft-deleted.
     *
     * @param  \App\Models\v1\PrivateFunctions  $privateFunctions
     * @return void
     */
    public function deleted(PrivateFunctions $privateFunctions)
    {
        //
    }

    /**
     * Handle the PrivateFunctions "restoring" event.
     * before a soft-deleted record is going to be restored.
     *
     * @param  \App\Models\v1\PrivateFunctions  $privateFunctions
     * @return void
     */
    public function restoring(PrivateFunctions $privateFunctions)
    {
        //
    }

    /**
     * Handle the PrivateFunctions "restored" event.
     * after a soft-deleted record has been restored.
     *
     * @param  \App\Models\v1\PrivateFunctions  $privateFunctions
     * @return void
     */
    public function restored(PrivateFunctions $privateFunctions)
    {
        //
    }

    /**
     * Handle the post "force deleted" event.
     *
     * @param  \App\Models\v1\PrivateFunctions  $privateFunctions
     * @return void
     */
    public function forceDeleted(PrivateFunctions $privateFunctions)
    {
        //
    }
}
