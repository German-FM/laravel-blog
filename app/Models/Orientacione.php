<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Orientacione
 * 
 * @property int $id
 * @property string $nombre
 * @property string $titulo
 *
 * @package App\Models
 */
class Orientacione extends Model
{
	protected $table = 'orientaciones';
	public $timestamps = false;

	protected $fillable = [
		'nombre',
		'titulo'
	];
}
