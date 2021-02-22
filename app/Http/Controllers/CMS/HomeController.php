<?php

namespace App\Http\Controllers\CMS;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function content1()
    {
        return view('cms.home.content1');
    }

    public function poinsTrouble()
    {
        return view('cms.home.trouble.poins');
    }

    public function listTrouble()
    {
        return view('cms.home.trouble.list');
    }

    public function poinsExcellence()
    {
        return view('cms.home.excellence.poins');
    }

    public function titleBgExcellence()
    {
        return view('cms.home.excellence.titleBg');
    }

    public function poinsBgBotLogic()
    {
        return view('cms.home.botLogic.poins');
    }

    public function titleDescBgBotLogic()
    {
        return view('cms.home.botLogic.titleDesc');
    }

    public function poinsBenefits()
    {
        return view('cms.home.benefits.poins');
    }

    public function titleDescBenefits()
    {
        return view('cms.home.benefits.titleDesc');
    }


    public function poinsPackage()
    {
        return view('cms.home.package.poins');
    }

    public function contentPackage()
    {
        return view('cms.home.package.package');
    }

    public function slider()
    {
        return view('cms.home.slider');
    }

    // public function tes()
    // {
    //     return view('widget.successAllert');
    // }
}
