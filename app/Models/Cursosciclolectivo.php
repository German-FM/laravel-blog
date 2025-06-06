<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Cursosciclolectivo
 * 
 * @property int $id
 * @property string $estado
 * @property int $id_cursos
 * @property Carbon $ciclolectivo
 *
 * @package App\Models
 */
class Cursosciclolectivo extends Model
{
	protected $table = 'cursosciclolectivo';
	public $timestamps = false;

	protected $casts = [
		'id_cursos' => 'int',
		'ciclolectivo' => 'datetime'
	];

	protected $fillable = [
		'estado',
		'id_cursos',
		'ciclolectivo'
	];
}
