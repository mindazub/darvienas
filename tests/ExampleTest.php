<?php

class ExampleTest extends TestCase {

	/**
	 * A basic functional test example.
	 *
	 * @return void
	 */
	public function testBasicExample()
	{
		$response = $this->call('GET', '/');

		$this->assertEquals(404, $response->getStatusCode());
	}

	public function testArticlesPage()
	{
		$response = $this->call('GET', '/articles');

		$this->assertEquals(200, $response->getStatusCode());
	}
	
	public function testCreateArticlesPage()
	{
		$response = $this->call('GET', '/articles/create');

		$this->assertEquals(200, $response->getStatusCode());
	}

	public function testPostCreateArticlesPage()
	{
		$response = $this->call('POST', '/articles/create', ['foo', 'bar']);

		// $this->assertResponseOk();
		$this->assertEquals('foo', Input::get('title'));
		$this->assertEquals('bar', Input::get('body'));
		// $this->assertEquals(200, $response->getStatusCode());
		// $this->assertEquals('foo', 'bar', Carbon::now());
	}


}
