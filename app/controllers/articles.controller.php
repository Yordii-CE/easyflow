<?php
class ArticlesController extends Controller
{

    function __construct()
    {
        $this->loadModel();
    }

    function index($id = null)
    {
        $articles = $this->model->getAll();
        $this->view(['articles' => $articles, 'param' => $id]);
    }

    function news()
    {
        $this->view();
    }
}
