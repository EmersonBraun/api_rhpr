<?php

namespace App\Observers;

use App\Models\Adminphone;

class AdminphoneObserver
{
    /**
     * Handle the Adminphone "retrieved" event.
     * after a record has been retrieved
     *
     * @param  \App\Models\Adminphone  $adminphone
     * @return void
     */
    public function retrieved(Adminphone $adminphone)
    {
        //
    }

    /**
     * Handle the Adminphone "creating" event.
     * before a record has been created
     *
     * @param  \App\Models\Adminphone  $adminphone
     * @return void
     */
    public function creating(Adminphone $adminphone)
    {
        //
    }

    /**
     * Handle the Adminphone "created" event.
     * after a record has been created
     *
     * @param  \App\Models\Adminphone  $adminphone
     * @return void
     */
    public function created(Adminphone $adminphone)
    {
        //
    }

    /**
     * Handle the Adminphone "updating" event.
     * before a record is updated
     *
     * @param  \App\Models\Adminphone  $adminphone
     * @return void
     */
    public function updating(Adminphone $adminphone)
    {
        //
    }

    /**
     * Handle the Adminphone "updated" event.
     * after a record has been updated.
     *
     * @param  \App\Models\Adminphone  $adminphone
     * @return void
     */
    public function updated(Adminphone $adminphone)
    {
        //
    }

    /**
     * Handle the Adminphone "saving" event.
     * before a record is saved (either created or updated)
     *
     * @param  \App\Models\Adminphone  $adminphone
     * @return void
     */
    public function saving(Adminphone $adminphone)
    {
        //
    }

    /**
     * Handle the Adminphone "saved" event.
     * after a record has been saved (either created or updated).
     *
     * @param  \App\Models\Adminphone  $adminphone
     * @return void
     */
    public function saved(Adminphone $adminphone)
    {
        //
    }

    /**
     * Handle the Adminphone "deleting" event.
     * before a record is deleted or soft-deleted.
     *
     * @param  \App\Models\Adminphone  $adminphone
     * @return void
     */
    public function deleting(Adminphone $adminphone)
    {
        //
    }

    /**
     * Handle the Adminphone "deleted" event.
     * after a record has been deleted or soft-deleted.
     *
     * @param  \App\Models\Adminphone  $adminphone
     * @return void
     */
    public function deleted(Adminphone $adminphone)
    {
        //
    }

    /**
     * Handle the Adminphone "restoring" event.
     * before a soft-deleted record is going to be restored.
     *
     * @param  \App\Models\Adminphone  $adminphone
     * @return void
     */
    public function restoring(Adminphone $adminphone)
    {
        //
    }

    /**
     * Handle the Adminphone "restored" event.
     * after a soft-deleted record has been restored.
     *
     * @param  \App\Models\Adminphone  $adminphone
     * @return void
     */
    public function restored(Adminphone $adminphone)
    {
        //
    }

    /**
     * Handle the post "force deleted" event.
     *
     * @param  \App\Models\Adminphone  $adminphone
     * @return void
     */
    public function forceDeleted(Adminphone $adminphone)
    {
        //
    }
}

/*
Add this lines in App\Providers\AppServiceProvider :
in top:
... namespace App\Providers

use App\Models\Adminphone;
use App\Observers\AdminphoneObserver;

... class AppServiceProvider ...

in boot function:
... public function boot()

    Adminphone::observe(AdminphoneObserver::class);

... }

