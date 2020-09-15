<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use \DateTimeInterface;

class Risiken extends Model
{
    use SoftDeletes;

    public $table = 'risikens';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public static $searchable = [
        'eaid',
        'risiko',
        'url',
        'source',
    ];

    protected $fillable = [
        'eaid',
        'risiko',
        'url',
        'source',
        'auswirkung_brutto',
        'auswirkung_netto',
        'eintrittswahrscheinlichkeit_brutto',
        'eintrittswahrscheinlichkeit_netto',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }
}
