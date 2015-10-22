<?php namespace WhichLicense\Http\Controllers;

use WhichLicense\License;

class LicenseController extends Controller
{
    public function choose()
    {
        $licenses = License::all();

        return view('index')
            ->with('licenses', $licenses);
    }

    public function show($license)
    {
        return view('license')
            ->with('license', $license);
    }
}
