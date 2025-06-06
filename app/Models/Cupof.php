<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Cupof
 * 
 * @property int $cupof
 * @property string $turno
 * @property int $hsmodcar
 * @property int $id_materias
 * @property int $id_cursos
 * @property string $estado
 * @property string $funcion
 * @property string $cargo
 * @property int $id_grupos
 *
 * @package App\Models
 */
class Cupof extends Model
{
	protected $table = 'cupof';
	protected $primaryKey = 'cupof';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'cupof' => 'int',
		'hsmodcar' => 'int',
		'id_materias' => 'int',
		'id_cursos' => 'int',
		'id_grupos' => 'int'
	];

	protected $fillable = [
		'turno',
		'hsmodcar',
		'id_materias',
		'id_cursos',
		'estado',
		'funcion',
		'cargo',
		'id_grupos'
	];
}
