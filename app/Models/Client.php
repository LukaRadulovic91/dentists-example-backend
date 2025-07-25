<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

/**
 * Class Client
 *
 * @package App\Models
 */
class Client extends Model
{
    use HasFactory;

    /**
     * The attributes that aren't mass assignable.
     *
     * @var array<string>|bool
     */
    public $guarded = ['id'];

    /**
     * @return HasOne
     */
    public  function user(): HasOne
    {
        return $this->hasOne(User::class, 'id', 'user_id');
    }
}
