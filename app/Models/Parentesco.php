<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Parentesco
 * 
 * @property int $id
 * @property string $parentesco
 *
 * @package App\Models
 */
class Parentesco extends Model
{
	protected $table = 'parentesco';
	public $timestamps = false;

	protected $fillable = [
		'parentesco'
	];
}
