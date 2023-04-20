<?php

namespace App\Http\Controllers;

use App\Models\File;
use App\Models\Collection;
use App\Models\CollectionFile;
use Illuminate\Support\Facades\URL;
use App\Http\Requests\FormCollectionRequest;

class CollectionController extends Controller
{
    public function index()
    {
        return view('users.collection.index',[
            'collections' => Collection::query()
                ->with('collection_files')
                ->orderBy('created_at')
                ->get()
        ]);
    }
    public function create()
    {
        return view('users.collection.create');
    }
    public function store(FormCollectionRequest $request)
    {
       $data = Collection::create([
        'user_id' => auth()->id(),
        'title' => $request->title,
        'description' => $request->description,
        'genre' => $request->genre
       ]);

       if(!empty($data)) {

        foreach ($request->file('files') as $key => $value) {
            $image_name = rand() . '.' . $value->getClientOriginalExtension();
            $value->move(public_path('files/collection/'.$data->user_id), $image_name);
            $file_url = URL::to('/files/collection/'.$data->user_id.'/'.$image_name);

                CollectionFile::create([
                    'uuid' => $data->uuid,
                    'collection_id' => $data->id,
                    'user_id' => $data->user_id,
                    'file_name' => $image_name,
                    'file_url' => $file_url,
                    'order' => $key
                ]);
            }
        return back()->with('status','collection-stored');
        }
    }
}
