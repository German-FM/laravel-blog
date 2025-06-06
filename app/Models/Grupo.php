<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Grupo
 * 
 * @property int $id
 * @property int $nombre
 * @property int $id_cursos
 *
 * @package App\Models
 */
class Grupo extends Model
{
	protected $table = 'grupos';
	public $timestamps = false;

	protected $casts = [
		'nombre' => 'int',
		'id_cursos' => 'int'
	];

	protected $fillable = [
		'nombre',
		'id_cursos'
	];
}
