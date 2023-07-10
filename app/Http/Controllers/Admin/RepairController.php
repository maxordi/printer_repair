<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\RestoreRequest;
use App\Models\Client;
use App\Models\Master;
use App\Models\Printer;
use App\Models\PrinterBrand;
use App\Models\PrinterModel;
use App\Models\Repair;
use App\Models\RepairRequest;
use App\Models\RepairStatus;
use Illuminate\Http\Request;

class RepairController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $requests = Repair::query()->paginate();
        return view('admin.repairs.index', [
            'repairs' => Repair::query()->paginate()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function create()
    {
        return view('admin.repairs.create', [
            'printers' => Printer::with('printerBrand', 'printerModel')->get(),
            'clients' => Client::all(),
            'masters' => Master::all(),
            'repairStatuses' => RepairStatus::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(RestoreRequest $request)
    {
        $repair = Repair::create([
            'printer_id' => $request->input('printer'),
            'client_id' => $request->input('client'),
            'master_id' => $request->input('master'),
            'description' => $request->input('description'),
            'repair_status_id' => $request->input('repairStatus'),
            'price' => $request->input('price'),
            'completion_date' => $request->input('completion_date'),
        ]);
        return redirect()->route('success');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Repair  $repair
     * @return \Illuminate\Http\Response
     */
    public function show(Repair $repair)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Repair  $repair
     * @return \Illuminate\Http\Response
     */
    public function edit(Repair $repair)
    {
        return view('admin.repairs.edit', [
            'repair' => $repair,
            'printers' => Printer::with('printerBrand', 'printerModel')->get(),
            'clients' => Client::all(),
            'masters' => Master::all(),
            'repairStatuses' => RepairStatus::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Repair  $repair
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Repair $repair)
    {
        return redirect()->route('success');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Repair  $repair
     * @return \Illuminate\Http\Response
     */
    public function destroy(Repair $repair)
    {
        $repair->delete();
        return redirect()->route('success');
    }
}
