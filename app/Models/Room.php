<?php

namespace App\Models;

use App\Models\Facility;
use App\Models\RoomType;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Room extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function roomType()
    {
        return $this->belongsTo(RoomType::class);
    }

    public function facility()
    {
        return $this->belongsTo(Facility::class);
    }
}
