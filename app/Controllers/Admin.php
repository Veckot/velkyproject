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

class Admin extends BaseController
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
        $this->komponent = new Komponent();
        $this->nazevparametr = new Nazevparametr();
        $this->parametr = new Parametr();
        $this->typkomponent = new Typkomponent();
        $this->typpocitace_has_komponent = new Typpocitace_has_komponent();
        $this->typpocitace = new Typpocitace();
        $this->vyber = new Vyber();
        $this->vyrobce = new Vyrobce();
        $pager = \Config\Services::pager();
        $this->config = new MyConfig();
    }

    public function admin()
    {
        $dataAdmin['vyrobce'] = $this->vyrobce->findAll();
        echo view('main/admin', $dataAdmin);
    }

    public function addnewmaker()
    {
        echo view('main/addnewmaker');
    }
    /**
     * @param $status - boolean podle toho, jestli byl success nebo error
     * @param $type - string, jaký typ operace proběhl, podle konfiguračního souboru - dbAdd, dbEdit, dbDel apod
     * @return - objekt se dvěma atributy - text hlášky v message a třída v class

     */
    public function prepareMessage($status, $type)
    {
        $result = new \stdClass();
        if ($status) {
            $result->class = "Success";
            $shortType = $type . "Success";
        } else {
            $result->class = "Danger";
            $shortType = $type . "Danger";
        }
        $result->message = $this->config->alertMessage[$shortType];
        return $result;
    }
    public function create()
    {
        $vyrobce = $this->request->getPost('vyrobce');
        $url = $this->request->getPost('url');

        $data = array(
            'vyrobce' => $vyrobce,
            'url' => $url,
        );

        $result = $this->vyrobce->save($data);
        $dataForMess = $this->prepareMessage($result, 'dbAdd');
        return redirect()->route('admin');
    }
}
