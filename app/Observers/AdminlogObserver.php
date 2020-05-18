<?php

namespace App\Observers;

use App\Models\Adminlog;

class AdminlogObserver
{
    /**
     * Handle the Adminlog "retrieved" event.
     * after a record has been retrieved
     *
     * @param  \App\Models\Adminlog  $adminlog
     * @return void
     */
    public function retrieved(Adminlog $adminlog)
    {
        //
    }

    /**
     * Handle the Adminlog "creating" event.
     * before a record has been created
     *
     * @param  \App\Models\Adminlog  $adminlog
     * @return void
     */
    public function creating(Adminlog $adminlog)
    {
        //
    }

    /**
     * Handle the Adminlog "created" event.
     * after a record has been created
     *
     * @param  \App\Models\Adminlog  $adminlog
     * @return void
     */
    public function created(Adminlog $adminlog)
    {
        //
    }

    /**
     * Handle the Adminlog "updating" event.
     * before a record is updated
     *
     * @param  \App\Models\Adminlog  $adminlog
     * @return void
     */
    public function updating(Adminlog $adminlog)
    {
        //
    }

    /**
     * Handle the Adminlog "updated" event.
     * after a record has been updated.
     *
     * @param  \App\Models\Adminlog  $adminlog
     * @return void
     */
    public function updated(Adminlog $adminlog)
    {
        //
    }

    /**
     * Handle the Adminlog "saving" event.
     * before a record is saved (either created or updated)
     *
     * @param  \App\Models\Adminlog  $adminlog
     * @return void
     */
    public function saving(Adminlog $adminlog)
    {
        //
    }

    /**
     * Handle the Adminlog "saved" event.
     * after a record has been saved (either created or updated).
     *
     * @param  \App\Models\Adminlog  $adminlog
     * @return void
     */
    public function saved(Adminlog $adminlog)
    {
        //
    }

    /**
     * Handle the Adminlog "deleting" event.
     * before a record is deleted or soft-deleted.
     *
     * @param  \App\Models\Adminlog  $adminlog
     * @return void
     */
    public function deleting(Adminlog $adminlog)
    {
        //
    }

    /**
     * Handle the Adminlog "deleted" event.
     * after a record has been deleted or soft-deleted.
     *
     * @param  \App\Models\Adminlog  $adminlog
     * @return void
     */
    public function deleted(Adminlog $adminlog)
    {
        //
    }

    /**
     * Handle the Adminlog "restoring" event.
     * before a soft-deleted record is going to be restored.
     *
     * @param  \App\Models\Adminlog  $adminlog
     * @return void
     */
    public function restoring(Adminlog $adminlog)
    {
        //
    }

    /**
     * Handle the Adminlog "restored" event.
     * after a soft-deleted record has been restored.
     *
     * @param  \App\Models\Adminlog  $adminlog
     * @return void
     */
    public function restored(Adminlog $adminlog)
    {
        //
    }

    /**
     * Handle the post "force deleted" event.
     *
     * @param  \App\Models\Adminlog  $adminlog
     * @return void
     */
    public function forceDeleted(Adminlog $adminlog)
    {
        //
    }
}

/*
Add this lines in App\Providers\AppServiceProvider :
in top:
... namespace App\Providers

use App\Models\Adminlog;
use App\Observers\AdminlogObserver;

... class AppServiceProvider ...

in boot function:
... public function boot()

    Adminlog::observe(AdminlogObserver::class);

... }

