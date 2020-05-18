<?php

namespace App\Observers;

use App\Models\Adminpermission;

class AdminpermissionObserver
{
    /**
     * Handle the Adminpermission "retrieved" event.
     * after a record has been retrieved
     *
     * @param  \App\Models\Adminpermission  $adminpermission
     * @return void
     */
    public function retrieved(Adminpermission $adminpermission)
    {
        //
    }

    /**
     * Handle the Adminpermission "creating" event.
     * before a record has been created
     *
     * @param  \App\Models\Adminpermission  $adminpermission
     * @return void
     */
    public function creating(Adminpermission $adminpermission)
    {
        //
    }

    /**
     * Handle the Adminpermission "created" event.
     * after a record has been created
     *
     * @param  \App\Models\Adminpermission  $adminpermission
     * @return void
     */
    public function created(Adminpermission $adminpermission)
    {
        //
    }

    /**
     * Handle the Adminpermission "updating" event.
     * before a record is updated
     *
     * @param  \App\Models\Adminpermission  $adminpermission
     * @return void
     */
    public function updating(Adminpermission $adminpermission)
    {
        //
    }

    /**
     * Handle the Adminpermission "updated" event.
     * after a record has been updated.
     *
     * @param  \App\Models\Adminpermission  $adminpermission
     * @return void
     */
    public function updated(Adminpermission $adminpermission)
    {
        //
    }

    /**
     * Handle the Adminpermission "saving" event.
     * before a record is saved (either created or updated)
     *
     * @param  \App\Models\Adminpermission  $adminpermission
     * @return void
     */
    public function saving(Adminpermission $adminpermission)
    {
        //
    }

    /**
     * Handle the Adminpermission "saved" event.
     * after a record has been saved (either created or updated).
     *
     * @param  \App\Models\Adminpermission  $adminpermission
     * @return void
     */
    public function saved(Adminpermission $adminpermission)
    {
        //
    }

    /**
     * Handle the Adminpermission "deleting" event.
     * before a record is deleted or soft-deleted.
     *
     * @param  \App\Models\Adminpermission  $adminpermission
     * @return void
     */
    public function deleting(Adminpermission $adminpermission)
    {
        //
    }

    /**
     * Handle the Adminpermission "deleted" event.
     * after a record has been deleted or soft-deleted.
     *
     * @param  \App\Models\Adminpermission  $adminpermission
     * @return void
     */
    public function deleted(Adminpermission $adminpermission)
    {
        //
    }

    /**
     * Handle the Adminpermission "restoring" event.
     * before a soft-deleted record is going to be restored.
     *
     * @param  \App\Models\Adminpermission  $adminpermission
     * @return void
     */
    public function restoring(Adminpermission $adminpermission)
    {
        //
    }

    /**
     * Handle the Adminpermission "restored" event.
     * after a soft-deleted record has been restored.
     *
     * @param  \App\Models\Adminpermission  $adminpermission
     * @return void
     */
    public function restored(Adminpermission $adminpermission)
    {
        //
    }

    /**
     * Handle the post "force deleted" event.
     *
     * @param  \App\Models\Adminpermission  $adminpermission
     * @return void
     */
    public function forceDeleted(Adminpermission $adminpermission)
    {
        //
    }
}

/*
Add this lines in App\Providers\AppServiceProvider :
in top:
... namespace App\Providers

use App\Models\Adminpermission;
use App\Observers\AdminpermissionObserver;

... class AppServiceProvider ...

in boot function:
... public function boot()

    Adminpermission::observe(AdminpermissionObserver::class);

... }

