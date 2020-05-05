<?php

namespace App\Observers;

use App\Models\Opmmeta4;

class Opmmeta4Observer
{
    /**
     * Handle the Opmmeta4 "retrieved" event.
     * after a record has been retrieved
     *
     * @param  \App\Models\Opmmeta4  $opmmeta4
     * @return void
     */
    public function retrieved(Opmmeta4 $opmmeta4)
    {
        //
    }

    /**
     * Handle the Opmmeta4 "creating" event.
     * before a record has been created
     *
     * @param  \App\Models\Opmmeta4  $opmmeta4
     * @return void
     */
    public function creating(Opmmeta4 $opmmeta4)
    {
        //
    }

    /**
     * Handle the Opmmeta4 "created" event.
     * after a record has been created
     *
     * @param  \App\Models\Opmmeta4  $opmmeta4
     * @return void
     */
    public function created(Opmmeta4 $opmmeta4)
    {
        //
    }

    /**
     * Handle the Opmmeta4 "updating" event.
     * before a record is updated
     *
     * @param  \App\Models\Opmmeta4  $opmmeta4
     * @return void
     */
    public function updating(Opmmeta4 $opmmeta4)
    {
        //
    }

    /**
     * Handle the Opmmeta4 "updated" event.
     * after a record has been updated.
     *
     * @param  \App\Models\Opmmeta4  $opmmeta4
     * @return void
     */
    public function updated(Opmmeta4 $opmmeta4)
    {
        //
    }

    /**
     * Handle the Opmmeta4 "saving" event.
     * before a record is saved (either created or updated)
     *
     * @param  \App\Models\Opmmeta4  $opmmeta4
     * @return void
     */
    public function saving(Opmmeta4 $opmmeta4)
    {
        //
    }

    /**
     * Handle the Opmmeta4 "saved" event.
     * after a record has been saved (either created or updated).
     *
     * @param  \App\Models\Opmmeta4  $opmmeta4
     * @return void
     */
    public function saved(Opmmeta4 $opmmeta4)
    {
        //
    }

    /**
     * Handle the Opmmeta4 "deleting" event.
     * before a record is deleted or soft-deleted.
     *
     * @param  \App\Models\Opmmeta4  $opmmeta4
     * @return void
     */
    public function deleting(Opmmeta4 $opmmeta4)
    {
        //
    }

    /**
     * Handle the Opmmeta4 "deleted" event.
     * after a record has been deleted or soft-deleted.
     *
     * @param  \App\Models\Opmmeta4  $opmmeta4
     * @return void
     */
    public function deleted(Opmmeta4 $opmmeta4)
    {
        //
    }

    /**
     * Handle the Opmmeta4 "restoring" event.
     * before a soft-deleted record is going to be restored.
     *
     * @param  \App\Models\Opmmeta4  $opmmeta4
     * @return void
     */
    public function restoring(Opmmeta4 $opmmeta4)
    {
        //
    }

    /**
     * Handle the Opmmeta4 "restored" event.
     * after a soft-deleted record has been restored.
     *
     * @param  \App\Models\Opmmeta4  $opmmeta4
     * @return void
     */
    public function restored(Opmmeta4 $opmmeta4)
    {
        //
    }

    /**
     * Handle the post "force deleted" event.
     *
     * @param  \App\Models\Opmmeta4  $opmmeta4
     * @return void
     */
    public function forceDeleted(Opmmeta4 $opmmeta4)
    {
        //
    }
}

/*
Add this lines in App\Providers\AppServiceProvider :
in top:
... namespace App\Providers

use App\Models\Opmmeta4;
use App\Observers\Opmmeta4Observer;

... class AppServiceProvider ...

in boot function:
... public function boot()

    Opmmeta4::observe(Opmmeta4Observer::class);

... }

