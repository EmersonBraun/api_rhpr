<?php

use Faker\Factory as FakerFactory;

class AuxFactory {

    public static function RG()
    {
        $fakerBR = FakerFactory::create('pt_BR');
        return $fakerBR->rg;
    }

    public static function CPF()
    {
        $fakerBR = FakerFactory::create('pt_BR');
        return $fakerBR->cpf;
    }

    public static function DDD()
    {
        $fakerBR = FakerFactory::create('pt_BR');
        return $fakerBR->areaCode;
    }
}