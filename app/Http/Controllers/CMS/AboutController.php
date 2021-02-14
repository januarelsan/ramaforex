<?php

namespace App\Http\Controllers\CMS;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AboutController extends Controller
{
    public function listMedsos()
    {
        return view('cms.about.listMedsos');
    }

    public function addMedsos()
    {
        return view('about.addMedsos');
    }

    public function editMedsos()
    {
        return view('about.editMedsos');
    }

    public function personalData()
    {
        return view('about.personal');
    }
    public function desc()
    {
        return view('about.description');
    }
}
