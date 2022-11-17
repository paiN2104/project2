<?php

namespace App\Models;

use App\Models\Writer;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Book extends Model
{
    use HasFactory;

    protected $fillable = [
        "title",
        "synopsis",
        "coverphoto",
        "writer_name"
    ];

    public function writer() : BelongsTo
    {
        return $this->belongsTo(Writer::class);
    }
}
