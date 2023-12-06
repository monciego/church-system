<?php

namespace App\Http\Controllers;

use App\Models\BaptismalSchedule;
use App\Models\BlessingSchedule;
use App\Models\BurialSchedule;
use App\Models\ConfirmationSchedule;
use App\Models\WeddingSchedules;
use Illuminate\Http\Request;

class ClientListsController extends Controller
{

    public function index() {
       /*  $baptismalClients = BaptismalSchedule::get();
        $burialClients = BurialSchedule::get();
        $weddingClients = WeddingSchedules::get();
        $confirmationClients = ConfirmationSchedule::get();
        $blessingClients = BlessingSchedule::get();

        $clients = $baptismalClients
            ->concat($burialClients)
            ->concat($weddingClients)
            ->concat($confirmationClients)
            ->concat($blessingClients);

            $clientTypes = $clients->map(function ($client) {
                return get_class($client);
            });
            dD($clientTypes); */

            $baptismalClients = BaptismalSchedule::get();
$burialClients = BurialSchedule::get();
$weddingClients = WeddingSchedules::get();
$confirmationClients = ConfirmationSchedule::get();
$blessingClients = BlessingSchedule::get();

$clients = $baptismalClients
    ->map(function ($client) {
        $client->type = 'baptism';
        return $client;
    })
    ->concat(
        $burialClients->map(function ($client) {
            $client->type = 'burial';
            return $client;
        })
    )
    ->concat(
        $weddingClients->map(function ($client) {
            $client->type = 'wedding';
            return $client;
        })
    )
    ->concat(
        $confirmationClients->map(function ($client) {
            $client->type = 'confirmation';
            return $client;
        })
    )
    ->concat(
        $blessingClients->map(function ($client) {
            $client->type = 'blessing';
            return $client;
        })
    );


        return view('superadministrator.clients.index', compact('clients'));
    }
}
