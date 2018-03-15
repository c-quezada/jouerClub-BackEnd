<?php
namespace App\Http\Controllers\Maintenance;

use App\Maintenance;
use Illuminate\Http\Request;
use App\Http\Controllers\ApiController;

class MaintenanceController extends ApiController
{
    public function index()
    {    
        $maintenance = Maintenance::all();
        return $this->showAll($maintenance);
    }

    public function store(MaintenanceRequest $request)
    {
        $fields                  = $request->all();
        $fields['observations']  = ucwords($request->observations);
        $fields['status']        = $request->status;
        $fields['facility_id']   = $request->facility_id;
        
        $Maintenance = Maintenance::create($fields);
        return $this->showOne($Maintenance, 201);
    }

    public function show(Maintenance $maintenance)
    {
        return $this->showOne($maintenance);        
    }

    public function update(Request $request, Maintenance $maintenance)
    {

        if ($request->has('observations')) {
            $maintenance->observations = $request->observations;
        }

        if ($request->has('status')) {
            $maintenance->status = $request->status;
        }

        if (!$maintenance->isDirty()) {
            return $this->errorResponse('Se debe especificar al menos un valor diferente para actualizar', 422);
        }

        $maintenance->save();
        return $this->showOne($maintenance);
    }

    public function destroy(Maintenance $maintenance)
    {
        $maintenance->delete();
        return $this->showOne($maintenance);
    }
}
