<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Package;
use Illuminate\Http\Request;

class PackageController extends Controller
{
    public function subscriberIndex(){
        $subscribers = Package::whereNotNull('is_session_count')->take('3')->get();
        return view('admin.packages.subscriber.index', compact('subscribers'));
    }

    public function subscriberEdit(Package $package)
    {
        return view('admin.packages.subscriber.edit', compact('package'));
    }

    public function subscriberUpdate(Request $request ,Package $package){

        $data = $request->all();
        $package->update($data);
        return redirect()->route('subscriber.index');
    }

    public function subscriberDestroy(Package $package)
    {
        $package->delete();
        return redirect()->back()->with('danger','subscriber has been deleted successfully');
    }




    public function packageIndex(){
        $packages = Package::whereNull('is_session_count')->get();
        return view('admin.packages.packages-option.index', compact('packages'));
    }

    public function packageEdit(Package $package){
        return view('admin.packages.packages-option.edit', compact('package'));
    }

    public function packageUpdate(Request $request ,Package $package){

        $data = $request->all();

        $package->update($data);
        return redirect()->route('package.index');
    }

    public function destroy(Package $package)
    {
        $package->delete();
        return redirect()->back()->with('danger','Package has been deleted successfully');
    }

    }
