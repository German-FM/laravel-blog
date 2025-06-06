<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Ciclosuperior
 * 
 * @property int $id
 * @property int $id_cursos
 * @property int $id_orientaciones
 *
 * @package App\Models
 */
class Ciclosuperior extends Model
{
	protected $table = 'ciclosuperior';
	public $timestamps = false;

	protected $casts = [
		'id_cursos' => 'int',
		'id_orientaciones' => 'int'
	];

	protected $fillable = [
		'id_cursos',
		'id_orientaciones'
	];
}
