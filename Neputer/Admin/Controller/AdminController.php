<?php

namespace Neputer\Admin\Controller;
use Exception;
use Neputer\Admin\Model\Admin;
use App\Http\Controllers\BaseController;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class AdminController extends BaseController
{

    protected $model;

    public function __construct()
    {
        parent::__construct();
        $this->model = new Admin();

    }
     /**
        * Display a listing of the resource.
        *
        * @return Application|View
        */
    public function index()
    {

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
     * @param  Admin  $id
     * @return Response
     */
    public function show(Admin $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Admin  $id
     * @return Response
     */
    public function edit(Admin $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param Admin $id
     * @return Response
     */
    public function update(Request $request, Admin $id)
    {
        //
    }

  /**
      /**
          * Remove the specified resource from storage.
          *
          * @param Admin $id
          * @return RedirectResponse
          * @throws Exception
          */
    public function destroy(Admin $id)
    {
        $id->delete();
        return redirect()->back();
    }
}
