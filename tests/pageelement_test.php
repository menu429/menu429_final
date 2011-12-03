<?php
require_once('simpletest/autorun.php');
require_once('simpletest/web_tester.php');

class TestOfPageElements extends WebTestCase
{
	//Home page testing
	function testHomePageElements()
	{
		$this->get('http://localhost/menu429_final/index.php/main/recipes');
		$this->assertTitle('Recipes Sharing Network');
		$this->assertClickable('Share Your Recipe');
		$this->assertClickable('Browse Recipes');
		$this->assertClickable('Recipes Sharing Network');
	}
	//Create page testing
	function testCreatePageElements()
	{
		$this->get('http://localhost/menu429_final/index.php/main/create');
		//Test of header
		$this->assertText('Submit a Recipe');
		//Test field elements
		$this->assertText('Title');
		$this->assertText('Description');
		$this->assertText('Created by');
		$this->assertText('Category');
		$this->assertText('Time Estimated');
		$this->assertText('Difficulty');
		$this->assertText('Ingredients');
		$this->assertText('Directions');
		$this->assertText('Image');
		$this->assertClickable('Submit Recipe');
	}
	//Browse page testing
	function testBrowsePageElements()
	{
		$this->get('http://localhost/menu429_final/index.php/main/browse');
		//Test all options of category
		$this->assertTrue($this->setField('category', 'Appetizers'));
		$this->assertTrue($this->setField('category', 'Sides')); // Check this one
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
		//Check for submission button
		$this->assertClickable("Submit");
	}
}

?>