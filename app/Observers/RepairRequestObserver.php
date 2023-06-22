<?php

namespace App\Observers;

use App\Models\RepairRequest;
use App\Models\Client;

class RepairRequestObserver
{
    /**
     * Handle the RepairRequest "created" event.
     *
     * @param  \App\Models\RepairRequest  $repairRequest
     * @return void
     */
    public function created(RepairRequest $repairRequest)
    {
        Client::create([
            'client_name' => $repairRequest->client_name,
            'phone' => $repairRequest->phone,
            'address' => $repairRequest->address
        ]);
    }

    /**
     * Handle the RepairRequest "updated" event.
     *
     * @param  \App\Models\RepairRequest  $repairRequest
     * @return void
     */
    public function updated(RepairRequest $repairRequest)
    {
        //
    }

    /**
     * Handle the RepairRequest "deleted" event.
     *
     * @param  \App\Models\RepairRequest  $repairRequest
     * @return void
     */
    public function deleted(RepairRequest $repairRequest)
    {
        //
    }

    /**
     * Handle the RepairRequest "restored" event.
     *
     * @param  \App\Models\RepairRequest  $repairRequest
     * @return void
     */
    public function restored(RepairRequest $repairRequest)
    {
        //
    }

    /**
     * Handle the RepairRequest "force deleted" event.
     *
     * @param  \App\Models\RepairRequest  $repairRequest
     * @return void
     */
    public function forceDeleted(RepairRequest $repairRequest)
    {
        //
    }
}
