<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegistrationController extends Controller
{
   
    public function showForm()
    {
        return view('register'); 
    }

    
    public function handleFormSubmission(Request $request)
    {
        
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'password' => 'required|string|min:6|confirmed',
        ]);

        
        return redirect()->route('register.success')->with('user', $validatedData);
    }

   
    public function success()
    {
        $user = session('user');
        return view('success', compact('user')); 
    }
}
