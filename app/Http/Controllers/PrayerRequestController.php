<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\PrayerRequestRequest;

use App\Models\PrayerRequest;

class PrayerRequestController extends Controller
{

    public function create()
    {
        return view('prayer-request.index');
    }

     public function store(PrayerRequestRequest $request)
    {
        PrayerRequest::create($request->validated());
        return redirect()->route("prayer.request")->with("success","Thank you! Your prayer request has been submitted.");
    }

}





