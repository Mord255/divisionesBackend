<?php

namespace App;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class divisionesModel extends Model{
    protected $table = "divisiones";

    public static function crearDivision($nombre,$id_division_superior,$nivel,$colaboradores,$embajador){
        $sql = "INSERT INTO divisiones(divisiones_nombre, divisiones_id_superior, divisiones_nivel, divisiones_colaboradores, divisiones_nombreEmbajador) VALUES (?,?,?,?,?);";
        $result= DB::select($sql,[$nombre,$id_division_superior,$nivel,$colaboradores,$embajador]);
        return $result;
    }

    public static function mostrarDivision($id){
        $sql = "SELECT * FROM divisiones WHERE divisiones_id = ?;";
        $result= DB::select($sql,[$id]);
        return $result;
    }

    public static function editarDivision($nombre,$id_division_superior,$nivel,$colaboradores,$embajador,$idDivision){
        $sql = "UPDATE divisiones SET divisiones_nombre=?,divisiones_id_superior=?,divisiones_nivel=?,divisiones_colaboradores=?,divisiones_nombreEmbajador=? WHERE divisiones_id = ?;";
        $result= DB::select($sql,[$nombre,$id_division_superior,$nivel,$colaboradores,$embajador,$idDivision]);
        return $result;
    }

    public static function eliminarDivision($id){
        $sql = "DELETE FROM divisiones WHERE divisiones_id = ?;";
        $result= DB::select($sql,[$id]);
        return $result;
    }

    public static function listarDivisiones(){
        $sql = "SELECT * FROM divisiones;";
        $result= DB::select($sql);
        return $result;
    }

    public static function listarSubDivisiones($idDivision){
        $sql = "SELECT * FROM divisiones WHERE divisiones_id_superior = ?;";
        $result= DB::select($sql,[$idDivision]);
        return $result;
    }
}
