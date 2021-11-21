<?php

namespace App\Http\Controllers;
use Http;
use DB;
use App\divisionesModel;
use Illuminate\Http\Request;

class divisionesController extends Controller{

    public function crearDivision(){
        $data = divisionesModel::crearDivision(request('nombre'),request('id_superior'),request('nivel'),request('colaboradores'),request('embajador'));
        if ($data == []) {
            return json_encode("Division Registrada Exitosamente");
        }else{
            return json_encode($data);
        }
    }

    public function editarDivision($id){
        $data = divisionesModel::editarDivision(request('nombre'),request('id_superior'),request('nivel'),request('colaboradores'),request('embajador'),$id);
        if ($data == []) {
            return json_encode("Division Actualizada Exitosamente");
        }else{
            return json_encode($data);
        }
    }

    public function eliminarDivision($id){
        $data = divisionesModel::eliminarDivision($id);
        if ($data == []) {
            return json_encode("Division Eliminada Exitosamente");
        }else{
            return json_encode($data);
        }
    }

    public function mostrarDivision($id){
        $data = ['data' => divisionesModel::mostrarDivision($id)];
        return json_encode($data);
    }

    public function listarDivisiones(){
        $data = ['data' => divisionesModel::listarDivisiones()];
        return json_encode($data);
    }

    public function listarSubDivisiones($idDivision){
        $data = ['data' => divisionesModel::listarSubDivisiones($idDivision)];
        return json_encode($data);
    }
    
}
