<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 20 Jun 2018 22:01:03 +0300.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class PatientsEnrollmentDetail
 * 
 * @property int $id
 * @property int $patient_meta_data_id
 * @property string $enrollment_number
 * @property string $deleted_at
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * 
 * @property \App\Models\PatientsMetaDatum $patients_meta_datum
 *
 * @package App\Models
 */
class PatientsEnrollmentDetail extends Eloquent
{
	use \Illuminate\Database\Eloquent\SoftDeletes;

	protected $casts = [
		'patient_meta_data_id' => 'int'
	];

	protected $fillable = [
		'patient_meta_data_id',
		'enrollment_number'
	];

	public function patients_meta_datum()
	{
		return $this->belongsTo(\App\Models\PatientsMetaDatum::class, 'patient_meta_data_id');
	}
}
