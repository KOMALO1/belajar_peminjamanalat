<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Peminjam extends Model
{
    //
    protected $fillable = ["user_id"];
    
    public function User(){
    
    return $this->belongsTo(User::class);
}


}