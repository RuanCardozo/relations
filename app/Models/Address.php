<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    public $table = 'addresses';

    protected $fillable = [
        'address',
    ];
    protected $hidden = [
        'user_id'
    ];

    use HasFactory;

    public function user(){
        return $this->belongsTo(User::class);
    }
}
