<?php

namespace App\Http\Controllers;

use App\Http\Requests\VideoStoreRequest;
use App\Http\Requests\VideoUpdateRequest;
use App\Models\Video;
use Illuminate\Http\Request;

class VideoController extends Controller
{
    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $videos = Video::all();

        return view('video.index', compact('videos'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        return view('video.create');
    }

    /**
     * @param \App\Http\Requests\VideoStoreRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(VideoStoreRequest $request)
    {
        $video = Video::create($request->validated());

        $request->session()->flash('video.id', $video->id);

        return redirect()->route('video.index');
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Video $video
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, Video $video)
    {
        return view('video.show', compact('video'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Video $video
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, Video $video)
    {
        return view('video.edit', compact('video'));
    }

    /**
     * @param \App\Http\Requests\VideoUpdateRequest $request
     * @param \App\Models\Video $video
     * @return \Illuminate\Http\Response
     */
    public function update(VideoUpdateRequest $request, Video $video)
    {
        $video->update($request->validated());

        $request->session()->flash('video.id', $video->id);

        return redirect()->route('video.index');
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Video $video
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Video $video)
    {
        $video->delete();

        return redirect()->route('video.index');
    }
}
