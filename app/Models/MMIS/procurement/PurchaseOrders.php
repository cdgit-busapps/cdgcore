<?php

namespace App\Models\Mmis\procurement;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PurchaseOrders extends Model
{
    protected $connection = 'sqlsrv_mmis';
    protected $table = 'purchaseOrderMaster';
}
