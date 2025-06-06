<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Revistum
 * 
 * @property int $id
 * @property int $cupof
 * @property Carbon $fd
 * @property Carbon $fh
 * @property int $id_tipousuario
 * @property int $secuencia
 * @property string $situacion
 *
 * @package App\Models
 */
class Revistum extends Model
{
	protected $table = 'revista';
	public $timestamps = false;

	protected $casts = [
		'cupof' => 'int',
		'fd' => 'datetime',
		'fh' => 'datetime',
		'id_tipousuario' => 'int',
		'secuencia' => 'int'
	];

	protected $fillable = [
		'cupof',
		'fd',
		'fh',
		'id_tipousuario',
		'secuencia',
		'situacion'
	];
}
