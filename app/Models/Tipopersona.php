<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Tipopersona
 * 
 * @property int $id
 * @property string $tipo
 * 
 * @property Collection|Tipousuario[] $tipousuarios
 *
 * @package App\Models
 */
class Tipopersona extends Model
{
	protected $table = 'tipopersona';
	public $timestamps = false;

	protected $fillable = [
		'tipo'
	];

	public function tipousuarios()
	{
		return $this->hasMany(Tipousuario::class, 'id_tipopersona');
	}
}
