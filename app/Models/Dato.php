<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Dato
 *
 * @property $id
 * @property $name
 * @property $years
 * @property $document
 * @property $alergias
 * @property $nameparent
 * @property $numparent
 * @property $namedoctor
 * @property $numdoctor
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Dato extends Model
{
    
    static $rules = [
		'name' => 'required',
		'years' => 'required',
		'document' => 'required',
		'alergias' => 'required',
		'nameparent' => 'required',
		'numparent' => 'required',
		'namedoctor' => 'required',
		'numdoctor' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['name','years','document','alergias','nameparent','numparent','namedoctor','numdoctor'];



}
