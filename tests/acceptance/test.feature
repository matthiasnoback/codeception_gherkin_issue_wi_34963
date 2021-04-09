@special
Feature:

  Scenario: steps are defined not just in the actor, but in multiple context classes

    Given I have defined steps in the actor class
    And I have defined steps in a default context class
    And I have defined steps in a default special context class which is activated by a special tag
    When I use PhpStorm with the Codeception plugin enabled
    Then I should be able to click from the step in a .feature file to its corresponding step definition
