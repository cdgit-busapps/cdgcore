<?php

namespace App\Models\MMIS\procurement;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RFQMastersDetails extends Model
{
    use HasFactory;
    protected $connection = 'sqlsrv_mmis';
    protected $table = 'RFQDetail';
}
