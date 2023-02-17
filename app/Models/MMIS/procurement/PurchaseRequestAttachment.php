<?php

namespace App\Models\MMIS\procurement;

use App\Models\MMIS\procurement\PurchaseRequest;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PurchaseRequestAttachment extends Model
{
    use HasFactory;
    protected $connection = "sqlsrv_mmis";
    protected $table = "purchaseRequestAttachment";
    protected $guarded = [];

    public function purchaseRequest(){
        return $this->belongsTo(PurchaseRequest::class, 'pr_request_id');
    }
}
 