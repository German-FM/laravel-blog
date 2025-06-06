<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Padresalumno
 * 
 * @property int $id
 * @property int $id_personaalumno
 * @property int $id_personatutor
 * @property int $id_parentesco
 *
 * @package App\Models
 */
class Padresalumno extends Model
{
	protected $table = 'padresalumnos';
	public $timestamps = false;

	protected $casts = [
		'id_personaalumno' => 'int',
		'id_personatutor' => 'int',
		'id_parentesco' => 'int'
	];

	protected $fillable = [
		'id_personaalumno',
		'id_personatutor',
		'id_parentesco'
	];
}
