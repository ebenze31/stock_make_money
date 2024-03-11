<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\Models\Business_category;
use App\Models\Business_sub_category;
use Illuminate\Http\Request;

class Business_categoryController extends Controller
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
            $business_category = Business_category::where('name', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $business_category = Business_category::latest()->paginate($perPage);
        }

        return view('business_category.index', compact('business_category'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('business_category.create');
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
        
        $requestData = $request->all();
        
        Business_category::create($requestData);

        return redirect('business_category')->with('flash_message', 'Business_category added!');
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
        $business_category = Business_category::findOrFail($id);

        return view('business_category.show', compact('business_category'));
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
        $business_category = Business_category::findOrFail($id);

        return view('business_category.edit', compact('business_category'));
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
        
        $business_category = Business_category::findOrFail($id);
        $business_category->update($requestData);

        return redirect('business_category')->with('flash_message', 'Business_category updated!');
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
        Business_category::destroy($id);

        return redirect('business_category')->with('flash_message', 'Business_category deleted!');
    }

    function show_business_category(){
        $data = Business_category::get();
        return $data ;
    }

    function show_business_sub_category($category){
        $data_category = Business_category::where('name',$category)->first();
        $data = Business_sub_category::where('business_category_id',$data_category->id)->get();
        return $data ;
    }
}
