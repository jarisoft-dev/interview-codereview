<?php


class my_View_class
{
    public function __construct($i)
    {
        $service = new RocketScienceCalculationServiceForRocketScienceCalculationDependency();
        $db = new Database();
        $db->connect();
        if ($db->is_Connected()) {
            $this->r = new RocketScienceCalculation($i, $service, $db);
        } else {
            throw new Exception();
        }
    }

    function InvokeRocketScienceCalculation() {
        global $myGlobalVar;
        $c = $this->r->calc();
        if ($myGlobalVar->isValid()) {
            return $c;
        } else if (!$myGlobalVar->isValid()) {
            return globalTransforamtionFunction($c);
        } else {
            return $c;
        }

        return false;
    }

    function t() {
        $v = (isset($this->thing->variable) ? $this->r->callVariableFunction() : (empty($this->InvokeRocketScienceCalculation()) ? 1 : false));
    }
}