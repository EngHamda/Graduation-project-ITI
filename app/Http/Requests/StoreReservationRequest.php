<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class StoreReservationRequest extends Request
{
    //
    public function authorize() {
        
        return true;//anyone can create Reservation
        
    }
    public function rules() {
        

        return [




 'patient-name'=>'required',
'clinic-name'=>'required',
'physician-name'=>'required',
'reservation_day'=>'required',
'reservation_time'=>'required',





];        
    }
}
