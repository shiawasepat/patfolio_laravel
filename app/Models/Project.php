<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Project extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'image_url',
        'github_url',
        'technologies',
        'completed_at'
    ];

    protected $casts = [
        'technologies' => 'array',
        'completed_at' => 'date'
    ];

    // Add an accessor to get the full image URL
    public function getImageUrlAttribute($value)
    {
        if (!$value) {
            return null;
        }
        
        return Storage::disk('public')->exists($value) 
            ? Storage::url($value)
            : null;
    }

    // Add a mutator to handle image path storage
    public function setImageUrlAttribute($value)
    {
        $this->attributes['image_url'] = $value ? 'projects/' . basename($value) : null;
    }

    /**
     * Check if project image exists and is readable
     */
    public function hasValidImage(): bool
    {
        return $this->image_url && Storage::disk('public')->exists($this->getRawOriginal('image_url'));
    }

    /**
     * Get raw image path for testing
     */
    public function getImagePath(): string
    {
        return storage_path('app/public/' . $this->getRawOriginal('image_url'));
    }

}