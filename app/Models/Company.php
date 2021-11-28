<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Company extends Model
{
    use HasFactory;

    use HasFactory;
    use HasTranslations;

    public $translatable = ['name'];
    protected $table = 'companies';
    protected $guarded = [];

}
