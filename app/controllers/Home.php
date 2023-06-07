<?php

/**
 * Every page loads from view folder
 * in order to load a view inside a folder of the view folder
 * the folder/filename must be parsed
 */
class Home extends Controller
{
    private TbCurriculos $TbCurriculos;

    public function __construct()
    {
        $this->TbCurriculos = $this->model('TbCurriculos');
    }

    public function Index()
    {
        $data = $this->TbCurriculos->getCvForHomePage();
        $this->view('home/index', 'Home', $data);
    }
}
