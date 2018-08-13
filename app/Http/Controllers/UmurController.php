<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateUmurRequest;
use App\Http\Requests\UpdateUmurRequest;
use App\Repositories\UmurRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class UmurController extends AppBaseController
{
    /** @var  UmurRepository */
    private $umurRepository;

    public function __construct(UmurRepository $umurRepo)
    {
        $this->umurRepository = $umurRepo;
    }

    /**
     * Display a listing of the Umur.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->umurRepository->pushCriteria(new RequestCriteria($request));
        $umurs = $this->umurRepository->all();

        return view('umurs.index')
            ->with('umurs', $umurs);
    }

    /**
     * Show the form for creating a new Umur.
     *
     * @return Response
     */
    public function create()
    {
        return view('umurs.create');
    }

    /**
     * Store a newly created Umur in storage.
     *
     * @param CreateUmurRequest $request
     *
     * @return Response
     */
    public function store(CreateUmurRequest $request)
    {
        $input = $request->all();

        $umur = $this->umurRepository->create($input);

        Flash::success('Umur saved successfully.');

        return redirect(route('umurs.index'));
    }

    /**
     * Display the specified Umur.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $umur = $this->umurRepository->findWithoutFail($id);

        if (empty($umur)) {
            Flash::error('Umur not found');

            return redirect(route('umurs.index'));
        }

        return view('umurs.show')->with('umur', $umur);
    }

    /**
     * Show the form for editing the specified Umur.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $umur = $this->umurRepository->findWithoutFail($id);

        if (empty($umur)) {
            Flash::error('Umur not found');

            return redirect(route('umurs.index'));
        }

        return view('umurs.edit')->with('umur', $umur);
    }

    /**
     * Update the specified Umur in storage.
     *
     * @param  int              $id
     * @param UpdateUmurRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateUmurRequest $request)
    {
        $umur = $this->umurRepository->findWithoutFail($id);

        if (empty($umur)) {
            Flash::error('Umur not found');

            return redirect(route('umurs.index'));
        }

        $umur = $this->umurRepository->update($request->all(), $id);

        Flash::success('Umur updated successfully.');

        return redirect(route('umurs.index'));
    }

    /**
     * Remove the specified Umur from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $umur = $this->umurRepository->findWithoutFail($id);

        if (empty($umur)) {
            Flash::error('Umur not found');

            return redirect(route('umurs.index'));
        }

        $this->umurRepository->delete($id);

        Flash::success('Umur deleted successfully.');

        return redirect(route('umurs.index'));
    }
}
