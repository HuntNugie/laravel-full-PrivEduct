<?php
namespace App\Service;

use Midtrans\Config;
use Midtrans\Snap;

class MidtransService
{
    public function __construct()
    {
        Config::$serverKey = config("midtrans.server_key");
        Config::$clientKey = config("midtrans.client_key");
        Config::$isProduction = config("midtrans.is_production");

        Config::$isSanitized = true;
        Config::$is3ds = true;
    }

    public function createSnapToken(array $params){
        return Snap::getSnapToken($params);
    }
 
}