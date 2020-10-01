<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Redirector;
use Illuminate\View\View;

class ProductsController extends Controller
{
	/**
	 * Display a listing of the resource.
	 *
	 * @return Application|Factory|Response|View
	 */
	public function index()
	{
		$all = Product::orderBy('id', 'desc')->paginate(5);
		return view('products.index', compact('all'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('products.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param \Illuminate\Http\Request $request
	 * @return Application|RedirectResponse|Response|Redirector
	 */
	public function store(Request $request)
	{
		$data = $request->toArray();
		$create = Product::create($data);

		return redirect(route('products.index'));
	}

	/**
	 * Display the specified resource.
	 *
	 * @param \App\Models\Product $product
	 * @return Response
	 */
	public function show(Product $product)
	{
		return view('products.show', compact('product'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param \App\Models\Product $product
	 * @return Application|Factory|Response|View
	 */
	public function edit(Product $product)
	{
		return view('products.edit', compact('product'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param \Illuminate\Http\Request $request
	 * @param \App\Models\Product $product
	 * @return Response
	 */
	public function update(Request $request, Product $product)
	{
		$data = $request->toArray();
		$update = $product->update($data);
		return redirect(route('products.index'));
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param \App\Models\Product $product
	 * @return Response
	 */
	public function destroy(Product $product)
	{
		$delete = $product->delete();
		return redirect(route('products.index'));
	}
}
