<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class UserData extends Model
{
    use HasFactory;

    protected $table = 'users_data';

    protected $fillable = [
        'user_id',
        'cpf',
        'rg',
        'phone',
        'address',
        'number',
        'complement',
        'district',
        'city',
        'state',
        'country',
        'zipcode',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
