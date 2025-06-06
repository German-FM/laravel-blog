<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Materia
 * 
 * @property int $id
 * @property string $nombre
 * @property string $abreviatura
 * @property string $estado
 * @property string $resumen
 *
 * @package App\Models
 */
class Materia extends Model
{
	protected $table = 'materias';
	public $timestamps = false;

	protected $fillable = [
		'nombre',
		'abreviatura',
		'estado',
		'resumen'
	];
}
