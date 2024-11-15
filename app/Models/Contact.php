<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\User;

class Contact extends Model
{
    protected $fillable = ['first_name', 'last_name', 'phone_number', 'email_address', 'company_name', 'user_id'];

    public function scopeSearch($query, $term)
    {
        $terms = explode(' ', $term);
    
        foreach ($terms as $t) {
            $t = "%$t%";
            $query = $query->where(function($query) use ($t) {
                $query->orWhere('first_name', 'like', $t)
                      ->orWhere('last_name', 'like', $t)
                      ->orWhere('phone_number', 'like', $t)
                      ->orWhere('email_address', 'like', $t)
                      ->orWhere('company_name', 'like', $t);
            });
        }
    
        return $query;
    }
    
    public function user() 
    {
        return $this->belongsTo(User::class);
    }
}
