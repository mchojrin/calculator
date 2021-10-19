<?php

class FirstCest
{
    public function _before(AcceptanceTester $I)
    {
    }

    // tests
    public function tryToTest(AcceptanceTester $I)
    {
        $I->amOnPage('index.php');
        $I->amGoingTo('put a new number into the collection');
        $I->see('Numbers entered:');
        $I->see('Sum:');
        $newNumber = rand(1, 100);
        $I->fillField('newNumber', $newNumber);
        $I->click('Add it!');
        $I->wait(2);
        $I->see('Numbers entered: '.$newNumber);
        $I->see('Sum: '.$newNumber);
    }
}