<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\Models\Business;
use Illuminate\Http\Request;
use Auth;

class BusinessController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        $keyword = $request->get('search');
        $perPage = 25;

        if (!empty($keyword)) {
            $business = Business::where('name', 'LIKE', "%$keyword%")
                ->orWhere('detail', 'LIKE', "%$keyword%")
                ->orWhere('photo', 'LIKE', "%$keyword%")
                ->orWhere('host', 'LIKE', "%$keyword%")
                ->orWhere('member', 'LIKE', "%$keyword%")
                ->orWhere('category', 'LIKE', "%$keyword%")
                ->orWhere('sub_category', 'LIKE', "%$keyword%")
                ->orWhere('income', 'LIKE', "%$keyword%")
                ->orWhere('expenses', 'LIKE', "%$keyword%")
                ->orWhere('total_cost', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $business = Business::latest()->paginate($perPage);
        }

        return view('business.index', compact('business'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        $user = Auth::user();
        $user_id = $user->id ;

        $your_business = Business::where('host',$user_id)->get();
        $count = count($your_business);

        if($count >= 3){
            return redirect('/home');
        }
        else{
            return view('business.create');
        }

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        
        $user = Auth::user();
        $user_id = $user->id ;

        $your_business = Business::where('host',$user_id)->get();
        $count = count($your_business);

        if($count >= 3){
            return redirect('/404');
        }
        else{
            $requestData = $request->all();
                if ($request->hasFile('photo')) {
                $requestData['photo'] = $request->file('photo')
                    ->store('uploads', 'public');
            }

            Business::create($requestData);

            // return redirect('business')->with('flash_message', 'Business added!');
            return redirect('/home');
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        $business = Business::findOrFail($id);

        return view('business.show', compact('business'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $business = Business::findOrFail($id);

        return view('business.edit', compact('business'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(Request $request, $id)
    {
        
        $requestData = $request->all();
                if ($request->hasFile('photo')) {
            $requestData['photo'] = $request->file('photo')
                ->store('uploads', 'public');
        }

        $business = Business::findOrFail($id);
        $business->update($requestData);

        // return redirect('business')->with('flash_message', 'Business updated!');
        return redirect('/home');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        Business::destroy($id);

        return redirect('business')->with('flash_message', 'Business deleted!');
    }

    function get_data_your_business($user_id){

        $your_business = Business::where('host',$user_id)->get();

        return $your_business;
    }
}
