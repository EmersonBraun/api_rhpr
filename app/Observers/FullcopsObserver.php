<?php

namespace App\Observers;

use App\Models\Fullcops;

class FullcopsObserver
{
    /**
     * Handle the Fullcops "retrieved" event.
     * after a record has been retrieved
     *
     * @param  \App\Models\Fullcops  $fullcops
     * @return void
     */
    public function retrieved(Fullcops $fullcops)
    {
        //
    }

    /**
     * Handle the Fullcops "creating" event.
     * before a record has been created
     *
     * @param  \App\Models\Fullcops  $fullcops
     * @return void
     */
    public function creating(Fullcops $fullcops)
    {
        //
    }

    /**
     * Handle the Fullcops "created" event.
     * after a record has been created
     *
     * @param  \App\Models\Fullcops  $fullcops
     * @return void
     */
    public function created(Fullcops $fullcops)
    {
        //
    }

    /**
     * Handle the Fullcops "updating" event.
     * before a record is updated
     *
     * @param  \App\Models\Fullcops  $fullcops
     * @return void
     */
    public function updating(Fullcops $fullcops)
    {
        //
    }

    /**
     * Handle the Fullcops "updated" event.
     * after a record has been updated.
     *
     * @param  \App\Models\Fullcops  $fullcops
     * @return void
     */
    public function updated(Fullcops $fullcops)
    {
        //
    }

    /**
     * Handle the Fullcops "saving" event.
     * before a record is saved (either created or updated)
     *
     * @param  \App\Models\Fullcops  $fullcops
     * @return void
     */
    public function saving(Fullcops $fullcops)
    {
        //
    }

    /**
     * Handle the Fullcops "saved" event.
     * after a record has been saved (either created or updated).
     *
     * @param  \App\Models\Fullcops  $fullcops
     * @return void
     */
    public function saved(Fullcops $fullcops)
    {
        //
    }

    /**
     * Handle the Fullcops "deleting" event.
     * before a record is deleted or soft-deleted.
     *
     * @param  \App\Models\Fullcops  $fullcops
     * @return void
     */
    public function deleting(Fullcops $fullcops)
    {
        //
    }

    /**
     * Handle the Fullcops "deleted" event.
     * after a record has been deleted or soft-deleted.
     *
     * @param  \App\Models\Fullcops  $fullcops
     * @return void
     */
    public function deleted(Fullcops $fullcops)
    {
        //
    }

    /**
     * Handle the Fullcops "restoring" event.
     * before a soft-deleted record is going to be restored.
     *
     * @param  \App\Models\Fullcops  $fullcops
     * @return void
     */
    public function restoring(Fullcops $fullcops)
    {
        //
    }

    /**
     * Handle the Fullcops "restored" event.
     * after a soft-deleted record has been restored.
     *
     * @param  \App\Models\Fullcops  $fullcops
     * @return void
     */
    public function restored(Fullcops $fullcops)
    {
        //
    }

    /**
     * Handle the post "force deleted" event.
     *
     * @param  \App\Models\Fullcops  $fullcops
     * @return void
     */
    public function forceDeleted(Fullcops $fullcops)
    {
        //
    }
}

/*
Add this lines in App\Providers\AppServiceProvider :
in top:
... namespace App\Providers

use App\Models\Fullcops;
use App\Observers\FullcopsObserver;

... class AppServiceProvider ...

in boot function:
... public function boot()

    Fullcops::observe(FullcopsObserver::class);

... }

