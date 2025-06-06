<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Tipousuario
 * 
 * @property int $id
 * @property int $id_persona
 * @property int $id_tipopersona
 * 
 * @property Tipopersona $tipopersona
 * @property Persona $persona
 *
 * @package App\Models
 */
class Tipousuario extends Model
{
	protected $table = 'tipousuario';
	public $timestamps = false;

	protected $casts = [
		'id_persona' => 'int',
		'id_tipopersona' => 'int'
	];

	protected $fillable = [
		'id_persona',
		'id_tipopersona'
	];

	public function tipopersona()
	{
		return $this->belongsTo(Tipopersona::class, 'id_tipopersona');
	}

	public function persona()
	{
		return $this->belongsTo(Persona::class, 'id_persona');
	}
}
