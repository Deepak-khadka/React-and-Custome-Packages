<?php

namespace App\Http\Controllers;
use App\Models\Test;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Neputer\Services\CheckServices;

class TestController extends BaseController
{
    /**
     * @var Test
     */
    protected $model;
    protected $testService;

    /**
     * CheckController constructor.
     * @param CheckServices $testService
     */
    public function __construct(CheckServices $testService)
    {
        parent::__construct();
        $this->model = new Test();
        $this->testService = $testService;
    }
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View|JsonResponse
     */
    public function index()
    {
       $test = $this->testService->getAllTest();
       return view('Test.index',compact('test'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param int $id
     * @return Response
     */
    public function update(Request $request, int $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return RedirectResponse
     */
    public function destroy(int $id)
    {
        $this->testService->destroy($id);
        return redirect()->back()->with('success','Successfully deleted');
    }
}
