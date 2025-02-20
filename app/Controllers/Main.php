<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Komponent;
use App\Models\Nazevparametr;
use App\Models\Parametr;
use App\Models\Typkomponent;
use App\Models\Typpocitace_has_komponent;
use App\Models\Typpocitace;
use App\Models\Vyber;
use App\Models\Vyrobce;

class Main extends BaseController
{
    private $komponent;
    private $nazevparametr;
    private $parametr;
    private $typkomponent;
    private $typpocitace_has_komponent;
    private $typpocitace;
    private $vyber;
    private $vyrobce;
    public function __construct()
    {
        $this->komponent= new Komponent();
        $this->nazevparametr= new Nazevparametr();
        $this->parametr= new Parametr();
        $this->typkomponent= new Typkomponent();
        $this->typpocitace_has_komponent= new Typpocitace_has_komponent();
        $this->typpocitace= new Typpocitace();
        $this->vyber = new Vyber();
        $this->vyrobce = new Vyrobce();
    }
    public function index(): string
    {
        $dataMain['vyrobce'] = $this->vyrobce->findAll();
        return view('main/main', $dataMain);
    }
    public function komponentyVyrobce($idVyrobce)
    {
        $dataKomVyr['komponent'] = $this->komponent->join('vyrobce','komponent.vyrobce_id=vyrobce.idVyrobce','left')->where('vyrobce_id', $idVyrobce)->findAll();
        return view('main/komponentyVyrobce', $dataKomVyr);
    }
}
