<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\TipoDeVehiculo;

class TipoDeVehiculosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        /* $data = [
            ['COD_PROV' => '1', 'DESC_PROV' => 'AUTOMOVIL'],
            ['COD_PROV' => '2', 'DESC_PROV' => 'STATION WAGON'],
            ['COD_PROV' => '3', 'DESC_PROV' => 'CAMIONETA'],
            ['COD_PROV' => '5', 'DESC_PROV' => 'MINIBUS'],
            ['COD_PROV' => '7', 'DESC_PROV' => 'JEEP'],
            ['COD_PROV' => '8', 'DESC_PROV' => 'FURGON'],
            ['COD_PROV' => '9', 'DESC_PROV' => 'C. ARRASTRE INF. 1750 KG'],
            ['COD_PROV' => '10', 'DESC_PROV' => 'CASA RODANTE AUTOMOVIL'],
            ['COD_PROV' => '11', 'DESC_PROV' => 'MOTOCICLETA'],
            ['COD_PROV' => '12', 'DESC_PROV' => 'BUS'],
            ['COD_PROV' => '13', 'DESC_PROV' => 'TAXIBUS'],
            ['COD_PROV' => '14', 'DESC_PROV' => 'MINIBUS (LOC.COLECTIVA)'],
            ['COD_PROV' => '15', 'DESC_PROV' => 'TAXI BASICO'],
            ['COD_PROV' => '16', 'DESC_PROV' => 'TAXI COLECTIVO'],
            ['COD_PROV' => '17', 'DESC_PROV' => 'TAXI TURISMO'],
            ['COD_PROV' => '18', 'DESC_PROV' => 'CAMION'],
            ['COD_PROV' => '19', 'DESC_PROV' => 'CAMION TRACTOR'],
            ['COD_PROV' => '20', 'DESC_PROV' => 'MAQU. AUTOMOTRIZ'],
            ['COD_PROV' => '21', 'DESC_PROV' => 'TRACTOR AGRICOLA'],
            ['COD_PROV' => '22', 'DESC_PROV' => 'MOTONETA'],
            ['COD_PROV' => '23', 'DESC_PROV' => 'BICIMOTO'],
            ['COD_PROV' => '24', 'DESC_PROV' => 'BICICLETA CON MOTOR'],
            ['COD_PROV' => '26', 'DESC_PROV' => 'MILITARES'],
            ['COD_PROV' => '27', 'DESC_PROV' => 'AMBULANCIAS'],
            ['COD_PROV' => '28', 'DESC_PROV' => 'MB TRANS. ESCOLAR'],
            ['COD_PROV' => '29', 'DESC_PROV' => 'SEMIREMOLQUE'],
            ['COD_PROV' => '30', 'DESC_PROV' => 'REMOLQUE'],
            ['COD_PROV' => '31', 'DESC_PROV' => 'MINIBUS TURISMO'],
            ['COD_PROV' => '32', 'DESC_PROV' => 'CARRO BOMBA'],
            ['COD_PROV' => '33', 'DESC_PROV' => 'CARGADOR FRONTAL'],
            ['COD_PROV' => '34', 'DESC_PROV' => 'RETROEXCAVADORA'],
            ['COD_PROV' => '35', 'DESC_PROV' => 'MOTONIVELADORA'],
            ['COD_PROV' => '36', 'DESC_PROV' => 'TRACTO CAMION'],
            ['COD_PROV' => '37', 'DESC_PROV' => 'GRUA HORQUILLA'],
            ['COD_PROV' => '38', 'DESC_PROV' => 'MAQ. INDUSTRIAL'],
            ['COD_PROV' => '39', 'DESC_PROV' => 'PLACA PRUEBA'],
            ['COD_PROV' => '40', 'DESC_PROV' => 'PERFORADORA'],
            ['COD_PROV' => '41', 'DESC_PROV' => 'MOTOR-HOME'],
            ['COD_PROV' => '42', 'DESC_PROV' => 'BUS ESCOLAR'],
            ['COD_PROV' => '43', 'DESC_PROV' => 'MOTO'],
            ['COD_PROV' => '44', 'DESC_PROV' => 'CICLOMOTOR'],
            ['COD_PROV' => '45', 'DESC_PROV' => 'TRAILER'],
            ['COD_PROV' => '46', 'DESC_PROV' => 'MOTOCICLO'],
            ['COD_PROV' => '47', 'DESC_PROV' => 'MOTOCARRO'],
            ['COD_PROV' => '48', 'DESC_PROV' => 'CASA ROD.REM.SUP.1750'],
            ['COD_PROV' => '49', 'DESC_PROV' => 'C. ARRASTRE SUP.1750 KG'],
            ['COD_PROV' => '51', 'DESC_PROV' => 'CASA ROD.REM. HASTA 1750'],
            ['COD_PROV' => '52', 'DESC_PROV' => 'TAXI EJECUTIVO'],
            ['COD_PROV' => '59', 'DESC_PROV' => 'FURGON CASA RODANTE'],
            ['COD_PROV' => '60', 'DESC_PROV' => 'COCHE MORTUORIO'],
            ['COD_PROV' => '61', 'DESC_PROV' => 'FURGON DE CARGA'],
            ['COD_PROV' => '62', 'DESC_PROV' => 'ST TURISMO'],
            ['COD_PROV' => '63', 'DESC_PROV' => 'CUATRIMOTO'],
            ['COD_PROV' => '64', 'DESC_PROV' => 'TRIMOTO'],
            ['COD_PROV' => '65', 'DESC_PROV' => 'SCOOTER']
        ];

        foreach ($data as $item){
            TipoDeVehiculo::create($item);
        } */

            TipoDeVehiculo::create([

                'COD_PROV' => '65', 'DESC_PROV' => 'SCOOTER'
                
            ]);
    }
}
