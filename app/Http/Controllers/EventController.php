<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Http\Requests\EventStoreRequest;
use App\Http\Requests\EventUpdateRequest;
use Illuminate\Http\Request;

class EventController extends Controller
{
    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $events = Event::select('id', 'title', 'image', 'publishStatus', 'date')
            ->when($request->keyword, fn ($query) => $query->where('title', 'like', "%$request->keyword%"))
            ->latest()
            ->paginate(10);

        return view('event.index', compact('events'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $event = new event();
        return view('event.form', compact('event'));
    }

    /**
     * @param \App\Http\Requests\EventStoreRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(EventStoreRequest $request)
    {
        try {
            $event = Event::create($request->validated());
            $request->session()->flash('success', 'event Added successfully');
            return redirect()->route('event.index');
        } catch (\Throwable $th) {
            $request->session()->flash('error', $th->getMessage());
            return back()->withInput();
        }
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\event $event
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, Event $event)
    {
        return view('event.show', compact('event'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\event $event
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, Event $event)
    {
        return view('event.form', compact('event'));
    }

    /**
     * @param \App\Http\Requests\EventUpdateRequest $request
     * @param \App\event $event
     * @return \Illuminate\Http\Response
     */
    public function update(EventUpdateRequest $request, Event $event)
    {
        try {
            $event->update($request->validated());
            $request->session()->flash('success', $event->title . " updated successfully");
            return redirect()->route('event.index');
        } catch (\Throwable $th) {
            $request->session()->flash('error', $th->getMessage());
            return back()->withInput();
        }
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\event $event
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Event $event)
    {
        $event->delete();

        return redirect()->route('event.index');
    }
}
