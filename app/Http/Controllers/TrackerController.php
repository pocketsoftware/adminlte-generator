<?php

namespace App\Http\Controllers;
use App\Imports\TrackerImport;
use App\Http\Requests\CreatetrackerRequest;
use App\Http\Requests\UpdatetrackerRequest;
use App\Repositories\TrackerRepository;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Excel;
use Flash;
use Response;

class TrackerController extends AppBaseController
{
    /** @var  trackerRepository */
    private $trackerRepository;

    public function __construct(TrackerRepository $trackerRepo)
    {
        $this->trackerRepository = $trackerRepo;
    }

    /**
     * Display a listing of the tracker.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $trackers = $this->trackerRepository->all();

        return view('trackers.index')
            ->with('trackers', $trackers);
    }

    /**
     * Show the form for creating a new tracker.
     *
     * @return Response
     */
    public function create()
    {
        return view('trackers.create');
    }

    /**
     * Store a newly created tracker in storage.
     *
     * @param CreatetrackerRequest $request
     *
     * @return Response
     */
    public function store(CreatetrackerRequest $request)
    {
        $input = $request->all();
         //dd($input);
        $destinationPath =  'uploads';
        $file = $request->verifyfile;
        $request->verifyfile->store( $destinationPath . '/'. $file->getClientOriginalName());
        //$file->move($destinationPath,$file->getClientOriginalName());
        $input['verifyfile'] = Storage::url($destinationPath . '/'.$file->getClientOriginalName()); 
        $tracker = $this->trackerRepository->create($input);
        Excel::import(new TrackerImport, $request->verifyfile);

        Flash::success('Tracker saved successfully.');

        return redirect(route('trackers.index'));
    }

    /**
     * Display the specified tracker.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $tracker = $this->trackerRepository->find($id);

        if (empty($tracker)) {
            Flash::error('Tracker not found');

            return redirect(route('trackers.index'));
        }

        return view('trackers.show')->with('tracker', $tracker);
    }

    /**
     * Show the form for editing the specified tracker.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $tracker = $this->trackerRepository->find($id);

        if (empty($tracker)) {
            Flash::error('Tracker not found');

            return redirect(route('trackers.index'));
        }

        return view('trackers.edit')->with('tracker', $tracker);
    }

    /**
     * Update the specified tracker in storage.
     *
     * @param int $id
     * @param UpdatetrackerRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatetrackerRequest $request)
    {
        $tracker = $this->trackerRepository->find($id);

        if (empty($tracker)) {
            Flash::error('Tracker not found');

            return redirect(route('trackers.index'));
        }

        $tracker = $this->trackerRepository->update($request->all(), $id);

        Flash::success('Tracker updated successfully.');

        return redirect(route('trackers.index'));
    }

    /**
     * Remove the specified tracker from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $tracker = $this->trackerRepository->find($id);

        if (empty($tracker)) {
            Flash::error('Tracker not found');

            return redirect(route('trackers.index'));
        }

        $this->trackerRepository->delete($id);

        Flash::success('Tracker deleted successfully.');

        return redirect(route('trackers.index'));
    }
}
