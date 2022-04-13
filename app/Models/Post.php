<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Post extends Model
{
    use HasFactory,HasApiTokens,Notifiable;
    
    
    protected $fillable = [
        'Name','Surname','idNumber','mobileNumber','emailAddress','dateOfBirth','language','interest'
    ];

    //set interests
    public function setInterestAttribute($value)
    {
        $this->attributes['interest'] = json_encode($value);
    }

    /*//get interest
    public function getInterestAttribute($value)
    {
        return $this->attributes['interest'] = json_decode($value);
    }*/

    public function setDateOfBirth($value1){
        $this->attributes['dateOfBirth'] = Carbon::createFromFormat('Y-m-d',$value1)->format(format:'Y-m-d');
    }
}
