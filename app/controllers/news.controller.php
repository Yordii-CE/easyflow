<?php 
class NewsController extends Controller 
{ 
   function __construct() 
   { 
       $this->loadModel(); 
   } 
   function index() 
   { 
       $this->view(); 
   } 
} 
