<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Medicine extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'medicines';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'active_substance_id',
        'manufacturer_id',
        'name',
        'price'
    ];

    /**
     * Get the active substance associated with the medicine.
     */
    public function activeSubstance()
    {
        return $this->belongsTo(ActiveSubstance::class);
    }

    /**
     * Get the active substance associated with the medicine.
     */
    public function manufacturer()
    {
        return $this->belongsTo(Manufacturer::class);
    }
}
