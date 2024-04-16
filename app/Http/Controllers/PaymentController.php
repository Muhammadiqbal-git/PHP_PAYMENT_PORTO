<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Xendit\Configuration;
use Xendit\Invoice\InvoiceApi;

class PaymentController extends Controller
{
    //
    var $apiInstance = null;

    public function __construct() {
        Configuration::setXenditKey("api");
        $this->apiInstance = new InvoiceApi();
    }
}
