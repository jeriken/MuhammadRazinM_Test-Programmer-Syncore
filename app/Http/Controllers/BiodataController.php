<?php

namespace App\Http\Controllers;

use App\Models\Biodata;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BiodataController extends Controller
{
    public function tambahbio()
    {
        return view('tambahbio');
    }

    public function actiontambahbio(Request $request)
    {
        $request['user_id'] = Auth::id();
        Biodata::create($request->all());

        return redirect('/edit');
    }


    public function editbio()
    {
        return view('editbio');
    }

    public function actionedit(Request $request)
    {
        $activity = Biodata::where('user_id', Auth::id());
        $activity->update($request->all());
        return redirect('/');
    }
}
