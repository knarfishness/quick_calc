<?php

// src/AppBundle/Controller/CalculatorController.php
namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;


class CalculatorController extends Controller
{
    /**
     * @Route("/calculator")
     */
    public function index()
    {
	        // form validation begins here
            if(isset($_POST['submit']))
            {
	            // check if numbers are filled in
	            if($_POST['n1'] == '' || $_POST['n2'] == '')
	            {
		            $errors = array("Please provide both numbers.");
		            $result = null;
	            }
	            // check if numbers are numeric
	            else if(!is_numeric($_POST['n1']) || !is_numeric($_POST['n2']))
                {
                    $errors = array("Please only use numeric values.");
                    $result = null;
                }
	            // check for division by zero
                else if($_POST['n2'] == 0 && $_POST['op'] === "/")
                {
	                $errors = array("Division by zero is not allowed.");
	                $result = null;
                }
                // success
                else
                {
                    $errors = null;
                    $result = $this->getresultAction($_POST['n1'],$_POST['n2'],$_POST['op']);
                }
                return $this->render('calculator.html.twig', array('result' => $result, 'errors' => $errors));  
            }
            else
            {
                return $this->render('calculator.html.twig', array('result' => null, 'errors' => null));  
            }
    }

    /**
     * @Route("/calculator/checkoperation")
     */
    public function checkoperationAction($operator)
    {
        switch($operator)
        {
            case '+':
            return $this->a + $this->b;
            break;

            case '-':
            return $this->a - $this->b;
            break;

            case '*':
            return $this->a * $this->b;
            break;

            case '/':
            return $this->a / $this->b;
            break;

            default:
            return "That is not a valid operator.";
        }   
    }
    /**
     * @Route("/calculator/getresult")
     */
    public function getresultAction($a, $b, $c)
    {
        $this->a = $a;
        $this->b = $b;
        return $this->checkoperationAction($c);
    }
}