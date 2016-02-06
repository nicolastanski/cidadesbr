<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CidadesSeeder extends Seeder
{

    public function run()
    {

        DB::disableQueryLog();

        $estados = array(
            array("nome" => "ACRE", "capital" => "RIO BRANCO", "uf" => "AC"),              //1
            array("nome" => "ALAGOAS", "capital" => "MACEIÓ", "uf" => "AL"),           //2
            array("nome" => "AMAPÁ", "capital" => "MACAPÁ", "uf" => "AP"),             //3
            array("nome" => "AMAZONAS", "capital" => "MANAUS", "uf" => "AM"),          //4
            array("nome" => "BAHIA", "capital" => "SALVADOR", "uf" => "BA"),             //5
            array("nome" => "CEARÁ", "capital" => "FORTALEZA", "uf" => "CE"),             //6
            array("nome" => "DISTRITO FEDERAL", "capital" => "BRASÍLIA", "uf" => "DF"),  //7
            array("nome" => "ESPÍRITO SANTO", "capital" => "VITÓRIA", "uf" => "ES"),    //8
            array("nome" => "GOIÁS", "capital" => "GOIÂNIA", "uf" => "GO"),             //9
            array("nome" => "MARANHÃO", "capital" => "SÃO LUÍS", "uf" => "MA"),          //10
            array("nome" => "MATO GROSSO", "capital" => "CUIABÁ", "uf" => "MT"),       //11
            array("nome" => "MATO GROSSO DO SUL", "capital" => "CAMPO GRANDE", "uf" => "MS"),//12
            array("nome" => "MINAS GERAIS", "capital" => "BELO HORIZONTE", "uf" => "MG"),      //13
            array("nome" => "PARÁ", "capital" => "BELÉM", "uf" => "PA"),              //14
            array("nome" => "PARAÍBA", "capital" => "JOÃO PESSOA", "uf" => "PB"),           //15
            array("nome" => "PARANÁ", "capital" => "CURITIBA", "uf" => "PR"),            //16
            array("nome" => "PERNAMBUCO", "capital" => "RECIFE", "uf" => "PE"),        //17
            array("nome" => "PIAUI", "capital" => "TERESINA", "uf" => "PI"),              //18
            array("nome" => "RIO DE JANEIRO", "capital" => "RIO DE JANEIRO", "uf" => "RJ"),    //19
            array("nome" => "RIO GRANDE DO NORTE", "capital" => "NATAL", "uf" => "RN"),//20
            array("nome" => "RIO GRANDE DO SUL", "capital" => "PORTO ALEGRE", "uf" => "RS"), //21
            array("nome" => "RONDÔNIA", "capital" => "PORTO VELHO", "uf" => "RO"),          //22
            array("nome" => "RORAIMA", "capital" => "BOA VISTA", "uf" => "RR"),           //23
            array("nome" => "SANTA CATARINA", "capital" => "FLORIANÓPOLIS", "uf" => "SC"),    //23
            array("nome" => "SÃO PAULO", "capital" => "SÃO PAULO", "uf" => "SP"),         //24
            array("nome" => "SERGIPE", "capital" => "ARACAJU", "uf" => "SE"),           //25
            array("nome" => "TOCANTINS", "capital" => "PALMAS", "uf" => "TO")         //26
        );

        foreach ($estados as $estado) {
            $this->command->info('Inserindo estados ' . $estado['nome'] . '-' . $estado['uf'] . ' [' . count($estados) . ']..');
            \Artesaos\Estado::insert($estado);
        }
    }

}
