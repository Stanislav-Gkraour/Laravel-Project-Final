<?php

namespace App\Http\Controllers;

use App\Models\Mail;
use Illuminate\Http\Request;

class MailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mail = Mail::all();
        return view('email', compact('mail'));
    }

    
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Mail  $mail
     * @return \Illuminate\Http\Response
     */


    public function store(Request $request){
        request()->validate([
            'name'=>['required'],
            'email'=>['required'],
            'subject'=>['required'],
        ]);
            $mail = new Mail();
            $mail->name = $request->name;
            $mail->email = $request->email;
            $mail->subject = $request->subject;
            $mail->save();
            return redirect()->back();
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Email  $email
     * @return \Illuminate\Http\Response
     */
    public function show(Mail $mail)
    {

        return view('backoffice.mail.showEmail',compact('mail'));
    }

    // public function showbetter(Mail $mail)
    // {

    //     return view('email',compact('mail'));
    // }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Mail  $mail
     * @return \Illuminate\Http\Response
     */
    public function destroy(Mail $mail)
    {
        $mail->delete();
        return redirect()->back();
    }
}
