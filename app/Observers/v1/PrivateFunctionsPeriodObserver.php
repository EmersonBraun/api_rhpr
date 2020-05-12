<?php

namespace App\Observers\v1;

use App\Models\v1\PrivateFunctionsPeriod;

class PrivateFunctionsPeriodObserver
{
    /**
     * Handle the PrivateFunctionsPeriod "retrieved" event.
     * after a record has been retrieved
     *
     * @param  \App\Models\v1\PrivateFunctionsPeriod  $PrivateFunctionsPeriod
     * @return void
     */
    public function retrieved(PrivateFunctionsPeriod $PrivateFunctionsPeriod)
    {
        //
    }

    /**
     * Handle the PrivateFunctionsPeriod "creating" event.
     * before a record has been created
     *
     * @param  \App\Models\v1\PrivateFunctionsPeriod  $PrivateFunctionsPeriod
     * @return void
     */
    public function creating(PrivateFunctionsPeriod $PrivateFunctionsPeriod)
    {
        //
    }

    /**
     * Handle the PrivateFunctionsPeriod "created" event.
     * after a record has been created
     *
     * @param  \App\Models\v1\PrivateFunctionsPeriod  $PrivateFunctionsPeriod
     * @return void
     */
    public function created(PrivateFunctionsPeriod $PrivateFunctionsPeriod)
    {
        //
    }

    /**
     * Handle the PrivateFunctionsPeriod "updating" event.
     * before a record is updated
     *
     * @param  \App\Models\v1\PrivateFunctionsPeriod  $PrivateFunctionsPeriod
     * @return void
     */
    public function updating(PrivateFunctionsPeriod $PrivateFunctionsPeriod)
    {
        //
    }

    /**
     * Handle the PrivateFunctionsPeriod "updated" event.
     * after a record has been updated.
     *
     * @param  \App\Models\v1\PrivateFunctionsPeriod  $PrivateFunctionsPeriod
     * @return void
     */
    public function updated(PrivateFunctionsPeriod $PrivateFunctionsPeriod)
    {
        //
    }

    /**
     * Handle the PrivateFunctionsPeriod "saving" event.
     * before a record is saved (either created or updated)
     *
     * @param  \App\Models\v1\PrivateFunctionsPeriod  $PrivateFunctionsPeriod
     * @return void
     */
    public function saving(PrivateFunctionsPeriod $PrivateFunctionsPeriod)
    {
        //
    }

    /**
     * Handle the PrivateFunctionsPeriod "saved" event.
     * after a record has been saved (either created or updated).
     *
     * @param  \App\Models\v1\PrivateFunctionsPeriod  $PrivateFunctionsPeriod
     * @return void
     */
    public function saved(PrivateFunctionsPeriod $PrivateFunctionsPeriod)
    {
        //
    }

    /**
     * Handle the PrivateFunctionsPeriod "deleting" event.
     * before a record is deleted or soft-deleted.
     *
     * @param  \App\Models\v1\PrivateFunctionsPeriod  $PrivateFunctionsPeriod
     * @return void
     */
    public function deleting(PrivateFunctionsPeriod $PrivateFunctionsPeriod)
    {
        //
    }

    /**
     * Handle the PrivateFunctionsPeriod "deleted" event.
     * after a record has been deleted or soft-deleted.
     *
     * @param  \App\Models\v1\PrivateFunctionsPeriod  $PrivateFunctionsPeriod
     * @return void
     */
    public function deleted(PrivateFunctionsPeriod $PrivateFunctionsPeriod)
    {
        //
    }

    /**
     * Handle the PrivateFunctionsPeriod "restoring" event.
     * before a soft-deleted record is going to be restored.
     *
     * @param  \App\Models\v1\PrivateFunctionsPeriod  $PrivateFunctionsPeriod
     * @return void
     */
    public function restoring(PrivateFunctionsPeriod $PrivateFunctionsPeriod)
    {
        //
    }

    /**
     * Handle the PrivateFunctionsPeriod "restored" event.
     * after a soft-deleted record has been restored.
     *
     * @param  \App\Models\v1\PrivateFunctionsPeriod  $PrivateFunctionsPeriod
     * @return void
     */
    public function restored(PrivateFunctionsPeriod $PrivateFunctionsPeriod)
    {
        //
    }

    /**
     * Handle the post "force deleted" event.
     *
     * @param  \App\Models\v1\PrivateFunctionsPeriod  $PrivateFunctionsPeriod
     * @return void
     */
    public function forceDeleted(PrivateFunctionsPeriod $PrivateFunctionsPeriod)
    {
        //
    }
}
