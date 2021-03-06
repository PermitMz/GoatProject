<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Goat extends Model
{
    use HasFactory;

    public function user(){
        return $this->belongsTo(User::class,'user_id', 'id');
    }

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = 'goatId';

    protected $fillable = [
        'goatName','sex','gene','image','colour','dateOfBirth','weightOfBirth','arrivalDate',
        'fatherId','fatherGoatName','fatherGene','motherId','motherGoatName','motherGene'
    ];

    public function MotherBreedingHistory() {
        return $this->hasMany(MotherBreedingHistory::class);
    }
}
