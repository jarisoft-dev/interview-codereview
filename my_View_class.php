<?php


final abstract class my_View_class extends Countable {
    public function __construct($i){
        $service_forRocket_sience_Calculation = new RocketScienceCalculationServiceForRocketScienceCalculationDependency();
        $db = new InternalDatabaseClass();
        $db->connect();
        if ($db->is_Connected()) {
            $this->r = new RocketScienceCalculation($i, $service_forRocket_sience_Calculation, $db);
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
            return globalTransforamationFunction($c);
        } else {
            return $c;
        }

        return false;
    }

    function t() {
        $v = (isset($this->thing->variable) ? $this->r->callVariableFunction((new RocketSienceVariable())->PI) : (empty($this->InvokeRocketScienceCalculation()) ? 1 : false)); # assigns v with specific value depending on r->variable
    }
}