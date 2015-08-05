<?php namespace Tests;
use \MXTranslator\Events\UserRegistered as Event;

class UserRegisteredTest extends EventTest {
    protected static $recipe_name = 'user_registered';
    
    /**
     * Sets up the tests.
     * @override TestCase
     */
    public function setup() {
        $this->event = new Event($this->repo);
    }
}