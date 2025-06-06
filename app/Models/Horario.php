<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Horario
 * 
 * @property int $id
 * @property string $dia
 * @property int $id_horas
 * @property int $id_salones
 * @property int $cupof
 *
 * @package App\Models
 */
class Horario extends Model
{
	protected $table = 'horarios';
	public $timestamps = false;

	protected $casts = [
		'id_horas' => 'int',
		'id_salones' => 'int',
		'cupof' => 'int'
	];

	protected $fillable = [
		'dia',
		'id_horas',
		'id_salones',
		'cupof'
	];
}
