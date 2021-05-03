<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use FontLib\Table\Type\name;
use Illuminate\Http\Request;
use App\Models\Interest;
use Illuminate\Http\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;


class InterestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $interests = Interest::where('type', 'interest')->get();
        return view('admin.interest.index', compact('interests'));
    }

    public function hobbyIndex(){
        $interests = Interest::where('type', 'hobbies')->get();
        return view('admin.interest.hobbyindex', compact('interests'));
    }

    public function getInterest()
    {
        $interests = Interest::where('type', 'interest')->get();
        $Hobbies = Interest::where('type', 'hobbies')->get();
        $interestHtml = '';
        $hobbyHtml = '';
       foreach ($interests as $interest)
       {
           $interestHtml .= '<option>'.$interest->name.'</option>';
       }
        foreach ($Hobbies as $Hobby)
        {
            $hobbyHtml .= '<option>'.$Hobby->name.'</option>';
        }
       $html = [
           'interest'=>$interestHtml,
           'hobby'=>$hobbyHtml,
       ];

        return response()->json($html);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.interest.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $request->validate([
            'name' => ['required'],
            'type' => ['required'],
            'image' => ['nullable'],
            ]);

            $data = $request->all();

                //featured image
                if($request->file('image'))  {
                    $image = $request->file('image');
                    $imageName =Str::random(8) . '.' . $image->getClientOriginalExtension();
                    Storage::putFileAs('public' , $image, $imageName);
                    $data['image'] = $imageName;
                }else{
                    $data['image'] = [];
                }

            $interest = Interest::create($data);
            if($interest->type == 'interest'){
                return redirect()->route('interest.index')->with('success', 'Interest has been added successfully');
            }else{
                return redirect()->route('hobby.index')->with('success', 'Interest has been added successfully');
            }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $interest = Interest::find($id);
        return view('admin.interest.edit', compact('interest'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Interest $interest, $id)
    {
        $request->validate([
            'name' => ['nullable'],
            'type' => ['nullable'],
            'image' => ['nullable'],
            ]);

            $interest = $interest::find($id);
            $data = $request->all();

                //featured image
            if($request->file('image'))  {
                Storage::delete('public' . $interest->image);
                $image = $request->file('image');
                $imageName =Str::random(8) . '.' . $image->getClientOriginalExtension();
                Storage::putFileAs('public' , $image, $imageName);
                $data['image'] = $imageName;
            }else{
                $image = $request->imageName;
            }
            $interest = $interest->update($data);
        return redirect()->route('interest.index')->with('success', 'Interest has been updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Interest $interest, $id)
    {
        if ($request->file) {
            Storage::delete('public/' . $interest->file);
        }
        $interest = Interest::find($id);
        $interest->delete();
        return redirect()->route('interest.index')->with('success', 'Interest has been deleted successfully');
    }
}
