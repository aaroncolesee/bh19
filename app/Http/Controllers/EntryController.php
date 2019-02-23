<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Auth;
use Carbon\Carbon;

class EntryController extends Controller
{
    public function show()
    {
        //set to 1 for dummy data
        $entry =DB::table('entries')->where('id', 1)->first();
        $activities = DB::table('activity_entry')->where('entry_id', 1)->where('finished', true)
        ->join('activities','activity_entry.activity_id', '=', 'activities.id')
        ->get();

        $day = Carbon::parse($entry->created_at)->format('d');
        $month = Carbon::parse($entry->created_at)->format('F');
        $year = Carbon::parse($entry->created_at)->format('Y');

        return view('entry.view', compact('entry', 'activities', 'day', 'month', 'year'));
    }

    public function update(Request $request)
    {
        $entry = DB::table('entries')->where('id', $request->entry_id)
        ->update(['name' => $request->name]);
        
        return redirect()->back();   
    }
}
