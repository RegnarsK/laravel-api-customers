<?php

namespace App\Models;

use App\Http\Controllers\CustomerController;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    protected $table = 'customers';
    protected $primaryKey = 'customer_id';
    public $timestamps = false;

    public function isGoldMember(){
        $this->points > 2000;
    }
}


