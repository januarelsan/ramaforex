<?php

namespace App\Http\Controllers\CMS;

use Illuminate\Http\Request;
use App\HomeTrouble;
use App\HomePoinsTrouble;
use App\PoinExcellence;
use App\BenefitPoins;
use App\BotLogicPoins;
use App\Http\Controllers\Controller;

class CmsHomeController extends Controller
{
    public function content1()
    {
        return view('cms.home.content1');
    }

    public function poinsTrouble()
    {
        return view('cms.home.trouble.poins');
    }

    //List Trouble Start
    public function addListTrouble()
    {
        return view('cms.home.trouble.addList');
    }

    public function uploadListTrouble(Request $request)
	{
		$title = $request->title;
		$desc = $request->desc;
		$pic = $request->file('pic');
		$picName = time().'.'.$pic->extension();
		$pic->move(public_path('data_file'),$picName);

		$home_troubles = new HomeTrouble();
		$home_troubles->title =$title;
		$home_troubles->desc =$desc;
		$home_troubles->pic =$picName;
		$home_troubles->save();
		return back()->with('success_add_listTrouble','Success Add');
	}

	public function listTrouble()
    {
		$home_troubles = HomeTrouble::all();
        return view('cms.home.trouble.list',compact('home_troubles'));
    }

    public function editListTrouble($id)
    {
		$home_trouble = HomeTrouble::find($id);
        return view('cms.home.trouble.editList',compact('home_trouble'));
    }

	public function updateListTrouble(Request $request)
	{
		$title = $request->title;
		$desc = $request->desc;
		$pic = $request->file('pic');
		$picName = time().'.'.$pic->extension();
		$pic->move(public_path('data_file'),$picName);

		$home_trouble = HomeTrouble::find($request->id);
		$home_trouble->title = $title;
		$home_trouble->desc = $desc;
		$home_trouble->pic = $picName;
		$home_trouble->save();
		return back()->with('success_edit_listTrouble','Success Edit');
	}

	public function deleteListTrouble($id)
	{
		$home_trouble = HomeTrouble::find($id);
		unlink(public_path('data_file').'/'.$home_trouble->pic);
		$home_trouble->delete();
		return back()->with('success_delete','Data has been Deleted');
	}
    //List Trouble End


     //List Poins Trouble Start
     public function addPoinsTrouble()
     {
         return view('cms.home.trouble.addPoins');
     }

     public function uploadPoinsTrouble(Request $request)
     {
         $poins = $request->poins;
 
         $home_poins_troubles = new HomePoinsTrouble();
         $home_poins_troubles->poins =$poins;
         $home_poins_troubles->save();
         return back()->with('success_add_poinsTrouble','Success Add');
     }

     public function listPoinsTrouble()
    {
		$home_poins_troubles = HomePoinsTrouble::all();
        return view('cms.home.trouble.poins',compact('home_poins_troubles'));
    }

    public function editPoinsTrouble($id)
    {
		$home_poins_trouble = HomePoinsTrouble::find($id);
        return view('cms.home.trouble.editPoins',compact('home_poins_trouble'));
    }

	public function updatePoinsTrouble(Request $request)
	{
		$poins = $request->poins;

		$home_poins_trouble = HomePoinsTrouble::find($request->id);
		$home_poins_trouble->poins = $poins;
		$home_poins_trouble->save();
		return back()->with('success_edit_poinsTrouble','Success Edit');
	}

    public function deletePoinsTrouble($id)
	{
		$home_poins_trouble = HomePoinsTrouble::find($id);
		$home_poins_trouble->delete();
		return back()->with('success_delete_poins','Data has been Deleted');
	}
     //List Poins Trouble End


     //List PoinsExcellence Start
    public function listPoinsExcellence()
    {
		$poin_excellences = PoinExcellence::all();
        return view('cms.home.excellence.poins',compact('poin_excellences'));
    }

    public function addPoinsExcellence()
     {
         return view('cms.home.excellence.addPoins');
     }

    public function uploadPoinsExcellence(Request $request)
	{
		$title = $request->title;
		$desc = $request->desc;
		$icon = $request->file('icon');
		$iconName = time().'.'.$icon->extension();
		$icon->move(public_path('data_file'),$iconName);

		$poin_excellences = new PoinExcellence();
		$poin_excellences->title =$title;
		$poin_excellences->desc =$desc;
		$poin_excellences->icon =$iconName;
		$poin_excellences->save();
		return back()->with('success_add','Success Add');
	}

