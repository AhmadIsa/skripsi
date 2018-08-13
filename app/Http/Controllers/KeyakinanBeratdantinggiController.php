<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateKeyakinanBeratdantinggiRequest;
use App\Http\Requests\UpdateKeyakinanBeratdantinggiRequest;
use App\Repositories\KeyakinanBeratdantinggiRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class KeyakinanBeratdantinggiController extends AppBaseController
{
    /** @var  KeyakinanBeratdantinggiRepository */
    private $keyakinanBeratdantinggiRepository;

    public function __construct(KeyakinanBeratdantinggiRepository $keyakinanBeratdantinggiRepo)
    {
        $this->keyakinanBeratdantinggiRepository = $keyakinanBeratdantinggiRepo;
    }

    /**
     * Display a listing of the KeyakinanBeratdantinggi.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->keyakinanBeratdantinggiRepository->pushCriteria(new RequestCriteria($request));
        $keyakinanBeratdantinggis = $this->keyakinanBeratdantinggiRepository->all();

        return view('keyakinan_beratdantinggis.index')
            ->with('keyakinanBeratdantinggis', $keyakinanBeratdantinggis);
    }

    /**
     * Show the form for creating a new KeyakinanBeratdantinggi.
     *
     * @return Response
     */
    public function create()
    {
        return view('keyakinan_beratdantinggis.create');
    }

    /**
     * Store a newly created KeyakinanBeratdantinggi in storage.
     *
     * @param CreateKeyakinanBeratdantinggiRequest $request
     *
     * @return Response
     */
    public function store(CreateKeyakinanBeratdantinggiRequest $request)
    {
        $input = $request->all();

        $keyakinanBeratdantinggi = $this->keyakinanBeratdantinggiRepository->create($input);

        Flash::success('Keyakinan Beratdantinggi saved successfully.');

        return redirect(route('keyakinanBeratdantinggis.index'));
    }

    /**
     * Display the specified KeyakinanBeratdantinggi.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $keyakinanBeratdantinggi = $this->keyakinanBeratdantinggiRepository->findWithoutFail($id);

        if (empty($keyakinanBeratdantinggi)) {
            Flash::error('Keyakinan Beratdantinggi not found');

            return redirect(route('keyakinanBeratdantinggis.index'));
        }

        return view('keyakinan_beratdantinggis.show')->with('keyakinanBeratdantinggi', $keyakinanBeratdantinggi);
    }

    /**
     * Show the form for editing the specified KeyakinanBeratdantinggi.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $keyakinanBeratdantinggi = $this->keyakinanBeratdantinggiRepository->findWithoutFail($id);

        if (empty($keyakinanBeratdantinggi)) {
            Flash::error('Keyakinan Beratdantinggi not found');

            return redirect(route('keyakinanBeratdantinggis.index'));
        }

        return view('keyakinan_beratdantinggis.edit')->with('keyakinanBeratdantinggi', $keyakinanBeratdantinggi);
    }

    /**
     * Update the specified KeyakinanBeratdantinggi in storage.
     *
     * @param  int              $id
     * @param UpdateKeyakinanBeratdantinggiRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateKeyakinanBeratdantinggiRequest $request)
    {
        $keyakinanBeratdantinggi = $this->keyakinanBeratdantinggiRepository->findWithoutFail($id);

        if (empty($keyakinanBeratdantinggi)) {
            Flash::error('Keyakinan Beratdantinggi not found');

            return redirect(route('keyakinanBeratdantinggis.index'));
        }

        $keyakinanBeratdantinggi = $this->keyakinanBeratdantinggiRepository->update($request->all(), $id);

        Flash::success('Keyakinan Beratdantinggi updated successfully.');

        return redirect(route('keyakinanBeratdantinggis.index'));
    }

    /**
     * Remove the specified KeyakinanBeratdantinggi from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $keyakinanBeratdantinggi = $this->keyakinanBeratdantinggiRepository->findWithoutFail($id);

        if (empty($keyakinanBeratdantinggi)) {
            Flash::error('Keyakinan Beratdantinggi not found');

            return redirect(route('keyakinanBeratdantinggis.index'));
        }

        $this->keyakinanBeratdantinggiRepository->delete($id);

        Flash::success('Keyakinan Beratdantinggi deleted successfully.');

        return redirect(route('keyakinanBeratdantinggis.index'));
    }
}
