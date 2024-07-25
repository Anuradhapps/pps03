<?php

namespace App\Http\Controllers;

use App\Helpers\SeasonHelper;
use Illuminate\Http\Request;
use App\Models\CommonData;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
class CommonDataController extends Controller
{
    public function create()
    {
        $users = User::all();
        $currentSeason = SeasonHelper::getCurrentSeason();

        // Check if common data for the current season already exists
        $existingCommonData = CommonData::where('user_id',Auth::id())->exists();
        if($existingCommonData){
            return view('pest_data.create');
        }
        return view('common_data.create', compact('users', 'existingCommonData', 'currentSeason'));
    }

    public function store(Request $request)
    {
        // Validate the incoming request
        $validated = $request->validate([
            'user_id' => 'required|exists:users,id',
            'district' => 'required|string',
            'agrarian_service_center' => 'required|string',
            'village' => 'required|string',
            'latitude' => 'required|string',
            'longitude' => 'required|string',
            'variety' => 'required|string',
            'established_method' => 'required|string',
        ]);

        $currentSeason = SeasonHelper::getCurrentSeason();

        // Check if common data for the given user and season already exists
        $existingCommonData = CommonData::where('user_id', $validated['user_id'])
                                        ->where('season', $currentSeason)
                                        ->exists();

        if ($existingCommonData) {
            return redirect()->route('commondata.create')
                             ->with('error', 'Common data for this user and season already exists.');
        }

        // Create the common data entry
        CommonData::create([
            'user_id' => $validated['user_id'],
            'season' => $currentSeason,
            'district' => $validated['district'],
            'agrarian_service_center' => $validated['agrarian_service_center'],
            'village' => $validated['village'],
            'latitude' => $validated['latitude'],
            'longitude' => $validated['longitude'],
            'variety' => $validated['variety'],
            'established_method' => $validated['established_method'],
        ]);

        return redirect()->route('commondata.create')->with('success', 'Common data stored successfully.');
    }
}
