<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use \DateTimeInterface;

class Result extends Model
{
    use SoftDeletes;

    public $table = 'results';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public static $searchable = [
        'name',
        'eaid',
        'ebene',
        'risiko',
        'risikoid',
        'url',
        'source',
    ];

    protected $fillable = [
        'name',
        'eaid',
        'ebene',
        'risiko',
        'risikoid',
        'url',
        'source',
        'auswirkung_netto',
        'auswirkung_brutto',
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
