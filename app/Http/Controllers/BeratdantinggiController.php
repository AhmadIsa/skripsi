<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateBeratdantinggiRequest;
use App\Http\Requests\UpdateBeratdantinggiRequest;
use App\Repositories\BeratdantinggiRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class BeratdantinggiController extends AppBaseController
{
    /** @var  BeratdantinggiRepository */
    private $beratdantinggiRepository;

    public function __construct(BeratdantinggiRepository $beratdantinggiRepo)
    {
        $this->beratdantinggiRepository = $beratdantinggiRepo;
    }

    /**
     * Display a listing of the Beratdantinggi.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->beratdantinggiRepository->pushCriteria(new RequestCriteria($request));
        $beratdantinggis = $this->beratdantinggiRepository->all();

        return view('beratdantinggis.index')
            ->with('beratdantinggis', $beratdantinggis);
    }

    /**
     * Show the form for creating a new Beratdantinggi.
     *
     * @return Response
     */
    public function create()
    {

        $bobot=Bobot::pluck('bobot','id')
        return view('beratdantinggis.create');
        compact('bobot'));
    }

    /**
     * Store a newly created Beratdantinggi in storage.
     *
     * @param CreateBeratdantinggiRequest $request
     *
     * @return Response
     */
    public function store(CreateBeratdantinggiRequest $request)
    {
        $input = $request->all();

        $beratdantinggi = $this->beratdantinggiRepository->create($input);

        Flash::success('Beratdantinggi saved successfully.');

        return redirect(route('beratdantinggis.index'));
    }

    /**
     * Display the specified Beratdantinggi.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $beratdantinggi = $this->beratdantinggiRepository->findWithoutFail($id);

        if (empty($beratdantinggi)) {
            Flash::error('Beratdantinggi not found');

            return redirect(route('beratdantinggis.index'));
        }

        return view('beratdantinggis.show')->with('beratdantinggi', $beratdantinggi);
    }

    /**
     * Show the form for editing the specified Beratdantinggi.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $beratdantinggi = $this->beratdantinggiRepository->findWithoutFail($id);

        if (empty($beratdantinggi)) {
            Flash::error('Beratdantinggi not found');

            return redirect(route('beratdantinggis.index'));
        }

        return view('beratdantinggis.edit')->with('beratdantinggi', $beratdantinggi);
    }

    /**
     * Update the specified Beratdantinggi in storage.
     *
     * @param  int              $id
     * @param UpdateBeratdantinggiRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateBeratdantinggiRequest $request)
    {
        $beratdantinggi = $this->beratdantinggiRepository->findWithoutFail($id);

        if (empty($beratdantinggi)) {
            Flash::error('Beratdantinggi not found');

            return redirect(route('beratdantinggis.index'));
        }

        $beratdantinggi = $this->beratdantinggiRepository->update($request->all(), $id);

        Flash::success('Beratdantinggi updated successfully.');

        return redirect(route('beratdantinggis.index'));
    }

    /**
     * Remove the specified Beratdantinggi from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $beratdantinggi = $this->beratdantinggiRepository->findWithoutFail($id);

        if (empty($beratdantinggi)) {
            Flash::error('Beratdantinggi not found');

            return redirect(route('beratdantinggis.index'));
        }

        $this->beratdantinggiRepository->delete($id);

        Flash::success('Beratdantinggi deleted successfully.');

        return redirect(route('beratdantinggis.index'));
    }
}
