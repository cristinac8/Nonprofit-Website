<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Donation extends Model
{
    use HasFactory;

    protected $fillable = [
        'campaignID',
        'userID',
        'amount',
        'text',
        'status',
    ];

    public function campaign(){
        return $this->belongsTo(Campaign::class,'campaignID');
    }

    public function user(){
        return $this->belongsTo(User::class,'userID');
    }
}
