<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\DataForm;

class FormController extends Controller
{
    public function index()
    {
        return view('form');
    }
    public function submit(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nama' => 'required|string|min:3|max:50',
            'email' => 'required|email',
            'alamat' => 'required|string|max:500',
            'jenis_kelamin' => 'required|string|in:L,P',
            'nilai' => 'required|numeric|between:2.50,99.99',
            'gambar' => 'required|image|mimes:png,jpg,jpeg|max:2048',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // $file = $request->file('gambar')->store('public/gambar');

        return redirect()->route('form')->with('success', 'Data berhasil dikirim');
        
    }
}
