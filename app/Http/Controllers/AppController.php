<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Mail;
use App\user;
use Lang;

class AppController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('welcome')->with('newMessages', 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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

    public function sendEmail(Request $request)
    {
        $to = $request->to;
        $cc = $request->cc;
        $bcc = $request->bcc;
        $subject = $request->subject;
        $name = "Example";
        $content = $request->content;
        $data = [   
                    'to' => $to, 
                    'cc' => $cc, 
                    'bcc' => $bcc, 
                    'subject' => $subject,
                    'name' => $name,
                    'content' => $content
                ];

        Mail::send('email', ['data' => $data], function ($m) use ($data) {
            $m->from('hiddenjustice309@gmail.com', 'Your Application');
            $m->to($data['to'], $data['name']);
            $m->sender('hiddenjustice309@gmail.com', $data['name']);
            $m->cc($data['cc'], $data['name']);
            $m->bcc($data['bcc'], $data['name']);
            $m->subject($data['subject']);
        });
        return View('email')->with('data', $data);
        //return view('email', ['data' => $data]);
    }

}
