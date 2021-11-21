<?php
use App\divisionesModel;
use Illuminate\Database\Seeder;

class divisionesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){

        divisionesModel::truncate();

        for ( $i=1 ; $i <= 50 ; $i++ ) {
            //operador ternario condicional para asignar un id de division superior en funcion al numero de secuencia de bucle en que se encuentre
            $idDivisionSuperior = $i > 1 && $i <= 10 ? 1 : ($i > 10 && $i <= 20 ? 2 : ($i > 20 && $i <= 30 ? 3 : ($i > 30 && $i <= 40 ? 4 : ($i > 40 && $i <= 50 ? 5 : null) ) ) );
            divisionesModel::create([
                'divisiones_nombre' => "nombre division $i",
                'divisiones_id_superior' => $idDivisionSuperior,
                'divisiones_nivel' => rand(1,9) ,
                'divisiones_colaboradores' => rand(1,9) ,
                'divisiones_nombreEmbajador' => "nombre embajador $i"
            ]);
        }
    }
}
