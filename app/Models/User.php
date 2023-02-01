<?php

namespace App\Models;

use Laravel\Scout\Searchable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Casts\Attribute;

class User extends Authenticatable implements MustVerifyEmail
{
    use HasApiTokens;
    use HasFactory;
    use Notifiable;
    use Searchable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */

    // protected $fillable = [
    //     'name',
    //     'email',
    //     'password',
    // ];



    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'two_factor_expires_at' => 'datetime',
    ];


    protected function password(): Attribute
    {
        return Attribute::make(
            set: fn ($value) => bcrypt($value),
            // get: fn ($value) => decrypt($value),
        );
    }


    public function generateTwoFactorCode()
    {
        $this->timestamps=false;
        $this->two_factor_code=rand(100000, 999999);
        $this->two_factor_expires_at=now()->addMinutes(5);
        $this->save();
    }


    public function resetTwoFactorCode()
    {
        $this->timestamps=false;
        $this->two_factor_code=null;
        $this->two_factor_expires_at=null;
        $this->save();
    }

    public function newsPosts()
    {
        return $this->hasMany(NewsPost::class)->with("subCategory");
    }

    public function videoNewsPosts()
    {
        return $this->hasMany(VideoNewsPost::class)->with("subCategory");
    }

    public static function deleteUserPhoto($user)
    {
        if (!empty($user->avatar) && file_exists(public_path("storage/avatars/$user->avatar"))) {
            unlink(public_path("storage/avatars/$user->avatar"));
        }
    }

    public function toSearchableArray()
    {
        return [
            "name" => $this->name,
            "email" => $this->email,
        ];
    }

    public function scopeFilterRequest($query, $filterKeyword)
    {
        $query->when($filterKeyword["search"]??null, function ($query, $keyword) {
            $query->where(function ($query) use ($keyword) {
                $query->where("name", "LIKE", "%".$keyword."%")
                ->orWhere("email", "LIKE", "%".$keyword."%");
            });
        });
    }
}
