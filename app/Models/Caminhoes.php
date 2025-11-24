<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Caminhoes extends Model
{
    use HasFactory;

    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'plate',
        'brand',
        'model',
        'year',
        'capacity_kg',
        'is_active',
        'last_inspection',
        'location_lat',
        'location_lng',
    ];

    protected $casts = [
        'id' => 'string',
        'year' => 'integer',
        'capacity_kg' => 'decimal:2',
        'is_active' => 'boolean',
        'last_inspection' => 'date',
        'location_lat' => 'decimal:7',
        'location_lng' => 'decimal:7',
    ];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            if (empty($model->{$model->getKeyName()})) {
                $model->{$model->getKeyName()} = (string) Str::uuid();
            }
        });
    }
}
