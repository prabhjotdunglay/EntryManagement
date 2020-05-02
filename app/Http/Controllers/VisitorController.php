<?php

namespace App\Http\Controllers;

use App\Department;
use App\Employee;
use App\Visitor;
use Illuminate\Http\Request;

class VisitorController extends Controller

{
    protected $authkey_message = '199290ATIB9Wi3knox5a8e8b11';

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function index()
    {
        
    }

    public function visitor_extra_details($phone=0){

        if(!$phone){
            return redirect()->route('visitor.new');
        }

        $employee = Employee::all();
        $department = Department::all();

        return view('newvisitor')->with('phone',$phone)->with('department', $department)->with('employee', $employee);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('/visitor');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function send(Request $request)
    {
        $name = "Visitor";
        $phone = $request->phone;
        $otp = rand(1000, 9999);

        $visit = new Visitor();
        $visit->phone = $phone;
        $visit->otp = $otp;

        $visit->save();

       
        $url="http://my.msgwow.com/api/otp.php";
        $postData = array(
            'authkey' => "$this->authkey_message",
            'mobile' => "$phone",
            'message' => urlencode("Hi $name \nYour OTP is $otp \nHave a productive meeting"),
            'sender' => "DEntry",
            'otp' => "$otp"
        );
        $paramArr['url'] = $url;
        $paramArr['postData'] = $postData;
        $this->sendRequest($paramArr);

        //

        return redirect()->route('visitor.extra_details', ['phone'=>$phone]);

        //pass phone number field with help of compact
    }

    public function sendRequest($param){
        $url = $param['url'];
        $postData = $param['postData'];

        $ch = curl_init();
        curl_setopt_array($ch, array(
            CURLOPT_URL => $url,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_POST => true,
            CURLOPT_POSTFIELDS => $postData
            //,CURLOPT_FOLLOWLOCATION => true
        ));


        // Ignore SSL certificate verification
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);


        //get response
        $output = curl_exec($ch);

        //Print error if any
        if(curl_errno($ch))
        {
            return curl_error($ch);
        }

        curl_close($ch);

        return true;
    }



    public function store(Request $request)
    {
        $this->validate($request,[
            'phone' => 'string',
            'otp' => 'numeric',
        ]);

        $visitor = Visitor::where('phone',$request->phone)->where('otp',$request->otp)->first();

        // For Verify otp
        if(isset($request->otp))
        {
            if($request->otp == isset($visitor->otp))
            {

                $departme = new Visitor();
                $departme->company_id = $request->company_id;
                $departme->department_id = $request->department_id;
                $departme->employee_id = $request->employee_id;
                    $departme->save();
       //                $departments = Department::select('id','name')
        //                    ->where('company_id', $this->company_id() )->get();
        //                $employees = Employee::select('id','name','department_id')
        //                    ->where('company_id', $this->company_id())
            //                    ->get();
                $visitor->otp_verified = 1;

                if($visitor->save()){
                    return view('/thankyou');
                }else{
                    return redirect('/visitor')->with('Status', 'Details not matched');
                }

            }
            else{
                
                 $employee = Employee::all();
                $department = Department::all();


                return view('newvisitor')->with('phone',$request->phone)->with('department', $department)->with('employee', $employee)->with('Status', 'Details not matched');
            }

        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
