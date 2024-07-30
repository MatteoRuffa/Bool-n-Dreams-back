<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Apartment;

class Message extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'last_name',
        'email',
        'date',
        'message',
        'apartment_id',
    ];
    public function apartment()
    {
        return $this->belongsTo(Apartment::class);
    }
}
