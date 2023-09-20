<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// Mailing
use App\Mail\ContactanosMail;
use Illuminate\Support\Facades\Mail;

class ContactanosController extends Controller
{
    public function index() {

    }

    public function store(Request $request) {
        // Usar el facade Mail para enviar el correo a una dirección con especificada y una clase Mailable
        Mail::to('manuelhm1993@gmail.com')->cc('manuel_hm1993@hotmail.com')->send(new ContactanosMail);

        return "Mensaje enviado";
    }
}
