<?php
namespace App\Http\Controllers;
use App\proxy;
use Illuminate\Http\Request;

class ProxyController extends Controller {
	public function index() {
		return proxy::all();
	}
	public function create() {}
	public function store(Request $request) {}
	public function show(proxy $proxy) {
		return $proxy;
	}
	public function edit(proxy $proxy) {}
	public function update(Request $request, proxy $proxy) {}
	public function destroy(proxy $proxy) {}
}