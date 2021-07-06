<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatetrackerdetailRequest;
use App\Http\Requests\UpdatetrackerdetailRequest;
use App\Repositories\TrackerDetailRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class TrackerDetailController extends AppBaseController
{
    /** @var  trackerdetailRepository */
    private $trackerdetailRepository;

    public function __construct(TrackerDetailRepository $trackerdetailRepo)
    {
        $this->trackerdetailRepository = $trackerdetailRepo;
    }

    /**
     * Display a listing of the trackerdetail.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index($id)
    {
        $trackerdetails = $this->trackerdetailRepository->find($id);
        if (empty($trackerdetail)) {
            Flash::error('Trackerdetail not found');

            return redirect(route('trackers.index'));
        }

        return view('trackerdetails.index')
            ->with('trackerdetails', $trackerdetails);
    }

    /**
     * Show the form for creating a new trackerdetail.
     *
     * @return Response
     */
    public function create()
    {
        return view('trackerdetails.create');
    }

    /**
     * Store a newly created trackerdetail in storage.
     *
     * @param CreatetrackerdetailRequest $request
     *
     * @return Response
     */
    public function store(CreatetrackerdetailRequest $request)
    {
        $input = $request->all();

        $trackerdetail = $this->trackerdetailRepository->create($input);

        Flash::success('Trackerdetail saved successfully.');

        return redirect(route('trackerdetails.index'));
    }

    /**
     * Display the specified trackerdetail.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $trackerdetail = $this->trackerdetailRepository->find($id);

        if (empty($trackerdetail)) {
            Flash::error('Trackerdetail not found');

            return redirect(route('trackerdetails.index'));
        }

        return view('trackerdetails.show')->with('trackerdetail', $trackerdetail);
    }

    /**
     * Show the form for editing the specified trackerdetail.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $trackerdetail = $this->trackerdetailRepository->find($id);

        if (empty($trackerdetail)) {
            Flash::error('Trackerdetail not found');

            return redirect(route('trackerdetails.index'));
        }

        return view('trackerdetails.edit')->with('trackerdetail', $trackerdetail);
    }

    /**
     * Update the specified trackerdetail in storage.
     *
     * @param int $id
     * @param UpdatetrackerdetailRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatetrackerdetailRequest $request)
    {
        $trackerdetail = $this->trackerdetailRepository->find($id);

        if (empty($trackerdetail)) {
            Flash::error('Trackerdetail not found');

            return redirect(route('trackerdetails.index'));
        }

        $trackerdetail = $this->trackerdetailRepository->update($request->all(), $id);

        Flash::success('Trackerdetail updated successfully.');

        return redirect(route('trackerdetails.index'));
    }

    /**
     * Remove the specified trackerdetail from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $trackerdetail = $this->trackerdetailRepository->find($id);

        if (empty($trackerdetail)) {
            Flash::error('Trackerdetail not found');

            return redirect(route('trackerdetails.index'));
        }

        $this->trackerdetailRepository->delete($id);

        Flash::success('Trackerdetail deleted successfully.');

        return redirect(route('trackerdetails.index'));
    }
}
