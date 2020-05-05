<?php

namespace App\Observers;

use App\Models\Dependentesativa;

class DependentesativaObserver
{
    /**
     * Handle the Dependentesativa "retrieved" event.
     * after a record has been retrieved
     *
     * @param  \App\Models\Dependentesativa  $dependentesativa
     * @return void
     */
    public function retrieved(Dependentesativa $dependentesativa)
    {
        //
    }

    /**
     * Handle the Dependentesativa "creating" event.
     * before a record has been created
     *
     * @param  \App\Models\Dependentesativa  $dependentesativa
     * @return void
     */
    public function creating(Dependentesativa $dependentesativa)
    {
        //
    }

    /**
     * Handle the Dependentesativa "created" event.
     * after a record has been created
     *
     * @param  \App\Models\Dependentesativa  $dependentesativa
     * @return void
     */
    public function created(Dependentesativa $dependentesativa)
    {
        //
    }

    /**
     * Handle the Dependentesativa "updating" event.
     * before a record is updated
     *
     * @param  \App\Models\Dependentesativa  $dependentesativa
     * @return void
     */
    public function updating(Dependentesativa $dependentesativa)
    {
        //
    }

    /**
     * Handle the Dependentesativa "updated" event.
     * after a record has been updated.
     *
     * @param  \App\Models\Dependentesativa  $dependentesativa
     * @return void
     */
    public function updated(Dependentesativa $dependentesativa)
    {
        //
    }

    /**
     * Handle the Dependentesativa "saving" event.
     * before a record is saved (either created or updated)
     *
     * @param  \App\Models\Dependentesativa  $dependentesativa
     * @return void
     */
    public function saving(Dependentesativa $dependentesativa)
    {
        //
    }

    /**
     * Handle the Dependentesativa "saved" event.
     * after a record has been saved (either created or updated).
     *
     * @param  \App\Models\Dependentesativa  $dependentesativa
     * @return void
     */
    public function saved(Dependentesativa $dependentesativa)
    {
        //
    }

    /**
     * Handle the Dependentesativa "deleting" event.
     * before a record is deleted or soft-deleted.
     *
     * @param  \App\Models\Dependentesativa  $dependentesativa
     * @return void
     */
    public function deleting(Dependentesativa $dependentesativa)
    {
        //
    }

    /**
     * Handle the Dependentesativa "deleted" event.
     * after a record has been deleted or soft-deleted.
     *
     * @param  \App\Models\Dependentesativa  $dependentesativa
     * @return void
     */
    public function deleted(Dependentesativa $dependentesativa)
    {
        //
    }

    /**
     * Handle the Dependentesativa "restoring" event.
     * before a soft-deleted record is going to be restored.
     *
     * @param  \App\Models\Dependentesativa  $dependentesativa
     * @return void
     */
    public function restoring(Dependentesativa $dependentesativa)
    {
        //
    }

    /**
     * Handle the Dependentesativa "restored" event.
     * after a soft-deleted record has been restored.
     *
     * @param  \App\Models\Dependentesativa  $dependentesativa
     * @return void
     */
    public function restored(Dependentesativa $dependentesativa)
    {
        //
    }

    /**
     * Handle the post "force deleted" event.
     *
     * @param  \App\Models\Dependentesativa  $dependentesativa
     * @return void
     */
    public function forceDeleted(Dependentesativa $dependentesativa)
    {
        //
    }
}

/*
Add this lines in App\Providers\AppServiceProvider :
in top:
... namespace App\Providers

use App\Models\Dependentesativa;
use App\Observers\DependentesativaObserver;

... class AppServiceProvider ...

in boot function:
... public function boot()

    Dependentesativa::observe(DependentesativaObserver::class);

... }

