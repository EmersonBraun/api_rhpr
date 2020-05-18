<?php

namespace App\Observers;

use App\Models\Adminresponsible;

class AdminresponsibleObserver
{
    /**
     * Handle the Adminresponsible "retrieved" event.
     * after a record has been retrieved
     *
     * @param  \App\Models\Adminresponsible  $adminresponsible
     * @return void
     */
    public function retrieved(Adminresponsible $adminresponsible)
    {
        //
    }

    /**
     * Handle the Adminresponsible "creating" event.
     * before a record has been created
     *
     * @param  \App\Models\Adminresponsible  $adminresponsible
     * @return void
     */
    public function creating(Adminresponsible $adminresponsible)
    {
        //
    }

    /**
     * Handle the Adminresponsible "created" event.
     * after a record has been created
     *
     * @param  \App\Models\Adminresponsible  $adminresponsible
     * @return void
     */
    public function created(Adminresponsible $adminresponsible)
    {
        //
    }

    /**
     * Handle the Adminresponsible "updating" event.
     * before a record is updated
     *
     * @param  \App\Models\Adminresponsible  $adminresponsible
     * @return void
     */
    public function updating(Adminresponsible $adminresponsible)
    {
        //
    }

    /**
     * Handle the Adminresponsible "updated" event.
     * after a record has been updated.
     *
     * @param  \App\Models\Adminresponsible  $adminresponsible
     * @return void
     */
    public function updated(Adminresponsible $adminresponsible)
    {
        //
    }

    /**
     * Handle the Adminresponsible "saving" event.
     * before a record is saved (either created or updated)
     *
     * @param  \App\Models\Adminresponsible  $adminresponsible
     * @return void
     */
    public function saving(Adminresponsible $adminresponsible)
    {
        //
    }

    /**
     * Handle the Adminresponsible "saved" event.
     * after a record has been saved (either created or updated).
     *
     * @param  \App\Models\Adminresponsible  $adminresponsible
     * @return void
     */
    public function saved(Adminresponsible $adminresponsible)
    {
        //
    }

    /**
     * Handle the Adminresponsible "deleting" event.
     * before a record is deleted or soft-deleted.
     *
     * @param  \App\Models\Adminresponsible  $adminresponsible
     * @return void
     */
    public function deleting(Adminresponsible $adminresponsible)
    {
        //
    }

    /**
     * Handle the Adminresponsible "deleted" event.
     * after a record has been deleted or soft-deleted.
     *
     * @param  \App\Models\Adminresponsible  $adminresponsible
     * @return void
     */
    public function deleted(Adminresponsible $adminresponsible)
    {
        //
    }

    /**
     * Handle the Adminresponsible "restoring" event.
     * before a soft-deleted record is going to be restored.
     *
     * @param  \App\Models\Adminresponsible  $adminresponsible
     * @return void
     */
    public function restoring(Adminresponsible $adminresponsible)
    {
        //
    }

    /**
     * Handle the Adminresponsible "restored" event.
     * after a soft-deleted record has been restored.
     *
     * @param  \App\Models\Adminresponsible  $adminresponsible
     * @return void
     */
    public function restored(Adminresponsible $adminresponsible)
    {
        //
    }

    /**
     * Handle the post "force deleted" event.
     *
     * @param  \App\Models\Adminresponsible  $adminresponsible
     * @return void
     */
    public function forceDeleted(Adminresponsible $adminresponsible)
    {
        //
    }
}

/*
Add this lines in App\Providers\AppServiceProvider :
in top:
... namespace App\Providers

use App\Models\Adminresponsible;
use App\Observers\AdminresponsibleObserver;

... class AppServiceProvider ...

in boot function:
... public function boot()

    Adminresponsible::observe(AdminresponsibleObserver::class);

... }

