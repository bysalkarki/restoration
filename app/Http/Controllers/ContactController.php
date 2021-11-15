<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index(Request $request)
    {
        $contacts = Contact::query()
            ->when($request->keyword, fn ($query) => $query->where('name', 'like', "%$request->keyword%")
                ->orWhere('email', 'like', "%$request->keyword%"))
            ->latest()
            ->paginate(10);
        return view('contact.index', compact('contacts'));
    }

    public function destroy(Request $request, $id)
    {
        $contact = Contact::findorfail($id);
        try {
            $contact->delete();
            request()->session()->flash('success', 'data deleted successfuly');
            return redirect()->route('contact.index');
        } catch (\Throwable $th) {
            request()->session()->flash('error', 'data cannot be deleted');
            return redirect()->route('contact.index');
        }
    }
}
