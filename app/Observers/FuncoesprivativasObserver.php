<?php

namespace App\Observers;

use App\Models\Funcoesprivativas;

class FuncoesprivativasObserver
{
    /**
     * Handle the Funcoesprivativas "retrieved" event.
     * after a record has been retrieved
     *
     * @param  \App\Models\Funcoesprivativas  $funcoesprivativas
     * @return void
     */
    public function retrieved(Funcoesprivativas $funcoesprivativas)
    {
        //
    }

    /**
     * Handle the Funcoesprivativas "creating" event.
     * before a record has been created
     *
     * @param  \App\Models\Funcoesprivativas  $funcoesprivativas
     * @return void
     */
    public function creating(Funcoesprivativas $funcoesprivativas)
    {
        //
    }

    /**
     * Handle the Funcoesprivativas "created" event.
     * after a record has been created
     *
     * @param  \App\Models\Funcoesprivativas  $funcoesprivativas
     * @return void
     */
    public function created(Funcoesprivativas $funcoesprivativas)
    {
        //
    }

    /**
     * Handle the Funcoesprivativas "updating" event.
     * before a record is updated
     *
     * @param  \App\Models\Funcoesprivativas  $funcoesprivativas
     * @return void
     */
    public function updating(Funcoesprivativas $funcoesprivativas)
    {
        //
    }

    /**
     * Handle the Funcoesprivativas "updated" event.
     * after a record has been updated.
     *
     * @param  \App\Models\Funcoesprivativas  $funcoesprivativas
     * @return void
     */
    public function updated(Funcoesprivativas $funcoesprivativas)
    {
        //
    }

    /**
     * Handle the Funcoesprivativas "saving" event.
     * before a record is saved (either created or updated)
     *
     * @param  \App\Models\Funcoesprivativas  $funcoesprivativas
     * @return void
     */
    public function saving(Funcoesprivativas $funcoesprivativas)
    {
        //
    }

    /**
     * Handle the Funcoesprivativas "saved" event.
     * after a record has been saved (either created or updated).
     *
     * @param  \App\Models\Funcoesprivativas  $funcoesprivativas
     * @return void
     */
    public function saved(Funcoesprivativas $funcoesprivativas)
    {
        //
    }

    /**
     * Handle the Funcoesprivativas "deleting" event.
     * before a record is deleted or soft-deleted.
     *
     * @param  \App\Models\Funcoesprivativas  $funcoesprivativas
     * @return void
     */
    public function deleting(Funcoesprivativas $funcoesprivativas)
    {
        //
    }

    /**
     * Handle the Funcoesprivativas "deleted" event.
     * after a record has been deleted or soft-deleted.
     *
     * @param  \App\Models\Funcoesprivativas  $funcoesprivativas
     * @return void
     */
    public function deleted(Funcoesprivativas $funcoesprivativas)
    {
        //
    }

    /**
     * Handle the Funcoesprivativas "restoring" event.
     * before a soft-deleted record is going to be restored.
     *
     * @param  \App\Models\Funcoesprivativas  $funcoesprivativas
     * @return void
     */
    public function restoring(Funcoesprivativas $funcoesprivativas)
    {
        //
    }

    /**
     * Handle the Funcoesprivativas "restored" event.
     * after a soft-deleted record has been restored.
     *
     * @param  \App\Models\Funcoesprivativas  $funcoesprivativas
     * @return void
     */
    public function restored(Funcoesprivativas $funcoesprivativas)
    {
        //
    }

    /**
     * Handle the post "force deleted" event.
     *
     * @param  \App\Models\Funcoesprivativas  $funcoesprivativas
     * @return void
     */
    public function forceDeleted(Funcoesprivativas $funcoesprivativas)
    {
        //
    }
}

/*
Add this lines in App\Providers\AppServiceProvider :
in top:
... namespace App\Providers

use App\Models\Funcoesprivativas;
use App\Observers\FuncoesprivativasObserver;

... class AppServiceProvider ...

in boot function:
... public function boot()

    Funcoesprivativas::observe(FuncoesprivativasObserver::class);

... }

