<?php

namespace App\Models;

use Laravel\Scout\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
    protected $guarded = [];
    use HasFactory, Searchable;
    public function toSearchableArray()
    {
        return [
            'judul' => $this->judul,
            'isi' => $this->isi
        ];
    }
}
