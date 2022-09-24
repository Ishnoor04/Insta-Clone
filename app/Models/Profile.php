<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $guarded = [];
    public function user() {
        return $this->belongsTo(User::class);
    }
    public function profileImage() {
        $imagePath = ($this->image) ? $this->image : 'profile/iNDmZ04X3fF047fq6Q2mYh9IEi5KIp0P2jGp3xsj.webp';
        return '/storage/' . $imagePath;
    }

    public function followers(){
        return $this->belongsToMany(User::class);
    }
}
