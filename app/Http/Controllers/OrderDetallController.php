<?php

namespace App\Http\Controllers;

use App\Models\OrderDetall;
use App\Models\Order;
use Illuminate\Http\Request;

/**
 * Class OrderDetallController
 * @package App\Http\Controllers
 */
class OrderDetallController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $orderDetalls = OrderDetall::paginate();

        return view('order-detall.index', compact('orderDetalls'))
            ->with('i', (request()->input('page', 1) - 1) * $orderDetalls->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $orderDetall = new OrderDetall();
        
        return view('order-detall.create', compact('orderDetall'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(OrderDetall::$rules);

        $orderDetall = OrderDetall::create($request->all());

        return redirect()->route('order-detalls.index')
            ->with('success', 'OrderDetall created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $orderDetall = OrderDetall::find($id);

        return view('order-detall.show', compact('orderDetall'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $orderDetall = OrderDetall::find($id);
        
        return view('order-detall.edit', compact('orderDetall'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  OrderDetall $orderDetall
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, OrderDetall $orderDetall)
    {
        request()->validate(OrderDetall::$rules);

        $orderDetall->update($request->all());

        return redirect()->route('order-detalls.index')
            ->with('success', 'OrderDetall updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $orderDetall = OrderDetall::find($id)->delete();

        return redirect()->route('order-detalls.index')
            ->with('success', 'OrderDetall deleted successfully');
    }
}
