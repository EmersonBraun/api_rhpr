<?php

namespace App\Observers\v1;

use App\Models\v1\Positions;

class PositionsObserver
{
    /**
     * Handle the Positions "retrieved" event.
     * after a record has been retrieved
     *
     * @param  \App\Models\v1\Positions  $positions
     * @return void
     */
    public function retrieved(Positions $positions)
    {
        //
    }

    /**
     * Handle the Positions "creating" event.
     * before a record has been created
     *
     * @param  \App\Models\v1\Positions  $positions
     * @return void
     */
    public function creating(Positions $positions)
    {
        //
    }

    /**
     * Handle the Positions "created" event.
     * after a record has been created
     *
     * @param  \App\Models\v1\Positions  $positions
     * @return void
     */
    public function created(Positions $positions)
    {
        //
    }

    /**
     * Handle the Positions "updating" event.
     * before a record is updated
     *
     * @param  \App\Models\v1\Positions  $positions
     * @return void
     */
    public function updating(Positions $positions)
    {
        //
    }

    /**
     * Handle the Positions "updated" event.
     * after a record has been updated.
     *
     * @param  \App\Models\v1\Positions  $positions
     * @return void
     */
    public function updated(Positions $positions)
    {
        //
    }

    /**
     * Handle the Positions "saving" event.
     * before a record is saved (either created or updated)
     *
     * @param  \App\Models\v1\Positions  $positions
     * @return void
     */
    public function saving(Positions $positions)
    {
        //
    }

    /**
     * Handle the Positions "saved" event.
     * after a record has been saved (either created or updated).
     *
     * @param  \App\Models\v1\Positions  $positions
     * @return void
     */
    public function saved(Positions $positions)
    {
        //
    }

    /**
     * Handle the Positions "deleting" event.
     * before a record is deleted or soft-deleted.
     *
     * @param  \App\Models\v1\Positions  $positions
     * @return void
     */
    public function deleting(Positions $positions)
    {
        //
    }

    /**
     * Handle the Positions "deleted" event.
     * after a record has been deleted or soft-deleted.
     *
     * @param  \App\Models\v1\Positions  $positions
     * @return void
     */
    public function deleted(Positions $positions)
    {
        //
    }

    /**
     * Handle the Positions "restoring" event.
     * before a soft-deleted record is going to be restored.
     *
     * @param  \App\Models\v1\Positions  $positions
     * @return void
     */
    public function restoring(Positions $positions)
    {
        //
    }

    /**
     * Handle the Positions "restored" event.
     * after a soft-deleted record has been restored.
     *
     * @param  \App\Models\v1\Positions  $positions
     * @return void
     */
    public function restored(Positions $positions)
    {
        //
    }

    /**
     * Handle the post "force deleted" event.
     *
     * @param  \App\Models\v1\Positions  $positions
     * @return void
     */
    public function forceDeleted(Positions $positions)
    {
        //
    }
}
