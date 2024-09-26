<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Http\Controllers\CustomerController;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

// class Customer extends Model
// {
//     use HasFactory;

//     protected $table = 'customers';
//     protected $primaryKey = 'customer_id';
//     public $timestamps = false;

//     public function isGoldMember(){
//         $this->points > 2000;
//     }
// }
class Customer extends Model
{
    use HasFactory;

    protected $table = 'customers';
    protected $primaryKey = 'customer_id';
    public $timestamps = false;

public function orders(): HasMany 
    {
        return $this->hasMany(Order::class, 'customer_id');
    }

   protected $fillable = [
        'first_name',
        'last_name',
        'address',
        'city',
        'state',
        'points',
    ];
    protected $hidden = [
        'birth_date',
        'phone',
    ];

    // public function goldMember()
    // {
    //     return $this->points > 2000;
    // }

    

} 


