<?php

namespace Cms\Modules\Core\Models;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $table = "contacts";

    protected $fillable = [
        'fullname',
        'company_name',
        'email',
        'phone',
        'description',
        'memo',
        'reservation_time',
        'status'
    ];

    protected $hidden = [];
}

