<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use \DateTimeInterface;

class Medizingerate extends Model
{
    use SoftDeletes;

    public $table = 'medizingerates';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public static $searchable = [
        'name',
        'ip',
        'dns_suffix',
        'mac',
        'ansprechpartner',
        'notizen',
    ];

    protected $fillable = [
        'name',
        'ip',
        'dns_suffix',
        'mac',
        'ansprechpartner',
        'notizen',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }
}
