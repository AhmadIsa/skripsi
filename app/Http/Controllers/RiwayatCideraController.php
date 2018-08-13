<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateRiwayatCideraRequest;
use App\Http\Requests\UpdateRiwayatCideraRequest;
use App\Repositories\RiwayatCideraRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class RiwayatCideraController extends AppBaseController
{
    /** @var  RiwayatCideraRepository */
    private $riwayatCideraRepository;

    public function __construct(RiwayatCideraRepository $riwayatCideraRepo)
    {
        $this->riwayatCideraRepository = $riwayatCideraRepo;
    }

    /**
     * Display a listing of the RiwayatCidera.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->riwayatCideraRepository->pushCriteria(new RequestCriteria($request));
        $riwayatCideras = $this->riwayatCideraRepository->all();

        return view('riwayat_cideras.index')
            ->with('riwayatCideras', $riwayatCideras);
    }

    /**
     * Show the form for creating a new RiwayatCidera.
     *
     * @return Response
     */
    public function create()
    {
        return view('riwayat_cideras.create');
    }

    /**
     * Store a newly created RiwayatCidera in storage.
     *
     * @param CreateRiwayatCideraRequest $request
     *
     * @return Response
     */
    public function store(CreateRiwayatCideraRequest $request)
    {
        $input = $request->all();

        $riwayatCidera = $this->riwayatCideraRepository->create($input);

        Flash::success('Riwayat Cidera saved successfully.');

        return redirect(route('riwayatCideras.index'));
    }

    /**
     * Display the specified RiwayatCidera.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $riwayatCidera = $this->riwayatCideraRepository->findWithoutFail($id);

        if (empty($riwayatCidera)) {
            Flash::error('Riwayat Cidera not found');

            return redirect(route('riwayatCideras.index'));
        }

        return view('riwayat_cideras.show')->with('riwayatCidera', $riwayatCidera);
    }

    /**
     * Show the form for editing the specified RiwayatCidera.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $riwayatCidera = $this->riwayatCideraRepository->findWithoutFail($id);

        if (empty($riwayatCidera)) {
            Flash::error('Riwayat Cidera not found');

            return redirect(route('riwayatCideras.index'));
        }

        return view('riwayat_cideras.edit')->with('riwayatCidera', $riwayatCidera);
    }

    /**
     * Update the specified RiwayatCidera in storage.
     *
     * @param  int              $id
     * @param UpdateRiwayatCideraRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateRiwayatCideraRequest $request)
    {
        $riwayatCidera = $this->riwayatCideraRepository->findWithoutFail($id);

        if (empty($riwayatCidera)) {
            Flash::error('Riwayat Cidera not found');

            return redirect(route('riwayatCideras.index'));
        }

        $riwayatCidera = $this->riwayatCideraRepository->update($request->all(), $id);

        Flash::success('Riwayat Cidera updated successfully.');

        return redirect(route('riwayatCideras.index'));
    }

    /**
     * Remove the specified RiwayatCidera from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $riwayatCidera = $this->riwayatCideraRepository->findWithoutFail($id);

        if (empty($riwayatCidera)) {
            Flash::error('Riwayat Cidera not found');

            return redirect(route('riwayatCideras.index'));
        }

        $this->riwayatCideraRepository->delete($id);

        Flash::success('Riwayat Cidera deleted successfully.');

        return redirect(route('riwayatCideras.index'));
    }
}
