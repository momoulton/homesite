<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContactController extends Controller {

    public function __construct() {
        # Put anything here that should happen before any of the other actions
    }

    /**
    * Responds to requests to GET /
    */
    public function getIndex() {
        return view('contact');
    }

    public function postIndex(Request $request) {
      $this->validate(
        $request,
        [
            'email' => 'required|min:4',
            'name' => 'required',
            'comments' => 'required',
        ]
      );

      $email_from = $request->email;
      $name =$request->name;
      $comments = $request->comments;
      $email_to = "mo.moulton22@gmail.com";
      $email_subject = "momoulton.com form submission";

      $email_message = "Form details below.\n\n";

      function clean_string($string) {
        $bad = array("content-type","bcc:","to:","cc:","href");
        return str_replace($bad,"",$string);
      }

      $email_message .= "Name: ".clean_string($name)."\n";
      $email_message .= "Email: ".clean_string($email_from)."\n";
      $email_message .= "Message: ".clean_string($comments)."\n";

      // create email headers
      $headers = 'From: '.$email_from."\r\n".
      'Reply-To: '.$email_from."\r\n" .
      'X-Mailer: PHP/' . phpversion();
      @mail($email_to, $email_subject, $email_message, $headers);

      \Session::flash('flash_message','Your message has been sent.');
      return back();

    }


}
