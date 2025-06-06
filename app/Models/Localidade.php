<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Localidade
 * 
 * @property int $id
 * @property string $localidad
 * @property int $cp
 * @property string $id_provincias
 *
 * @package App\Models
 */
class Localidade extends Model
{
	protected $table = 'localidades';
	public $timestamps = false;

	protected $casts = [
		'cp' => 'int'
	];

	protected $fillable = [
		'localidad',
		'cp',
		'id_provincias'
	];
}
