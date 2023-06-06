<?php

/**
 * Every page loads from view folder
 * in order to load a view inside a folder of the view folder
 * the folder/filename must be parsed
 */
class Home extends Controller
{
    private Example $Example;

    public function __construct()
    {
        $this->Example = $this->model('Example');
    }

    public function Index()
    {
        $data = [
            [
                'img' => 'ex01.jpeg',
                'nome' => 'Jonh Ferdinand',
                'funcao' => "Some quick example text to build on the card title and make up the bulk of the card's content. 1."
            ],
            [
                'img' => 'ex02.jpeg',
                'nome' => 'Ernesto Mateus',
                'funcao' => 'Some quick example text to build on the card title and make up the bulk of the card\'s content. 2.'
            ],
            [
                'img' => 'ex03.png.jpeg',
                'nome' => 'Roberto Carlos',
                'funcao' => 'Some quick example text to build on the card title and make up the bulk of the card\'s content. 3.'
            ]
        ];
        $this->view('home/index', 'Home', $data);
    }
}
