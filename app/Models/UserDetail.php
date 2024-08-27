<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserDetail extends Model
{
    use HasFactory;

    // Define the table name if it's not the plural of the model name
    protected $table = 'user_details';

    // Define fillable fields to allow mass assignment
    protected $fillable = [
        'user_id',
        'image',
        'description',
        'service_offered',
        'video',
        'gallery',
        'travel_to_client',
        'created_by',
        'updated_by',
    ];

    // Cast 'gallery' JSON field to an array
    protected $casts = [
        'gallery' => 'array',
        'travel_to_client' => 'boolean',
    ];

    // Define the relationship with the User model
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Define the relationship with the User model for created_by
    public function creator()
    {
        return $this->belongsTo(User::class, 'created_by');
    }

    // Define the relationship with the User model for updated_by
    public function updater()
    {
        return $this->belongsTo(User::class, 'updated_by');
    }
}