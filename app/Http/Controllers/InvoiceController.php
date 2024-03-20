<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InvoiceController extends Controller
{
    public function index()
    {
        $invoices = Invoice::all();
        return view('invoices.index', compact('invoices'));
    }

    public function create()
    {
        return view('invoices.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'additionalCharges' => 'required|numeric',
            'totalAmount' => 'required|numeric',
            'repair_id' => 'required|exists:repairs,id',
        ]);

        Invoice::create($request->all());

        return redirect()->route('invoices.index')
            ->with('success', 'Invoice created successfully.');
    }

    public function show(Invoice $invoice)
    {
        return view('invoices.show', compact('invoice'));
    }

    public function edit(Invoice $invoice)
    {
        return view('invoices.edit', compact('invoice'));
    }

    public function update(Request $request, Invoice $invoice)
    {
        $request->validate([
            'additionalCharges' => 'required|numeric',
            'totalAmount' => 'required|numeric',
            'repair_id' => 'required|exists:repairs,id',
        ]);

        $invoice->update($request->all());

        return redirect()->route('invoices.index')
            ->with('success', 'Invoice updated successfully');
    }

    public function destroy(Invoice $invoice)
    {
        $invoice->delete();

        return redirect()->route('invoices.index')
            ->with('success', 'Invoice deleted successfully');
    }
}
