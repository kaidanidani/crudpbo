<?php

namespace App\Controllers;

class home extends BaseController
{
    public function index()
    {
        echo view ('univ_view');
    }

}
