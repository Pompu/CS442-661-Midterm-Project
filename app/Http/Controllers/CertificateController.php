<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class CertificateController extends Controller
{
    public function index(Request $request)
    {
        return view('myevents.certificate');
    }

    public function uploadImage(Request $request)
    {

        if ($request->hasFile('certificate')) {
            $fileName = Auth::user()->id;
            $path = $request->file('certificate')->storeAs('certificate_images',$fileName, 'public');
            $request->user()->image_path = $path;
        }

        $request->user()->save();
        return Redirect::route('myevents.certificate');
    }
}
