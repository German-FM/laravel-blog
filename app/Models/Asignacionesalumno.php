<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Asignacionesalumno
 * 
 * @property int $id
 * @property int $id_cursosciclolectivo
 * @property int $id_tipousuario
 * @property int $id_grupos
 * @property string $estado
 *
 * @package App\Models
 */
class Asignacionesalumno extends Model
{
	protected $table = 'asignacionesalumnos';
	public $timestamps = false;

	protected $casts = [
		'id_cursosciclolectivo' => 'int',
		'id_tipousuario' => 'int',
		'id_grupos' => 'int'
	];

	protected $fillable = [
		'id_cursosciclolectivo',
		'id_tipousuario',
		'id_grupos',
		'estado'
	];
}
