<?php

namespace App\Http\Controllers;

use App\Models\Facility;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

use App\Helper\Helper;

class FacilityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $facilities = Facility::all();
        return view('admin.facility.facility', compact('facilities'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.facility.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = [
            'facility_name' => ['required'],
            'facility_type' => ['required', Rule::in('hotel', 'room')],
            'facility_price' => ['required'],
            'facility_image' => ['image', 'file', 'max:3024']
        ];
        $validatedData = $request->validate($rules);
        $validatedData['random_str'] = Str::random(30);
        $validatedData['facility_image'] = $request->file('facility_image')->store('public/uploaded-images');
        $validatedData['facility_image'] = substr($validatedData['facility_image'], 7);
        Facility::create($validatedData);
        Helper::createLog("Create a new Facility : " . $validatedData['facility_name']);
        return redirect(route('facility.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Facility  $facility
     * @return \Illuminate\Http\Response
     */
    public function show(Facility $facility)
    {
        $data = Facility::where('id', $facility->id)->get();
        // 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Facility  $facility
     * @return \Illuminate\Http\Response
     */
    public function edit(Facility $facility)
    {
        return view('admin.facility.edit', compact('facility'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Facility  $facility
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Facility $facility)
    {
        $rules = [
            'facility_name' => ['required'],
            'facility_type' => ['required', Rule::in('hotel', 'room')],
            'facility_price' => ['required'],
            'facility_image' => ['image', 'file', 'max:3024']
        ];
        $validatedData = $request->validate($rules);
        if ($request->file('facility_image')) {
            if ($facility->facility_image) {
                Storage::delete($facility->facility_image);
            }
            $validatedData['facility_image'] = $request->file('facility_image')->store('public/uploaded-images');
            $validatedData['facility_image'] = substr($validatedData['facility_image'], 7);
        }
        Facility::where('id', $facility->id)->update($validatedData);
        Helper::createLog("Update Facility : " . $facility->facility_image . " to : " . $validatedData['facility_name']);
        return redirect(route('facility.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Facility  $facility
     * @return \Illuminate\Http\Response
     */
    public function destroy(Facility $facility)
    {
        $oldFacility = $facility_facility_name;
        Facility::destroy($facility->id);
        Helper::createLog("Delete Facility : " . $oldFacility);
        return redirect(route('facility.index'));
    }
}
