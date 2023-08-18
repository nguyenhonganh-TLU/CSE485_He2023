<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Channel;

class ChannelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $channel = $request->search ? Channel::where('id', 'REGEXP', $request->search)->simplePaginate(5) : Channel::latest()->simplePaginate(5);

        return view('index', compact('channel'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // $request->validate([
        //     // 'id' => 'required',
        //     'title' => 'required',
        //     'editor' => 'reuqired',
        //     'issn' => 'reuqired',

        // ]);

        $channel = new Channel;
        $channel->id = $request->id;
        $channel->channelName = $request->channelName;
        $channel->description = $request->description;
        $channel->subscribersCount = $request->subscribersCount;
        $channel->url = $request->url;
        $channel->save();
        
        
        return redirect()->route('channels.index')->with('success', 'Channel Added successfully.');
        
    }

    /**
     * Display the specified resource.
     */
    public function show(Channel $channel)
    {
        return view('show', compact('channel'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Channel $channel)
    {
        return view('edit', compact('channel'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,string $id)
    {
        // $request->validate([
            
        //     'title' => 'required',
        //     'editor' => 'required',
        //     'issn' => 'reuqired',
        // ]);
    
        $channel = Channel::find($request->hidden_id);
        // $airplane->id = $request->id;
        $channel->channelName = $request->channelName;
        $channel->description = $request->description;
        $channel->subscribersCount = $request->subscribersCount;
        $channel->url = $request->url;
        $channel->save();
        
              
        return redirect()->route('channels.index')->with('success', 'Channel Data has been updated successfully');
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Channel $channel)
    {
        $channel->delete();
        return redirect()->route('channels.index')->with('success', 'Channel Data deleted successfully');
    }
}
