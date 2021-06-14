<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\Repositories\PortfolioRepository;

class IndexController extends Controller
{
    public function __construct(PortfolioRepository $p_rep)
    {

        $this->p_rep=$p_rep;
    }

    public function getPortfolio(){
        $portfolios = $this->p_rep->get('*');
        return $portfolios;
    }

    public function list_portfolio(){
        $portfolios =$this->getPortfolio();
        return view('index')->with(array('portfolios'=>$portfolios));
    }

    public function show($id)
    {
        //
       $portfolios=$this->getPort($id);
        //dd($news);
        return view('index')->with(array('portfolios'=>$portfolios));
    }

    public function getPort($id){
        $portfolios = $this->p_rep->one($id);
        //$pages->img = json_decode($pages->img);
        return $portfolios;
    }


}
