<?php

namespace Config;

use CodeIgniter\Config\BaseConfig;

class MyConfig extends BaseConfig
{
    public $perPage = 6;
    public $alertMessage = array(
        'dbAddError' => 'Záznam se nepřidal',
        'dbEditError' => 'Záznam se neaktulizoval',
        'dbDelError' => 'Záznam se nesmazal',
        'dbAddSuccess' => 'Záznam byl přidán do databáze',
        'dbEditSuccess' => 'Záznam se aktualizoval',
        'dbDelSuccess' => 'Záznam byl smazán'
    );
    
}
