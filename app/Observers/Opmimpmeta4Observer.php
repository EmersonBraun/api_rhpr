<?php

namespace App\Observers;

use App\Models\Opmimpmeta4;

class Opmimpmeta4Observer
{
    /**
     * Handle the Opmimpmeta4 "retrieved" event.
     * after a record has been retrieved
     *
     * @param  \App\Models\Opmimpmeta4  $opmimpmeta4
     * @return void
     */
    public function retrieved(Opmimpmeta4 $opmimpmeta4)
    {
        //
    }

    /**
     * Handle the Opmimpmeta4 "creating" event.
     * before a record has been created
     *
     * @param  \App\Models\Opmimpmeta4  $opmimpmeta4
     * @return void
     */
    public function creating(Opmimpmeta4 $opmimpmeta4)
    {
        //
    }

    /**
     * Handle the Opmimpmeta4 "created" event.
     * after a record has been created
     *
     * @param  \App\Models\Opmimpmeta4  $opmimpmeta4
     * @return void
     */
    public function created(Opmimpmeta4 $opmimpmeta4)
    {
        //
    }

    /**
     * Handle the Opmimpmeta4 "updating" event.
     * before a record is updated
     *
     * @param  \App\Models\Opmimpmeta4  $opmimpmeta4
     * @return void
     */
    public function updating(Opmimpmeta4 $opmimpmeta4)
    {
        //
    }

    /**
     * Handle the Opmimpmeta4 "updated" event.
     * after a record has been updated.
     *
     * @param  \App\Models\Opmimpmeta4  $opmimpmeta4
     * @return void
     */
    public function updated(Opmimpmeta4 $opmimpmeta4)
    {
        //
    }

    /**
     * Handle the Opmimpmeta4 "saving" event.
     * before a record is saved (either created or updated)
     *
     * @param  \App\Models\Opmimpmeta4  $opmimpmeta4
     * @return void
     */
    public function saving(Opmimpmeta4 $opmimpmeta4)
    {
        //
    }

    /**
     * Handle the Opmimpmeta4 "saved" event.
     * after a record has been saved (either created or updated).
     *
     * @param  \App\Models\Opmimpmeta4  $opmimpmeta4
     * @return void
     */
    public function saved(Opmimpmeta4 $opmimpmeta4)
    {
        //
    }

    /**
     * Handle the Opmimpmeta4 "deleting" event.
     * before a record is deleted or soft-deleted.
     *
     * @param  \App\Models\Opmimpmeta4  $opmimpmeta4
     * @return void
     */
    public function deleting(Opmimpmeta4 $opmimpmeta4)
    {
        //
    }

    /**
     * Handle the Opmimpmeta4 "deleted" event.
     * after a record has been deleted or soft-deleted.
     *
     * @param  \App\Models\Opmimpmeta4  $opmimpmeta4
     * @return void
     */
    public function deleted(Opmimpmeta4 $opmimpmeta4)
    {
        //
    }

    /**
     * Handle the Opmimpmeta4 "restoring" event.
     * before a soft-deleted record is going to be restored.
     *
     * @param  \App\Models\Opmimpmeta4  $opmimpmeta4
     * @return void
     */
    public function restoring(Opmimpmeta4 $opmimpmeta4)
    {
        //
    }

    /**
     * Handle the Opmimpmeta4 "restored" event.
     * after a soft-deleted record has been restored.
     *
     * @param  \App\Models\Opmimpmeta4  $opmimpmeta4
     * @return void
     */
    public function restored(Opmimpmeta4 $opmimpmeta4)
    {
        //
    }

    /**
     * Handle the post "force deleted" event.
     *
     * @param  \App\Models\Opmimpmeta4  $opmimpmeta4
     * @return void
     */
    public function forceDeleted(Opmimpmeta4 $opmimpmeta4)
    {
        //
    }
}

/*
Add this lines in App\Providers\AppServiceProvider :
in top:
... namespace App\Providers

use App\Models\Opmimpmeta4;
use App\Observers\Opmimpmeta4Observer;

... class AppServiceProvider ...

in boot function:
... public function boot()

    Opmimpmeta4::observe(Opmimpmeta4Observer::class);

... }

