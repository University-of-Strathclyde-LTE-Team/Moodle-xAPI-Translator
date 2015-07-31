<?php namespace Tests;
use \MXTranslator\Events\UserLoggedout as Event;

class UserLoggedoutTest extends EventTest {
    protected static $recipe_name = 'user_loggedout';
    
    /**
     * Sets up the tests.
     * @override TestCase
     */
    public function setup() {
        $this->event = new Event($this->repo);
    }
}
