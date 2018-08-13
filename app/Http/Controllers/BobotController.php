<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateBobotRequest;
use App\Http\Requests\UpdateBobotRequest;
use App\Repositories\BobotRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;
use App\Models\Bobot;

class BobotController extends AppBaseController
{
    /** @var  BobotRepository */
    private $bobotRepository;

    public function __construct(BobotRepository $bobotRepo)
    {
        $this->bobotRepository = $bobotRepo;
    }

    /**
     * Display a listing of the Bobot.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->bobotRepository->pushCriteria(new RequestCriteria($request));
        $bobots = $this->bobotRepository->all();
        $bobot= Bobot::select('bobot')->get();
        foreach ($bobot as $key) {

            $a=$key->bobot/2;
            echo $a.'<br>';
            # code...
        }

       // return $bobot;


        return view('bobots.index')
            ->with('bobots', $bobots);
    }

    /**
     * Show the form for creating a new Bobot.
     *
     * @return Response
     */
    public function create()
    {
        return view('bobots.create');
    }

    /**
     * Store a newly created Bobot in storage.
     *
     * @param CreateBobotRequest $request
     *
     * @return Response
     */
    public function store(CreateBobotRequest $request)
    {
        $input = $request->all();

        $bobot = $this->bobotRepository->create($input);

        Flash::success('Bobot saved successfully.');

        return redirect(route('bobots.index'));
    }

    /**
     * Display the specified Bobot.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $bobot = $this->bobotRepository->findWithoutFail($id);

        if (empty($bobot)) {
            Flash::error('Bobot not found');

            return redirect(route('bobots.index'));
        }

        return view('bobots.show')->with('bobot', $bobot);
    }

    /**
     * Show the form for editing the specified Bobot.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $bobot = $this->bobotRepository->findWithoutFail($id);

        if (empty($bobot)) {
            Flash::error('Bobot not found');

            return redirect(route('bobots.index'));
        }

        return view('bobots.edit')->with('bobot', $bobot);
    }

    /**
     * Update the specified Bobot in storage.
     *
     * @param  int              $id
     * @param UpdateBobotRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateBobotRequest $request)
    {
        $bobot = $this->bobotRepository->findWithoutFail($id);

        if (empty($bobot)) {
            Flash::error('Bobot not found');

            return redirect(route('bobots.index'));
        }

        $bobot = $this->bobotRepository->update($request->all(), $id);

        Flash::success('Bobot updated successfully.');

        return redirect(route('bobots.index'));
    }

    /**
     * Remove the specified Bobot from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $bobot = $this->bobotRepository->findWithoutFail($id);

        if (empty($bobot)) {
            Flash::error('Bobot not found');

            return redirect(route('bobots.index'));
        }

        $this->bobotRepository->delete($id);

        Flash::success('Bobot deleted successfully.');

        return redirect(route('bobots.index'));
    }
}
