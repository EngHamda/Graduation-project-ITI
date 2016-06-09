<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Commands\Storepatientprofile;
use App\Commands\Storesurgicalhistory;
use App\Commands\Storeallergies;
use App\Commands\Storeaccedent;
use App\Commands\Storespecialneeds;
use App\Commands\Storefamilyhistory;
use App\Commands\Storebloodtransfer;
use App\Commands\Storeprescription;
use App\Http\Requests;
use App\User;
use App\Commands\Storemiscarriages;
use App\Patientprofile;
use Illuminate\Support\Facades\Session;
class PatientprofilesController extends Controller
{
    



public function insertpatientprofile(Request $request)
{

$patientemailjson=$request->input('patientemailjson');
$patientemailarray  = json_decode($patientemailjson, true);
$email=$patientemailarray[0];


$user=User::where('email',$email)->first();
if($user)
{
$userid=$user->id;
$profile=Patientprofile::where('user_id',$userid)->first();
}
else
{


$Response   = array(
            'success' => '1',
        );
return $Response;

}
if($profile)
{

$profileid=$profile->id;
$pasthistoryjson=$request->input('pasthistoryjson');
$pasthistoryarray  = json_decode($pasthistoryjson, true);
$pasthistoryCount  = count($pasthistoryarray);
$pasthistorydatejson=$request->input('pasthistorydatejson');
$pasthistorydatearray = json_decode($pasthistorydatejson, true);
for($i=0; $i<$pasthistoryCount  ;$i++){
$command=new Storepatientprofile($pasthistorydatearray[$i],$pasthistoryarray[$i],$profileid);
$this->dispatch($command);}
$surgicalhistoryjson=$request->input('surgicalhistoryjson');
$surgicalhistoryarray  = json_decode($surgicalhistoryjson, true);
$surgicalhistorydatejson=$request->input('surgicalhistorydatejson');
$surgicalhistorydatearray  = json_decode($surgicalhistorydatejson, true);
$Count  = count($surgicalhistorydatearray);
for($c=0; $c<$Count  ;$c++){
$command=new Storesurgicalhistory($surgicalhistoryarray[$c],$surgicalhistorydatearray[$c],$profileid);
$this->dispatch($command);}
$allergiesjson=$request->input('allergiesjson');
$allergiesarray  = json_decode($allergiesjson, true);
$allergiesdatejson=$request->input('allergiesdatejson');
$Count  = count($allergiesarray);
$allergiesdatearray  = json_decode($allergiesdatejson, true);
for($c=0; $c<$Count  ;$c++){
$command=new Storeallergies($allergiesarray [$c],$allergiesdatearray[$c],$profileid);
$this->dispatch($command);}
$accedentjson=$request->input('accedentjson');
$accedentarray  = json_decode($accedentjson, true);
$accedentdatejson=$request->input('accedentdatejson');
$Count  = count($accedentarray);
$accedentdatearray  = json_decode($accedentdatejson, true);
for($c=0; $c<$Count  ;$c++){
$command=new Storeaccedent($accedentarray [$c],$accedentdatearray[$c],$profileid);
$this->dispatch($command);}
$specialneedsjson=$request->input('specialneedsjson');
$specialneedsarray  = json_decode($specialneedsjson, true);
$Count  = count($specialneedsarray);
for($c=0; $c<$Count  ;$c++)
{
$command=new Storespecialneeds($specialneedsarray [$c],$profileid);
$this->dispatch($command);
}
$familyhistoryjson=$request->input('familyhistoryjson');
$familyhistoryarray  = json_decode($familyhistoryjson, true);
$Count  = count($familyhistoryarray);
for($c=0; $c<$Count  ;$c++)
{
$command=new Storefamilyhistory($familyhistoryarray [$c],$profileid);
$this->dispatch($command);
}

$bloodtransferjson=$request->input('bloodtransferjson');
$bloodtransferarray  = json_decode($bloodtransferjson, true);
$bloodtransferdatejson=$request->input('bloodtransferdatejson');
$Count  = count($bloodtransferarray);
$bloodtransferdatearray  = json_decode($bloodtransferdatejson, true);
for($c=0; $c<$Count  ;$c++)
{
$command=new Storebloodtransfer($bloodtransferarray [$c],$bloodtransferdatearray[$c],$profileid);
$this->dispatch($command);
}
$misjson=$request->input('misjson');
$misarray  = json_decode($misjson, true);
$misdatejson=$request->input('misdatejson');
$Count  = count($misarray);
$misdatearray  = json_decode($misdatejson, true);
for($c=0; $c<$Count  ;$c++)
{
$command=new Storemiscarriages($misarray [$c],$misdatearray[$c],$profileid);
$this->dispatch($command);
}
$Response   = array(
            'success' => '2',
        );
return $Response;
}








}


public function show()
{



}



/*
public function insertprescription(Request $request)
{



$Response   = array(
            'success' => '1',
        );

$drug=$request->input('drug');
$frequency=$request->input('frequency');
$duration=$request->input('duration');
$date=$request->input('date');



$command=new Storeprescription($drug,$frequency,$duration,$date);

$this->dispatch($command);





}
*/
/*


public function sendemailtoprescriptionpage(Request $request)
{

$patientemailjson=$request->input('patientemailjson');
$patientemailarray  = json_decode($patientemailjson, true);
$email=$patientemailarray[0];


$user=User::where('email',$email)->first();
$userid=$user->id;
return $userid;


}





public function showprescription($id)
{
$user=User::where('id',$id)->first();
$email=$user->email;
return view('prescription', compact('email'));
//return redirect('/show')->with('message', 'Login Failed');

}

*/

}
