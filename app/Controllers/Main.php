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
        $pager = \Config\Services::pager();
    }
    public function index()
    {
        $dataMain['vyrobce'] = $this->vyrobce->findAll();
        echo view('main/main', $dataMain);
    }
    public function komponentyVyrobce($idVyrobce)
    {
        // Load the pagination library
        $pager = \Config\Services::pager();
    
        // Get the current page number from the query string, default to 1
        $page = $this->request->getVar('page') ? $this->request->getVar('page') : 1;
    
        // Number of items per page
        $perPage = 6;
    
        // Get the total number of items
        $total = $this->komponent
            ->where('vyrobce_id', $idVyrobce)
            ->countAllResults(false); // false to not reset query
    
        // Get the items for the current page
        $dataKomVyr['komponent'] = $this->komponent
            ->join('vyrobce', 'komponent.vyrobce_id=vyrobce.idVyrobce', 'left')
            ->join('typkomponent', 'typkomponent.idKomponent=komponent.typKomponent_id', 'left')
            ->where('vyrobce_id', $idVyrobce)
            ->paginate($perPage, 'default', $page);
    
        // Pass the pagination links to the view
        $dataKomVyr['pager'] = $this->komponent->pager;
    
        // Get the manufacturer details
        $dataKomVyr['vyrobce'] = $this->vyrobce->find($idVyrobce);
    
        echo view('main/komponentyVyrobce', $dataKomVyr);
    }

    public function komponent($idKomponent)
    {
        //pagination
        
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
