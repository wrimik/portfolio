<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Message;
use App\Http\Controllers\Controller;
use Mail;

class MessageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

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
        $message = Message::create($request->get('Message'));
        //send email
        $this->sendContactResponse($message);
    }

    /**
     * responds to contact form submissions
     * @param Request $request
     * @param $id
     */
    public function sendContactResponse($message)
    {
        $greeting = $this->greeting($message);
        Mail::queue('emails.contact-response', ['greeting' => $greeting], function ($m) use ($message) {
            $m->from('autobot@wrimik.com', 'Mike Wright');
            $m->to($message->email, $message->name)->subject('Thanks!');
        });
    }

    private function greeting($message)
    {
        if(!strlen($message->name))
        {// no name, be nice
            $greeting = 'Hey!';
        }else if(strpos($message->name, ' '))
        { //has spaces, grab first name
            $parts = explode(' ', $message->name);
            $firstName = $parts[0];
            $greeting = "Hey {$firstName}!";
        }else
        { //only included first name I guess

            $greeting = "Hey {$message->name}!";
        }
        return $greeting;
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
