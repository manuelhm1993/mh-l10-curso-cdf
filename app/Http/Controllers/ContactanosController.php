<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// Mailing
use App\Mail\ContactanosMail;
use App\Models\User;
use Illuminate\Support\Facades\Mail;

class ContactanosController extends Controller
{
    public function index() {
        return view('contactanos.index');
    }

    public function store(Request $request) {
        $user = new User;

        $user->name  = $request->name;
        $user->email = $request->email;

        $message = $request->message;

        // Usar el facade Mail para enviar el correo a una dirección con especificada y una clase Mailable
        Mail::to('manuelhm1993@gmail.com')->cc('manuel_hm1993@hotmail.com')->send(new ContactanosMail($user, $message));

        return "Mensaje enviado";
    }
}
