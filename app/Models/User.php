<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'image',
        'classe',
        'question1',
        'question2',
        'question3',
        'question4',
        'question5',
        'question6',
        'question7',
        'question8',
        'question9',
        'question10',
        'question11',
        'question12',
        'question13',
        'question14',
        'question15',
        'question16',
        'question17',
        'question18',
        'dars1',
        'dars2',
        'dars3',
        'dars4',
        'dars5',
        'dars6',
        'dars7',
        'dars8',
        'dars9',
        'dars10',
        'dars11',
        'dars12',
        'dars13',
        'dars14',
        'dars15',
        'dars16',
        'dars17',
        'dars18',
        'dars19',
        'dars20',
        'dars21',
        'dars22',
        'dars23',
        'dars24',
        'dars25',
        'dars26',
        'dars27',
        'dars28',
      'dars2_1',
      'dars2_2',
      'dars2_3',
      'dars2_4',
      'dars2_5',
      'dars2_6',
      'dars2_7',
      'dars2_8',
      'dars2_9',
      'dars2_10',
      'dars2_11',
      'dars2_12',
      'dars2_13',
      'dars2_14',
      'dars2_15',
      'dars2_16',
      'dars2_17',
      'dars2_18',
      'dars2_19',
      'dars2_20',
      'dars2_21',
      'dars2_22',
      'dars2_23',
      'dars2_24',
      'dars2_25',
      'dars2_26',
      'dars2_27',
      'dars2_28',
      'dars2_29',
      'dars2_30',
      'dars2_31',
        
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function dars2(){
        return $this->hasMany('App\Models\Dars2');
    }
}
