<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @method static paginate(int $int)
 * @method static create(array $data)
 */
class Product extends Model
{
	use HasFactory;

	protected $fillable = [
			'name',
			'description',
			'price'
	];
}
