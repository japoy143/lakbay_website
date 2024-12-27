<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HotelOwner extends Model
{

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }


    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
