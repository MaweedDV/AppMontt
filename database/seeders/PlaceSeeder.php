<?php

namespace Database\Seeders;

use App\Models\Place;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PlaceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $place = new Place();
        $place->description = 'Alcaldía';
        $place->save();

        $place1 = new Place();
        $place1->description = 'Administración Municipal';
        $place1->save();

        $place2 = new Place();
        $place2->description = 'Dirección Juridica';
        $place2->save();

        $place3 = new Place();
        $place3->description = 'Direccion de Administración y Finanzas';
        $place3->save();

        $place4 = new Place();
        $place4->description = 'Direccion de Desarrollo Comunitario';
        $place4->save();

        $place5 = new Place();
        $place5->description = 'Direccion de Medio Ambiente Aseo y Ornato (Dimao)';
        $place5->save();

        $place6 = new Place();
        $place6->description = 'Direccion de Transito';
        $place6->save();

        $place7 = new Place();
        $place7->description = 'Direccion de Operaciones';
        $place7->save();

        $place8 = new Place();
        $place8->description = 'Direccion de Obras Municipales (Dom)';
        $place8->save();

        $place9 = new Place();
        $place9->description = 'Direccion de Control';
        $place9->save();

        $place10 = new Place();
        $place10->description = 'Direccion de Seguridad Publica';
        $place10->save();

        $place11 = new Place();
        $place11->description = 'Direccion de Turismo';
        $place11->save();

        $place12 = new Place();
        $place12->description = 'Direccion de Servicios Traspasados';
        $place12->save();

        $place13 = new Place();
        $place13->description = 'Oficina Territorial Alerce';
        $place13->save();

        $place14 = new Place();
        $place14->description = 'Oficina Territorial Mirasol';
        $place14->save();

        $place15 = new Place();
        $place15->description = 'Oficina Territorial Ruta Tepual';
        $place15->save();

        $place16 = new Place();
        $place16->description = 'Oficina Territorial Rural';
        $place16->save();

        $place17 = new Place();
        $place17->description = 'Primer Juzgado';
        $place17->save();

        $place18 = new Place();
        $place18->description = 'Segundo Juzgado';
        $place18->save();

        $place19 = new Place();
        $place19->description = 'Tercer Juzgado';
        $place19->save();

        $place20 = new Place();
        $place20->description = 'Secretaria Municipal';
        $place20->save();

        $place21 = new Place();
        $place21->description = 'Secretaria Comunal de Planificacion Secplan';
        $place21->save();


    }
}
