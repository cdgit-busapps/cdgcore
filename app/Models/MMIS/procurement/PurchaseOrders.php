<?php

namespace App\Models\Mmis\procurement;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PurchaseOrders extends Model
{
    use HasFactory;
    protected $table = 'purchaseOrderMaster';
}