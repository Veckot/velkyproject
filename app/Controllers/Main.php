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
use Config\MyConfig;

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
    private $config;
    private $breadcrumps1;
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
        $pager = \Config\Services::pager();
        $this->config = new MyConfig();
    }
    public function index()
    {
        $dataMain['vyrobce'] = $this->vyrobce->findAll();
        echo view('main/main', $dataMain);
    }
    public function komponentyVyrobce($urlVyrobce)
    {
        $this->breadcrumps1 = $urlVyrobce;
        $pager = \Config\Services::pager();

        $dataKomVyr['breadcrumps'] = $this->breadcrumps1;

        $perPage = $this->config->perPage;
        $idVyrobce = $this->vyrobce->where('url', $urlVyrobce)->first()->idVyrobce;

        $dataKomVyr['komponent'] = $this->komponent
            ->join('vyrobce', 'komponent.vyrobce_id=vyrobce.idVyrobce', 'left')
            ->join('typkomponent', 'typkomponent.idKomponent=komponent.typKomponent_id', 'left')
            ->where('vyrobce_id', $idVyrobce)
            ->paginate($perPage, 'default');
    

        $dataKomVyr['pager'] = $this->komponent->pager;
    

        $dataKomVyr['vyrobce'] = $this->vyrobce->find($idVyrobce);
    
        echo view('main/komponentyVyrobce', $dataKomVyr);
    }

    public function komponent($idKomponent)
    {

        
        $dataKomponent['parametr'] = $this->komponent
            ->join('parametr','parametr.komponent_id=komponent.id','left')
            ->join('nazevparametr','parametr.nazevParametr_id=nazevparametr.id','left')
            ->where('komponent.id' , $idKomponent)
            ->findAll();

        $dataKomponent['komponent'] = $this->komponent
            ->join('vyrobce','komponent.vyrobce_id=vyrobce.idVyrobce','left')
            ->join('typkomponent','typkomponent.idKomponent=komponent.typKomponent_id','left')
            ->find($idKomponent);

        echo view('main/komponent', $dataKomponent);
    }
}
