<?php

namespace Tests\Feature;

use App\Http\Controllers\ProductsController;
use App\Models\Product;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class WebTest extends TestCase
{
	use RefreshDatabase;
	use DatabaseMigrations;
	use WithFaker;


	public function test_redirect_home_to_products()
	{
		$response = $this->get('/');

		$response->assertRedirect('products');
	}

	public function test_status_redirect()
	{
		$response = $this->get('/');

		$response->assertStatus(302);
	}

	public function test_controller_index()
	{

		$response = $this->get('/products');
		$response->assertStatus(200);
	}

	public function test_controller_create()
	{

		$response = $this->get('/products/create');
		$response->assertStatus(200);
	}

	//Ну и так далее можно покрыть тестами все страницы и проверить ответ


	public function test_data_creating()
	{

		$name = $this->faker->firstName;
		$description = $this->faker->text(100);
		$price = $this->faker->randomFloat(2, 50, 1000);


		$responce = $this->post('/products', [
				'name' => $name,
				'description' => $description,
				'price' => $price
		]);

		$responce->assertStatus(302);
	}

	public function test_data_update()
	{
//		$this->withoutExceptionHandling();

		$name = $this->faker->firstName;
		$description = $this->faker->text(100);
		$price = $this->faker->randomFloat(2, 50, 1000);


		$this->post('/products', [
				'name' => $name,
				'description' => $description,
				'price' => $price
		]);

		$id = Product::first()->id;

		$responce = $this->patch('/products/' . $id, [
				'name' => 'test1',
				'description' => $description,
				'price' => $price
		]);

		$this->assertEquals('test1', Product::first()->name);
	}

	public function test_data_delete()
	{
//		$this->withoutExceptionHandling();

		$name = $this->faker->firstName;
		$description = $this->faker->text(100);
		$price = $this->faker->randomFloat(2, 50, 1000);


		$this->post('/products', [
				'name' => $name,
				'description' => $description,
				'price' => $price
		]);

		$product = Product::first();
		$this->assertCount(1, Product::all());

		$response = $product->delete();

		$this->assertCount(0, Product::all());

	}
}
