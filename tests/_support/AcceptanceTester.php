<?php


/**
 * Inherited Methods
 * @method void wantToTest($text)
 * @method void wantTo($text)
 * @method void execute($callable)
 * @method void expectTo($prediction)
 * @method void expect($prediction)
 * @method void amGoingTo($argumentation)
 * @method void am($role)
 * @method void lookForwardTo($achieveValue)
 * @method void comment($description)
 * @method void pause()
 *
 * @SuppressWarnings(PHPMD)
*/
class AcceptanceTester extends \Codeception\Actor
{
    use _generated\AcceptanceTesterActions;

    /**
     * Define custom actions here
     */

    /**
     * @Given I have defined steps in the actor class
     */
    public function aStepFromTheActor(): void
    {
    }

    /**
     * @When I use PhpStorm with the Codeception plugin enabled
     */
    public function whenIUsePhpStorm(): void
    {

    }

    /**
     * @Then I should be able to click from the step in a .feature file to its corresponding step definition
     */
    public function thenYes(): void
    {

    }
}
