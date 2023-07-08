<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

abstract class AutoUuidModel extends Model
{
    protected static function boot()
    {
        parent::boot();
        static::creating(function ($model) {
            $model->uuid = generateUuid();
        });
    }
}
