<?php

namespace App\Http\Controllers;

use App\Models\Empleado;
use Illuminate\Http\Request;

class EmpleadoController extends Controller
{
    public function index()
        {
            if(request()->ajax()) {
                return datatables()->of(Empleado::select('*'))
                ->addColumn('action', 'empleado-action')
                ->rawColumns(['action'])
                ->addIndexColumn()
                ->make(true);
            }
            return view('index');
        }
     
        public function store(Request $request)
        {  
      
            $empleadoId = $request->id;
      
            $empleado   =   Empleado::updateOrCreate(
                        [
                         'id' => $empleadoId
                        ],
                        [
                        'nombre' => $request->nombre, 
                        'correo' => $request->correo,
                        'contrasena' => $request->contrasena
                        ]);    
                              
            return Response()->json($empleado);
        }
     
        public function edit(Request $request)
        {   
            $where = array('id' => $request->id);
            $empleado  = Empleado::where($where)->first();
           
            return Response()->json($empleado);
        }
     
        public function destroy(Request $request)
        {
            $empleado = Empleado::where('id',$request->id)->delete();
           
            return Response()->json($empleado);
        }
}
