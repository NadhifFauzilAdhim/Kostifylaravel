<?php

namespace App\Models;

use Dotenv\Repository\Adapter\GuardedWriter;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;
    protected $table = 'comments';
    protected $guarded =['id'];

    public function listing(){
        return $this->belongsTo(Listing::class);
    }
    public function user(){
        return $this->belongsTo(User::class);
    }

}
