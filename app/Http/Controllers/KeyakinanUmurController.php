<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateKeyakinanUmurRequest;
use App\Http\Requests\UpdateKeyakinanUmurRequest;
use App\Repositories\KeyakinanUmurRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class KeyakinanUmurController extends AppBaseController
{
    /** @var  KeyakinanUmurRepository */
    private $keyakinanUmurRepository;

    public function __construct(KeyakinanUmurRepository $keyakinanUmurRepo)
    {
        $this->keyakinanUmurRepository = $keyakinanUmurRepo;
    }

    /**
     * Display a listing of the KeyakinanUmur.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->keyakinanUmurRepository->pushCriteria(new RequestCriteria($request));
        $keyakinanUmurs = $this->keyakinanUmurRepository->all();

        return view('keyakinan_umurs.index')
            ->with('keyakinanUmurs', $keyakinanUmurs);
    }

    /**
     * Show the form for creating a new KeyakinanUmur.
     *
     * @return Response
     */
    public function create()
    {
        return view('keyakinan_umurs.create');
    }

    /**
     * Store a newly created KeyakinanUmur in storage.
     *
     * @param CreateKeyakinanUmurRequest $request
     *
     * @return Response
     */
    public function store(CreateKeyakinanUmurRequest $request)
    {
        $input = $request->all();

        $keyakinanUmur = $this->keyakinanUmurRepository->create($input);

        Flash::success('Keyakinan Umur saved successfully.');

        return redirect(route('keyakinanUmurs.index'));
    }

    /**
     * Display the specified KeyakinanUmur.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $keyakinanUmur = $this->keyakinanUmurRepository->findWithoutFail($id);

        if (empty($keyakinanUmur)) {
            Flash::error('Keyakinan Umur not found');

            return redirect(route('keyakinanUmurs.index'));
        }

        return view('keyakinan_umurs.show')->with('keyakinanUmur', $keyakinanUmur);
    }

    /**
     * Show the form for editing the specified KeyakinanUmur.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $keyakinanUmur = $this->keyakinanUmurRepository->findWithoutFail($id);

        if (empty($keyakinanUmur)) {
            Flash::error('Keyakinan Umur not found');

            return redirect(route('keyakinanUmurs.index'));
        }

        return view('keyakinan_umurs.edit')->with('keyakinanUmur', $keyakinanUmur);
    }

    /**
     * Update the specified KeyakinanUmur in storage.
     *
     * @param  int              $id
     * @param UpdateKeyakinanUmurRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateKeyakinanUmurRequest $request)
    {
        $keyakinanUmur = $this->keyakinanUmurRepository->findWithoutFail($id);

        if (empty($keyakinanUmur)) {
            Flash::error('Keyakinan Umur not found');

            return redirect(route('keyakinanUmurs.index'));
        }

        $keyakinanUmur = $this->keyakinanUmurRepository->update($request->all(), $id);

        Flash::success('Keyakinan Umur updated successfully.');

        return redirect(route('keyakinanUmurs.index'));
    }

    /**
     * Remove the specified KeyakinanUmur from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $keyakinanUmur = $this->keyakinanUmurRepository->findWithoutFail($id);

        if (empty($keyakinanUmur)) {
            Flash::error('Keyakinan Umur not found');

            return redirect(route('keyakinanUmurs.index'));
        }

        $this->keyakinanUmurRepository->delete($id);

        Flash::success('Keyakinan Umur deleted successfully.');

        return redirect(route('keyakinanUmurs.index'));
    }
}
