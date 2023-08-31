<?php

namespace App\Yantrana\Components\User\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Yantrana\Base\BaseModel;

class Testimonial extends BaseModel
{
    use HasFactory;
    protected $table = 'testimonials';
    // protected $fillable = [
    //     'name',
    //     'company',
    //     'designation',
    //     'message',
    //     'user_id'
    // ];
    protected $primaryKey = 'id';
    protected $UIDKey = 'id';
}
