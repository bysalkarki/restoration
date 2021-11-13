<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        $data =  $this->validate($request, [
            'name' => ['required'],
            'email' => ['required', 'email'],
            'message' => ['required', 'min:3', 'max:400'],
        ]);
        try {
            Contact::create($data);
            return response()->json($data['name'] . ' Our representative will contact you soon');
        } catch (\Throwable $th) {
            return response()->json('message');
        }
    }
}
