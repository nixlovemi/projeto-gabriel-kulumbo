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
            'title' => 'Home',
            'description' => "Welcome to our website! We are dedicated to providing you with the best information, products, and services in our field. Whether you are looking for expert advice, high-quality products, or top-notch services, we have you covered. Our team is passionate about what we do, and we are committed to delivering excellence in everything we do. Explore our site to learn more about our offerings and how we can help you achieve your goals. Thank you for choosing us, and we look forward to serving you!"
        ];
        $this->view('home/index', 'Home', $data);
    }
}
