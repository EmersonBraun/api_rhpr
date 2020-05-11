<?php

namespace App\Observers\v1;

use App\Models\v1\PrivateFunctionsPeriods;

class PrivateFunctionsPeriodsObserver
{
    /**
     * Handle the PrivateFunctionsPeriods "retrieved" event.
     * after a record has been retrieved
     *
     * @param  \App\Models\v1\PrivateFunctionsPeriods  $privateFunctionsPeriods
     * @return void
     */
    public function retrieved(PrivateFunctionsPeriods $privateFunctionsPeriods)
    {
        //
    }

    /**
     * Handle the PrivateFunctionsPeriods "creating" event.
     * before a record has been created
     *
     * @param  \App\Models\v1\PrivateFunctionsPeriods  $privateFunctionsPeriods
     * @return void
     */
    public function creating(PrivateFunctionsPeriods $privateFunctionsPeriods)
    {
        //
    }

    /**
     * Handle the PrivateFunctionsPeriods "created" event.
     * after a record has been created
     *
     * @param  \App\Models\v1\PrivateFunctionsPeriods  $privateFunctionsPeriods
     * @return void
     */
    public function created(PrivateFunctionsPeriods $privateFunctionsPeriods)
    {
        //
    }

    /**
     * Handle the PrivateFunctionsPeriods "updating" event.
     * before a record is updated
     *
     * @param  \App\Models\v1\PrivateFunctionsPeriods  $privateFunctionsPeriods
     * @return void
     */
    public function updating(PrivateFunctionsPeriods $privateFunctionsPeriods)
    {
        //
    }

    /**
     * Handle the PrivateFunctionsPeriods "updated" event.
     * after a record has been updated.
     *
     * @param  \App\Models\v1\PrivateFunctionsPeriods  $privateFunctionsPeriods
     * @return void
     */
    public function updated(PrivateFunctionsPeriods $privateFunctionsPeriods)
    {
        //
    }

    /**
     * Handle the PrivateFunctionsPeriods "saving" event.
     * before a record is saved (either created or updated)
     *
     * @param  \App\Models\v1\PrivateFunctionsPeriods  $privateFunctionsPeriods
     * @return void
     */
    public function saving(PrivateFunctionsPeriods $privateFunctionsPeriods)
    {
        //
    }

    /**
     * Handle the PrivateFunctionsPeriods "saved" event.
     * after a record has been saved (either created or updated).
     *
     * @param  \App\Models\v1\PrivateFunctionsPeriods  $privateFunctionsPeriods
     * @return void
     */
    public function saved(PrivateFunctionsPeriods $privateFunctionsPeriods)
    {
        //
    }

    /**
     * Handle the PrivateFunctionsPeriods "deleting" event.
     * before a record is deleted or soft-deleted.
     *
     * @param  \App\Models\v1\PrivateFunctionsPeriods  $privateFunctionsPeriods
     * @return void
     */
    public function deleting(PrivateFunctionsPeriods $privateFunctionsPeriods)
    {
        //
    }

    /**
     * Handle the PrivateFunctionsPeriods "deleted" event.
     * after a record has been deleted or soft-deleted.
     *
     * @param  \App\Models\v1\PrivateFunctionsPeriods  $privateFunctionsPeriods
     * @return void
     */
    public function deleted(PrivateFunctionsPeriods $privateFunctionsPeriods)
    {
        //
    }

    /**
     * Handle the PrivateFunctionsPeriods "restoring" event.
     * before a soft-deleted record is going to be restored.
     *
     * @param  \App\Models\v1\PrivateFunctionsPeriods  $privateFunctionsPeriods
     * @return void
     */
    public function restoring(PrivateFunctionsPeriods $privateFunctionsPeriods)
    {
        //
    }

    /**
     * Handle the PrivateFunctionsPeriods "restored" event.
     * after a soft-deleted record has been restored.
     *
     * @param  \App\Models\v1\PrivateFunctionsPeriods  $privateFunctionsPeriods
     * @return void
     */
    public function restored(PrivateFunctionsPeriods $privateFunctionsPeriods)
    {
        //
    }

    /**
     * Handle the post "force deleted" event.
     *
     * @param  \App\Models\v1\PrivateFunctionsPeriods  $privateFunctionsPeriods
     * @return void
     */
    public function forceDeleted(PrivateFunctionsPeriods $privateFunctionsPeriods)
    {
        //
    }
}
