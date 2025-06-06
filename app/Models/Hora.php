<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Hora
 * 
 * @property int $id
 * @property string $nombre
 * @property string $turno
 * @property Carbon $hd
 * @property Carbon $hh
 *
 * @package App\Models
 */
class Hora extends Model
{
	protected $table = 'horas';
	public $timestamps = false;

	protected $casts = [
		'hd' => 'datetime',
		'hh' => 'datetime'
	];

	protected $fillable = [
		'nombre',
		'turno',
		'hd',
		'hh'
	];
}
