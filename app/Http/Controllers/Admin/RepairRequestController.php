<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\PrinterBrand;
use App\Models\PrinterModel;
use App\Models\RepairRequest;
use Illuminate\Http\Request;

class RepairRequestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $requests = RepairRequest::query()->paginate();
        return view('admin.repair_request.index', [
            'repair_requests' => RepairRequest::query()->paginate()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('site.repair_request', [
            'brands' => PrinterBrand::all(),
            'models' => PrinterModel::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $repairRequest = RepairRequest::create([
            'brand_id' => $request->input('brand'),
            'model_id' => $request->input('model'),
            'client_name' => $request->input('client_name'),
            'phone' => $request->input('phone'),
            'address' => $request->input('address'),
            'issue_description' => $request->input('issue_description'),
        ]);

    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\RepairRequest  $repairRequest
     * @return \Illuminate\Http\Response
     */
    public function show(RepairRequest $repairRequest)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\RepairRequest  $repairRequest
     * @return \Illuminate\Http\Response
     */
    public function edit(RepairRequest $repairRequest)
    {
        return view('admin.repair_request.edit', [
            'repair_requests' => RepairRequest::all(),
            'repair_request' => $repairRequest,
            'brands' => PrinterBrand::all(),
            'models' => PrinterModel::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\RepairRequest  $repairRequest
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, RepairRequest $repairRequest)
    {
        $repairRequest->update([
            'brand_id' => $request->input('brand'),
            'model_id' => $request->input('model'),
            'client_name' => $request->input('client_name'),
            'phone' => $request->input('phone'),
            'address' => $request->input('address'),
            'issue_description' => $request->input('issue_description'),
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\RepairRequest  $repairRequest
     * @return \Illuminate\Http\Response
     */
    public function destroy(RepairRequest $repairRequest)
    {
        $repairRequest->delete();
    }
}
