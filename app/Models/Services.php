<?php

namespace App\Models;


use Laravel\Scout\Searchable;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Services extends Model
{
    use HasFactory,Sluggable,Searchable;
    public function children()
    {
      return $this->hasMany(Services::class, 'parent_id');
    }
    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }
    public function toSearchableArray()
    {
        return [
            'title' => $this->title,
            'heading' => $this->heading,
        ];
    }
}
