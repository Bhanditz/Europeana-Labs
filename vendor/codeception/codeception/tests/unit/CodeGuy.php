<?php
// This class was automatically generated by build task
// You should not change it manually as it will be overwritten on next build
// @codingStandardsIgnoreFile


use \Codeception\Maybe;
use Codeception\Module\CodeHelper;
use Codeception\Module\EmulateModuleHelper;

/**
 * Inherited methods
 * @method void execute($callable)
 * @method void wantToTest($text)
 * @method void wantTo($text)
 * @method void expectTo($prediction)
 * @method void expect($prediction)
 * @method void amGoingTo($argumentation)
 * @method void am($role)
 * @method void lookForwardTo($achieveValue)
 * @method void offsetGet($offset)
 * @method void offsetSet($offset, $value)
 * @method void offsetExists($offset)
 * @method void offsetUnset($offset)
*/

class CodeGuy extends \Codeception\AbstractGuy
{
    
    /**
     * This method is generated.
     * Documentation taken from corresponding module.
     * ----------------------------------------------
     *
     *
     * @see Codeception\Module::getName()
     * @return \Codeception\Maybe
     */
    public function getName() {
        $this->scenario->addStep(new \Codeception\Step\Action('getName', func_get_args()));
        if ($this->scenario->running()) {
            $result = $this->scenario->runStep();
            return new Maybe($result);
        }
        return new Maybe();
    }

 
    /**
     * This method is generated.
     * Documentation taken from corresponding module.
     * ----------------------------------------------
     *
     *
    * Conditional Assertion: Test won't be stopped on fail
     * @see Codeception\Module\EmulateModuleHelper::seeEquals()
     * @return \Codeception\Maybe
     */
    public function canSeeEquals($expected, $actual) {
        $this->scenario->addStep(new \Codeception\Step\ConditionalAssertion('seeEquals', func_get_args()));
        if ($this->scenario->running()) {
            $result = $this->scenario->runStep();
            return new Maybe($result);
        }
        return new Maybe();
    }
    /**
     * This method is generated.
     * Documentation taken from corresponding module.
     * ----------------------------------------------
     *
     *
     * @see Codeception\Module\EmulateModuleHelper::seeEquals()
     * @return \Codeception\Maybe
     */
    public function seeEquals($expected, $actual) {
        $this->scenario->addStep(new \Codeception\Step\Assertion('seeEquals', func_get_args()));
        if ($this->scenario->running()) {
            $result = $this->scenario->runStep();
            return new Maybe($result);
        }
        return new Maybe();
    }

 
    /**
     * This method is generated.
     * Documentation taken from corresponding module.
     * ----------------------------------------------
     *
     *
    * Conditional Assertion: Test won't be stopped on fail
     * @see Codeception\Module\EmulateModuleHelper::seeFeaturesEquals()
     * @return \Codeception\Maybe
     */
    public function canSeeFeaturesEquals($expected) {
        $this->scenario->addStep(new \Codeception\Step\ConditionalAssertion('seeFeaturesEquals', func_get_args()));
        if ($this->scenario->running()) {
            $result = $this->scenario->runStep();
            return new Maybe($result);
        }
        return new Maybe();
    }
    /**
     * This method is generated.
     * Documentation taken from corresponding module.
     * ----------------------------------------------
     *
     *
     * @see Codeception\Module\EmulateModuleHelper::seeFeaturesEquals()
     * @return \Codeception\Maybe
     */
    public function seeFeaturesEquals($expected) {
        $this->scenario->addStep(new \Codeception\Step\Assertion('seeFeaturesEquals', func_get_args()));
        if ($this->scenario->running()) {
            $result = $this->scenario->runStep();
            return new Maybe($result);
        }
        return new Maybe();
    }
}

