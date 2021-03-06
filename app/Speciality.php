<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laraveldaily\Quickadmin\Observers\UserActionsObserver;




class Speciality extends Model {

    protected $table    = 'speciality';
    
    protected $fillable = ['name'];
    

    public static function boot()
    {
        parent::boot();

        Speciality::observe(new UserActionsObserver);
    }
    
    public function answers() {
        
        return $this->hasMany('\App\Answer');
    }
    
    public function physician() {
        
        return $this->hasMany('\App\Physician_Details');
    }

}
