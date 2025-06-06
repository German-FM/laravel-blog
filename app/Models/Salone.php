<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Salone
 * 
 * @property int $id_salones
 * @property int $piso
 * @property int $numero
 * @property string $tipo
 * @property int $capacidad
 * @property string $corriente
 * @property string $televisor
 * @property string $pizarron
 * @property string $ubicacion
 *
 * @package App\Models
 */
class Salone extends Model
{
	protected $table = 'salones';
	protected $primaryKey = 'id_salones';
	public $timestamps = false;

	protected $casts = [
		'piso' => 'int',
		'numero' => 'int',
		'capacidad' => 'int'
	];

	protected $fillable = [
		'piso',
		'numero',
		'tipo',
		'capacidad',
		'corriente',
		'televisor',
		'pizarron',
		'ubicacion'
	];
}
