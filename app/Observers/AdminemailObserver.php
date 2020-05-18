<?php

namespace App\Observers;

use App\Models\Adminemail;

class AdminemailObserver
{
    /**
     * Handle the Adminemail "retrieved" event.
     * after a record has been retrieved
     *
     * @param  \App\Models\Adminemail  $adminemail
     * @return void
     */
    public function retrieved(Adminemail $adminemail)
    {
        //
    }

    /**
     * Handle the Adminemail "creating" event.
     * before a record has been created
     *
     * @param  \App\Models\Adminemail  $adminemail
     * @return void
     */
    public function creating(Adminemail $adminemail)
    {
        //
    }

    /**
     * Handle the Adminemail "created" event.
     * after a record has been created
     *
     * @param  \App\Models\Adminemail  $adminemail
     * @return void
     */
    public function created(Adminemail $adminemail)
    {
        //
    }

    /**
     * Handle the Adminemail "updating" event.
     * before a record is updated
     *
     * @param  \App\Models\Adminemail  $adminemail
     * @return void
     */
    public function updating(Adminemail $adminemail)
    {
        //
    }

    /**
     * Handle the Adminemail "updated" event.
     * after a record has been updated.
     *
     * @param  \App\Models\Adminemail  $adminemail
     * @return void
     */
    public function updated(Adminemail $adminemail)
    {
        //
    }

    /**
     * Handle the Adminemail "saving" event.
     * before a record is saved (either created or updated)
     *
     * @param  \App\Models\Adminemail  $adminemail
     * @return void
     */
    public function saving(Adminemail $adminemail)
    {
        //
    }

    /**
     * Handle the Adminemail "saved" event.
     * after a record has been saved (either created or updated).
     *
     * @param  \App\Models\Adminemail  $adminemail
     * @return void
     */
    public function saved(Adminemail $adminemail)
    {
        //
    }

    /**
     * Handle the Adminemail "deleting" event.
     * before a record is deleted or soft-deleted.
     *
     * @param  \App\Models\Adminemail  $adminemail
     * @return void
     */
    public function deleting(Adminemail $adminemail)
    {
        //
    }

    /**
     * Handle the Adminemail "deleted" event.
     * after a record has been deleted or soft-deleted.
     *
     * @param  \App\Models\Adminemail  $adminemail
     * @return void
     */
    public function deleted(Adminemail $adminemail)
    {
        //
    }

    /**
     * Handle the Adminemail "restoring" event.
     * before a soft-deleted record is going to be restored.
     *
     * @param  \App\Models\Adminemail  $adminemail
     * @return void
     */
    public function restoring(Adminemail $adminemail)
    {
        //
    }

    /**
     * Handle the Adminemail "restored" event.
     * after a soft-deleted record has been restored.
     *
     * @param  \App\Models\Adminemail  $adminemail
     * @return void
     */
    public function restored(Adminemail $adminemail)
    {
        //
    }

    /**
     * Handle the post "force deleted" event.
     *
     * @param  \App\Models\Adminemail  $adminemail
     * @return void
     */
    public function forceDeleted(Adminemail $adminemail)
    {
        //
    }
}

/*
Add this lines in App\Providers\AppServiceProvider :
in top:
... namespace App\Providers

use App\Models\Adminemail;
use App\Observers\AdminemailObserver;

... class AppServiceProvider ...

in boot function:
... public function boot()

    Adminemail::observe(AdminemailObserver::class);

... }

