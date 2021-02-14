<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function content1()
    {
        return view('home.content1');
    }

    public function poinsTrouble()
    {
        return view('home.trouble.poins');
    }

    public function listTrouble()
    {
        return view('home.trouble.list');
    }

    public function poinsExcellence()
    {
        return view('home.excellence.poins');
    }

    public function titleBgExcellence()
    {
        return view('home.excellence.titleBg');
    }

    public function poinsBgBotLogic()
    {
        return view('home.botLogic.poins');
    }

    public function titleDescBgBotLogic()
    {
        return view('home.botLogic.titleDesc');
    }

    public function poinsBenefits()
    {
        return view('home.benefits.poins');
    }

    public function titleDescBenefits()
    {
        return view('home.benefits.titleDesc');
    }


    public function poinsPackage()
    {
        return view('home.package.poins');
    }

    public function contentPackage()
    {
        return view('home.package.package');
    }

    public function slider()
    {
        return view('home.slider');
    }

    // public function tes()
    // {
    //     return view('widget.successAllert');
    // }
}
