<?php
namespace App\Http\Controllers\Maintenance;

use App\Maintenance;
use Illuminate\Http\Request;
use App\Http\Requests\MaintenanceRequest;
use App\Http\Controllers\ApiController;
use App\Transformers\MaintenanceTransformer;

class MaintenanceController extends ApiController
{
    public function __construct()
    {
        parent::__construct();
        $this->middleware('transform.input:' . MaintenanceTransformer::class)->only(['store', 'update']);
    }

    public function index()
    {
        $maintenance = Maintenance::all();
        return $this->showAll($maintenance);
    }

    public function store(MaintenanceRequest $request)
    {
        $fields                  = $request->all();
        $fields['observations']  = ucwords($request->observations);
        $fields['mark']          = $request->mark;
        $fields['instalacion']   = $request->facility_id;

        /*
        'identificador' => (int)$maintenance->id,
        'observaciones' => (string)$maintenance->observations,
        'calificacion' => (int)$maintenance->mark,
        'instalacion' => (int)$maintenance->facility_id,
        */

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

        if ($request->has('mark')) {
            $maintenance->mark = $request->mark;
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
