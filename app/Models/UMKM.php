<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UMKM extends Model
{
    use HasFactory;

    protected $table = 'umkm';

    protected $fillable = [
        'name',
        'description',
        'category',
        'rt_number',
        'image',
        'owner_name',
        'owner_phone',
        'address',
        'is_active',
    ];

    protected $casts = [
        'is_active' => 'boolean',
    ];

    /**
     * Relationship with User (RT)
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Scope for active UMKM
     */
    public function scopeActive($query)
    {
        return $query->where('is_active', true);
    }

    /**
     * Scope for category filter
     */
    public function scopeByCategory($query, $category)
    {
        return $query->where('category', $category);
    }

    /**
     * Scope for RT filter
     */
    public function scopeByRT($query, $rtNumber)
    {
        return $query->where('rt_number', $rtNumber);
    }

    /**
     * Get RT display name
     */
    public function getRTDisplayName(): string
    {
        return $this->rt_number ? 'RT ' . $this->rt_number : 'N/A';
    }
} 