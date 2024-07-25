<?php

namespace App\Http\Controllers;
use App\Helpers\SeasonHelper;
use Illuminate\Http\Request;
use App\Models\CommonData;
use App\Models\PestData;
class PestDataController extends Controller
{
    public function create()
    {
        $commonData = CommonData::where('season', SeasonHelper::getCurrentSeason())->get();
        return view('pest_data.create', compact('commonData'));
    }

    public function store(Request $request)
    {
        PestData::create($request->all());
        return redirect()->route('pestdata.create');
    }

}
