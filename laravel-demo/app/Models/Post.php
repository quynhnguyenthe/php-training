<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';
    protected $table = 'posts';
    public $timestamps = false;
    protected $dateFormat = 'd-m-Y';
    protected $fillable = [];
    protected $guarded = ['id'];

    public function author()
    {
        return $this->hasOne(Author::class, 'id', 'author');
    }
}
