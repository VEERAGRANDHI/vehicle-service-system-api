<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ServiceAppointment;

class ServiceAppointmentsController extends Controller
{
    public function index()
    {
        return ServiceAppointment::all();
    }

    public function store(Request $request)
    {
        try {
            $appointment = ServiceAppointment::create($request->all());
            return response()->json($appointment, 201);
        } catch (\Exception $e) {
            return response()->json([
                "error" => $e->getMessage()
            ], 500);
        }
    }

    public function show(string $id)
    {
        $service = ServiceAppointment::find($id);
        if ($service) {
            return response()->json($service, 200);
        } else {
            return response()->json([
                "error" => "Failed to find the service appointment"
            ], 404);
        }
    }

    public function update(Request $request, string $id)
    {
        try {
            $appointment = ServiceAppointment::find($id);
            $appointment->update($request->all());
            return response()->json($appointment, 200);
        } catch (\Exception $e) {
            return response()->json([
                "error" => $e->getMessage()
            ], 500);
        }
    }

    public function destroy(string $id)
    {
        $appointment = ServiceAppointment::find($id);
        if ($appointment) {
            $appointment->delete();
            return response()->json($appointment, 200);
        }
        return response()->json([
            "error" => "Failed to delete the appointment"
        ], 500);

    }
}
