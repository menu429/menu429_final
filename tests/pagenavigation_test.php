<?php
require_once('simpletest/autorun.php');
require_once('simpletest/web_tester.php');

class TestOfPageNavigation extends WebTestCase
{
	//Navigation Testing
	function testHomePageToCreatePage()	//Test clicking create button from home page
	{
		$this->get('http://localhost/menu429_final/index.php/main/recipes');
		$this->assertLink('Share Your Recipe', 'http://localhost/menu429_final/index.php/main/create');
		$this->click('Share Your Recipe');
		$this->assertText('Submit a Recipe');
	}
	
	function testCreatePageRedirectionToHomePage() //Redirection to homepage after filling create form
	{
		$this->get('http://localhost/menu429_final/index.php/main/create');
		$this->setField('title', 'tests');
		$this->setField('description', 'American hamburger');
		$this->setField('creator', 'jimmy');
		$this->setField('category', 'Appetizers');
		$this->setField('estimated_time', '30 - 45 mins');
		$this->setField('difficulty', 'Medium');
		$this->setField('ingredients', 'a lot of stuff');
		$this->setField('directions', 'alot of steps');
		$this->clickSubmit("Submit Recipe");
		$this->assertTitle('Recipes Sharing Network');
		$this->assertText('Recently Submitted');
	}
	
	function testHomePageToBrowsePage()	//Test clicking create button from home page
	{
		$this->get('http://localhost/menu429_final/index.php/main/browse');
		$this->click('Browse Recipes');
		$this->assertText('Category');
		$this->assertText('Time Estimated');
		$this->assertText('Difficulty');
		$this->assertClickable('Submit');
	}
}
?>