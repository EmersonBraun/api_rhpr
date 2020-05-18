<?php

namespace App\Observers;

use App\Models\Adminuser;

class AdminuserObserver
{
    /**
     * Handle the Adminuser "retrieved" event.
     * after a record has been retrieved
     *
     * @param  \App\Models\Adminuser  $adminuser
     * @return void
     */
    public function retrieved(Adminuser $adminuser)
    {
        //
    }

    /**
     * Handle the Adminuser "creating" event.
     * before a record has been created
     *
     * @param  \App\Models\Adminuser  $adminuser
     * @return void
     */
    public function creating(Adminuser $adminuser)
    {
        //
    }

    /**
     * Handle the Adminuser "created" event.
     * after a record has been created
     *
     * @param  \App\Models\Adminuser  $adminuser
     * @return void
     */
    public function created(Adminuser $adminuser)
    {
        //
    }

    /**
     * Handle the Adminuser "updating" event.
     * before a record is updated
     *
     * @param  \App\Models\Adminuser  $adminuser
     * @return void
     */
    public function updating(Adminuser $adminuser)
    {
        //
    }

    /**
     * Handle the Adminuser "updated" event.
     * after a record has been updated.
     *
     * @param  \App\Models\Adminuser  $adminuser
     * @return void
     */
    public function updated(Adminuser $adminuser)
    {
        //
    }

    /**
     * Handle the Adminuser "saving" event.
     * before a record is saved (either created or updated)
     *
     * @param  \App\Models\Adminuser  $adminuser
     * @return void
     */
    public function saving(Adminuser $adminuser)
    {
        //
    }

    /**
     * Handle the Adminuser "saved" event.
     * after a record has been saved (either created or updated).
     *
     * @param  \App\Models\Adminuser  $adminuser
     * @return void
     */
    public function saved(Adminuser $adminuser)
    {
        //
    }

    /**
     * Handle the Adminuser "deleting" event.
     * before a record is deleted or soft-deleted.
     *
     * @param  \App\Models\Adminuser  $adminuser
     * @return void
     */
    public function deleting(Adminuser $adminuser)
    {
        //
    }

    /**
     * Handle the Adminuser "deleted" event.
     * after a record has been deleted or soft-deleted.
     *
     * @param  \App\Models\Adminuser  $adminuser
     * @return void
     */
    public function deleted(Adminuser $adminuser)
    {
        //
    }

    /**
     * Handle the Adminuser "restoring" event.
     * before a soft-deleted record is going to be restored.
     *
     * @param  \App\Models\Adminuser  $adminuser
     * @return void
     */
    public function restoring(Adminuser $adminuser)
    {
        //
    }

    /**
     * Handle the Adminuser "restored" event.
     * after a soft-deleted record has been restored.
     *
     * @param  \App\Models\Adminuser  $adminuser
     * @return void
     */
    public function restored(Adminuser $adminuser)
    {
        //
    }

    /**
     * Handle the post "force deleted" event.
     *
     * @param  \App\Models\Adminuser  $adminuser
     * @return void
     */
    public function forceDeleted(Adminuser $adminuser)
    {
        //
    }
}

/*
Add this lines in App\Providers\AppServiceProvider :
in top:
... namespace App\Providers

use App\Models\Adminuser;
use App\Observers\AdminuserObserver;

... class AppServiceProvider ...

in boot function:
... public function boot()

    Adminuser::observe(AdminuserObserver::class);

... }

