<?php
require_once('simpletest/autorun.php');
require_once('simpletest/web_tester.php');

class TestOfPageNavigation extends WebTestCase
{
	//Create page testing
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
	
	//Home page testing
	function testHomePageElements()
	{
		$this->get('http://localhost/menu429_final/index.php/main/recipes');
		$this->assertTitle('Recipes Sharing Network');
		$this->assertClickable('Share Your Recipe');
		$this->assertClickable('Browse Recipes');
		$this->assertClickable('Recipes Sharing Network');
	}
	
	//Browse page testing
	function testBrowsePageElements()
	{
		$this->get('http://localhost/menu429_final/index.php/main/browse');
		//Test all options of category
		$this->assertTrue($this->setField('category', 'Appetizers'));
		$this->assertTrue($this->setField('category', 'Sides'));
		$this->assertTrue($this->setField('category', 'Entrées'));
		$this->assertTrue($this->setField('category', 'Desserts'));
		$this->assertTrue($this->setField('category', 'Beverages'));
		$this->assertTrue($this->setField('category', 'Others'));
		//Test all options of estimated_time
		$this->assertTrue($this->setField('estimated_time', 'Under 15 mins'));
		$this->assertTrue($this->setField('estimated_time', '15 - 30 mins'));
		$this->assertTrue($this->setField('estimated_time', '30 - 45 mins'));
		$this->assertTrue($this->setField('estimated_time', '45 - 60 mins'));
		$this->assertTrue($this->setField('estimated_time', '1 - 1.5 hours'));
		$this->assertTrue($this->setField('estimated_time', '1.5 - 2 hours'));
		$this->assertTrue($this->setField('estimated_time', 'Over 2 hours'));
		//Test all options of difficulty
		$this->assertTrue($this->setField('difficulty', 'None'));
		$this->assertTrue($this->setField('difficulty', 'Easy'));
		$this->assertTrue($this->setField('difficulty', 'Medium'));
		$this->assertTrue($this->setField('difficulty', 'Challenging'));
		
	}
}
?>