    public function editPoinsExcellence($id)
    {
		$poin_excellence = PoinExcellence::find($id);
        return view('cms.home.excellence.editPoins',compact('poin_excellence'));
    }

	public function updatePoinsExcellence(Request $request)
	{
		$title = $request->title;
		$desc = $request->desc;
		$icon = $request->file('icon');
		$iconName = time().'.'.$icon->extension();
		$icon->move(public_path('data_file'),$iconName);

		$poin_excellence = PoinExcellence::find($request->id);
		$poin_excellence->title =$title;
		$poin_excellence->desc =$desc;
		$poin_excellence->icon =$iconName;
		$poin_excellence->save();
		return back()->with('success_edit','Success Edit');
	}

    public function deletePoinsExcellence($id)
	{
		$poin_excellence = PoinExcellence::find($id);
		unlink(public_path('data_file').'/'.$poin_excellence->icon);
		$poin_excellence->delete();
		return back()->with('success_delete','Data has been Deleted');
	}
    //List PoinsExcellence End



    //botLogic start
    public function listPoinsBotLogic()
    {
		$bot_logic_poins = BotLogicPoins::all();
        return view('cms.home.botLogic.poins.list',compact('bot_logic_poins'));
    }

    public function addPoinsBotLogic()
    {
        return view('cms.home.botLogic.poins.add');
    }

    public function uploadPoinsBotLogic(Request $request)
	{
		$title = $request->title;
		$img = $request->file('img');
		$imgName = time().'.'.$img->extension();
		$img->move(public_path('data_file'),$imgName);

		$bot_logic_poins = new BotLogicPoins();
		$bot_logic_poins->title =$title;
		$bot_logic_poins->img =$imgName;
		$bot_logic_poins->save();
		return back()->with('success_add','Success Add');
	}

    public function editPoinsBotLogic($id)
    {
		$bot_logic_poin = BotLogicPoins::find($id);
        return view('cms.home.botLogic.poins.edit',compact('bot_logic_poin'));
    }

	public function updatePoinsBotLogic(Request $request)
	{
		$title = $request->title;
		$img = $request->file('img');
		$imgName = time().'.'.$img->extension();
		$img->move(public_path('data_file'),$imgName);

		$bot_logic_poin = BotLogicPoins::find($request->id);
		$bot_logic_poin->title = $title;
		$bot_logic_poin->img = $imgName;
		$bot_logic_poin->save();
		return back()->with('success_edit','Success Edit');
	}

	public function deletePoinsBotLogic($id)
	{
		$bot_logic_poin = BotLogicPoins::find($id);
		unlink(public_path('data_file').'/'.$bot_logic_poin->img);
		$bot_logic_poin->delete();
		return back()->with('success_delete','Data has been Deleted');
	}
    //botLogic end






    public function titleBgExcellence()
    {
        return view('cms.home.excellence.titleBg');
    }


    // PoinsBenefits start
    public function listPoinsBenefits()
    {
		$benefit_poins = BenefitPoins::all();
        return view('cms.home.benefits.poins',compact('benefit_poins'));
    }

    public function addPoinsBenefits()
     {
         return view('cms.home.benefits.addBenefits');
     }

    public function uploadPoinsBenefits(Request $request)
	{
		$poins = $request->poins;

		$benefit_poins = new BenefitPoins();
		$benefit_poins->poins =$poins;
		$benefit_poins->save();
		return back()->with('success_add','Success Add');
	}

    public function editPoinsBenefits($id)
    {
		$benefit_poins = BenefitPoins::find($id);
        return view('cms.home.benefits.editBenefits',compact('benefit_poins'));
    }

	public function updatePoinsBenefits(Request $request)
	{
		$poins = $request->poins;

		$benefit_poins = BenefitPoins::find($request->id);
		$benefit_poins->poins =$poins;
		$benefit_poins->save();
		return back()->with('success_edit','Success Edit');
	}

    public function deletePoinsBenefits($id)
	{
		$benefit_poins = BenefitPoins::find($id);
		$benefit_poins->delete();
		return back()->with('success_delete','Data has been Deleted');
	}

    // PoinsBotLogic end


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
