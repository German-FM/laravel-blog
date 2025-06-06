<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Persona
 * 
 * @property int $id
 * @property int $dni
 * @property string $apellido
 * @property string $nombre
 * @property Carbon $fechan
 * @property string $sexo
 * @property string $domicilio
 * @property int $id_localidad
 * @property int $pass
 * @property string $telefono
 * @property string $mail
 * 
 * @property Collection|Tipousuario[] $tipousuarios
 *
 * @package App\Models
 */
class Persona extends Model
{
	protected $table = 'persona';
	public $timestamps = false;

	protected $casts = [
		'dni' => 'int',
		'fechan' => 'datetime',
		'id_localidad' => 'int',
		'pass' => 'int'
	];

	protected $fillable = [
		'dni',
		'apellido',
		'nombre',
		'fechan',
		'sexo',
		'domicilio',
		'id_localidad',
		'pass',
		'telefono',
		'mail'
	];

	public function tipousuarios()
	{
		return $this->hasMany(Tipousuario::class, 'id_persona');
	}
}
