<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ImageData extends Model
{
    use HasFactory;
    protected $fillable = [
        'type',
        'image',
    ];

    public function image(): string
    {
        return 'storage/' . $this->image;
    }
}
