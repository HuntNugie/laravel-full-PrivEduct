<?php
namespace App\Service;

use Exception;
use Midtrans\Config;
use Midtrans\Snap;
use Midtrans\Transaction;
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

    public function createSnapToken(array $params)
    {
        try {
            $token = Snap::getSnapToken($params);
            return $token;
        } catch (Exception $e) {
            dd($e->getMessage());
        }
    }

}