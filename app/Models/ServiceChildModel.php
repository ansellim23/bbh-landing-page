<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServiceChildModel extends Model
{
    use HasFactory;
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'service_childID',
        'service_child_name',
        'service_child_description',
        'service_child_parentID',
        'service_child_status',
        'service_child_img',
    ];
}
