<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Server extends Model
{
    use HasFactory;
    public $timestamps=false;
    protected $table = 'servers';
    protected $primaryKey = 'id';
    protected $fillable = [
        'name',
        'ip',
        'password',
        'domain',
        'provider',
        'duedate',
        'datecreation',
        'price',
        'methodepayment',
        'namesrv',
        'account',
        'comment',

];
}
