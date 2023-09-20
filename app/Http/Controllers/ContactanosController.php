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
        // Usar el facade Mail para enviar el correo a una dirección con especificada y una clase Mailable
        Mail::to(env('MAIL_TO_ADDRESS', 'manuel@mhenriquez.com'))->send(new ContactanosMail($request->all()));

        return "Mensaje enviado";
    }
}
