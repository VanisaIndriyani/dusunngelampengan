<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'is_admin',
        'role',
        'rt_number',
        'phone',
        'address',
        'is_active',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

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
            'is_admin' => 'boolean',
            'is_active' => 'boolean',
        ];
    }

    /**
     * Check if user is admin
     */
    public function isAdmin(): bool
    {
        return $this->role === 'admin' || $this->is_admin;
    }

    /**
     * Check if user is RT
     */
    public function isRT(): bool
    {
        return $this->role === 'rt';
    }

    /**
     * Get RT number
     */
    public function getRTNumber(): ?string
    {
        return $this->rt_number;
    }

    /**
     * Get display name with RT number
     */
    public function getDisplayName(): string
    {
        if ($this->isRT() && $this->rt_number) {
            return $this->name . ' (' . $this->rt_number . ')';
        }
        return $this->name;
    }

    /**
     * Relationship with UMKM (RT can only see their own UMKM)
     */
    public function umkm()
    {
        if ($this->isAdmin()) {
            return $this->hasMany(UMKM::class);
        }
        return $this->hasMany(UMKM::class)->where('rt_number', $this->rt_number);
    }

}
