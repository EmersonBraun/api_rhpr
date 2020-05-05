<?php

namespace App\Observers;

use App\Models\Inativos;

class InativosObserver
{
    /**
     * Handle the Inativos "retrieved" event.
     * after a record has been retrieved
     *
     * @param  \App\Models\Inativos  $inativos
     * @return void
     */
    public function retrieved(Inativos $inativos)
    {
        //
    }

    /**
     * Handle the Inativos "creating" event.
     * before a record has been created
     *
     * @param  \App\Models\Inativos  $inativos
     * @return void
     */
    public function creating(Inativos $inativos)
    {
        //
    }

    /**
     * Handle the Inativos "created" event.
     * after a record has been created
     *
     * @param  \App\Models\Inativos  $inativos
     * @return void
     */
    public function created(Inativos $inativos)
    {
        //
    }

    /**
     * Handle the Inativos "updating" event.
     * before a record is updated
     *
     * @param  \App\Models\Inativos  $inativos
     * @return void
     */
    public function updating(Inativos $inativos)
    {
        //
    }

    /**
     * Handle the Inativos "updated" event.
     * after a record has been updated.
     *
     * @param  \App\Models\Inativos  $inativos
     * @return void
     */
    public function updated(Inativos $inativos)
    {
        //
    }

    /**
     * Handle the Inativos "saving" event.
     * before a record is saved (either created or updated)
     *
     * @param  \App\Models\Inativos  $inativos
     * @return void
     */
    public function saving(Inativos $inativos)
    {
        //
    }

    /**
     * Handle the Inativos "saved" event.
     * after a record has been saved (either created or updated).
     *
     * @param  \App\Models\Inativos  $inativos
     * @return void
     */
    public function saved(Inativos $inativos)
    {
        //
    }

    /**
     * Handle the Inativos "deleting" event.
     * before a record is deleted or soft-deleted.
     *
     * @param  \App\Models\Inativos  $inativos
     * @return void
     */
    public function deleting(Inativos $inativos)
    {
        //
    }

    /**
     * Handle the Inativos "deleted" event.
     * after a record has been deleted or soft-deleted.
     *
     * @param  \App\Models\Inativos  $inativos
     * @return void
     */
    public function deleted(Inativos $inativos)
    {
        //
    }

    /**
     * Handle the Inativos "restoring" event.
     * before a soft-deleted record is going to be restored.
     *
     * @param  \App\Models\Inativos  $inativos
     * @return void
     */
    public function restoring(Inativos $inativos)
    {
        //
    }

    /**
     * Handle the Inativos "restored" event.
     * after a soft-deleted record has been restored.
     *
     * @param  \App\Models\Inativos  $inativos
     * @return void
     */
    public function restored(Inativos $inativos)
    {
        //
    }

    /**
     * Handle the post "force deleted" event.
     *
     * @param  \App\Models\Inativos  $inativos
     * @return void
     */
    public function forceDeleted(Inativos $inativos)
    {
        //
    }
}

/*
Add this lines in App\Providers\AppServiceProvider :
in top:
... namespace App\Providers

use App\Models\Inativos;
use App\Observers\InativosObserver;

... class AppServiceProvider ...

in boot function:
... public function boot()

    Inativos::observe(InativosObserver::class);

... }

