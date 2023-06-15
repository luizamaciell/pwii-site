<?php

namespace Source\App;

use League\Plates\Engine;
use Source\Models\Faq;
use Source\Models\Plan;
use Source\Models\Trainer;

class Web
{

    private $view;

    public function __construct(){

        $this->view = new Engine(__DIR__ . "/../../themes/web", "php");

    }

    public function home()
    {
  
        echo $this->view->render("home");

    }

    public function about()
    {
        $trainer = new Trainer();
        $trainers = $trainer->selectAll();

        echo $this->view->render("about",[
            "trainers" => $trainers
        ]);

    }

    public function location()
    {
        echo $this->view->render("about");
    }

    public function schedule()
    {
        echo $this->view->render("schedule");
    }

    public function blog (){
        echo $this->view->render("blog");
    }
    public function contact (){
        echo $this->view->render("contact");
    } 
    public function faq () {
        $faq = new Faq();
        $faqs = $faq->selectAll();
     
        echo $this->view->render("faq",[
            "faqs" => $faqs
        ]);
    }
    public function plans (array $data)
    {
        //var_dump($data["categoriesName"]);
        //$plans = $plan->selectAll();
         $plans = new Plan();

         if(!empty ($data["categoriesName"])){
            echo $this->view->render("plans",[
                "plans" => $plans->selectByCategories($data["categoriesName"])
            ]);
            return;
         } 

        echo $this->view->render("plans",[
            "plans" => $plans->selectAll()
        ]);

    }
    
}