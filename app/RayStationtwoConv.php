<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use \DateTimeInterface;

class RayStationtwoConv extends Model
{
    use SoftDeletes;

    public $table = 'ray_stationtwo_convs';

    public static $searchable = [
        'medizingeraet',
    ];

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'source_ip',
        'dest_ip',
        'protokoll',
        'medizingeraet',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }
}
