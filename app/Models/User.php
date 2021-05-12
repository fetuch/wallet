<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function assets()
    {
        return $this->hasMany(Asset::class);
    }

    /**
     * @param $name
     * @return bool
     */
    public function hasAsset($name)
    {
        return $this->assets()
            ->where('name', $name)
            ->exists();
    }

    /**
     * @param $name
     * @return \Illuminate\Database\Eloquent\Model|\Illuminate\Database\Eloquent\Relations\HasMany|object|null
     */
    public function getAssetByName($name)
    {
        return $this->assets()
            ->where('name', $name)
            ->first();
    }

    public function currencies()
    {
        return $this->assets()
            ->with('resource')
            ->whereHas('resource', function($query) {
                $query->whereType('fiat currency');
            });
    }
}
