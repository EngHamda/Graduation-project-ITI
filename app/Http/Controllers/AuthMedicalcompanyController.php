<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Commands\ConfirmRequestCommand;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Auth;
use App\MedicalCompany;
use App\Advertisementsrequest;
use App\Commands\StoreAdCommand;
use App\Advertisement;
class AuthMedicalcompanyController extends Controller
{
    public function __construct()
    {
//$this->middleware('auth');
    }

  

    public function index()
    {
        $id = auth()->guard('medicalcompany')->user()->id;
        $requests = Advertisementsrequest::where('medicalcompany_id', '=', $id)->get();
        $allAds = Advertisement::where('medicalcompany_id', '=', $id)->get();
        return view('medicalcompany.index', compact('requests', 'id','allAds'));

    }


    public function logout()
    {

        auth()->guard('medicalcompany')->logout();
        return redirect('/');
    }


   


  /*/  public function login()
    {

        return view('medicalcompany.auth.medicalcompanylogin');
    }
*/

    public function login(Request $request)
    {


        $validator = Validator::make($request->all(), [
                    'email' => 'required|max:255',
                    'password' => 'required',
                ]);




         if ($validator->fails()) {
             //return redirect('/')
                        //->withErrors($validator)
                        //->withInput()
                       // ->with('error_code', 5);
       

                   return redirect('/')->with('status', 'Not Valid Email OR Password');    

          }



        $credientials = ['email' => $request->get('email'), 'password' => $request->get('password')];
        if (auth()->guard('medicalcompany')->attempt($credientials)) {
            return redirect('/medicalcompany');
        } else {
            //return redirect('/')
              //  ->withErrors(['error' => 'login invalid'])
                //->withInput();
return redirect('/')->with('status', 'Email doesnt Exist'); 

        }


    }



}
