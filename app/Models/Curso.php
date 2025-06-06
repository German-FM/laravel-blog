<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Curso
 * 
 * @property int $id
 * @property string $division
 * @property int $ano
 * @property string $turno
 *
 * @package App\Models
 */
class Curso extends Model
{
	protected $table = 'cursos';
	public $timestamps = false;

	protected $casts = [
		'ano' => 'int'
	];

	protected $fillable = [
		'division',
		'ano',
		'turno'
	];
}
