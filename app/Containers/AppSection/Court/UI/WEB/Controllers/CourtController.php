<?php

declare(strict_types=1);

namespace App\Containers\AppSection\Court\UI\WEB\Controllers;

use App\Containers\AppSection\Court\Actions\CreateCourtAction;
use App\Containers\AppSection\Court\Actions\FindCourtByIdAction;
use App\Containers\AppSection\Court\Actions\UpdateCourtAction;
use App\Containers\AppSection\Court\Actions\DeleteCourtAction;
use App\Containers\AppSection\Court\Actions\ListCourtsAction;
use App\Containers\AppSection\Court\UI\WEB\Requests\CreateCourtRequest;
use App\Containers\AppSection\Court\UI\WEB\Requests\UpdateCourtRequest;
use App\Ship\Parents\Controllers\Controller as ParentController;

class CourtController extends ParentController
{
    public function __construct(
        private FindCourtByIdAction $findCourtByIdAction,
        private UpdateCourtAction $updateCourtAction,
        private DeleteCourtAction $deleteCourtAction,
        private CreateCourtAction $createCourtAction,
        private ListCourtsAction $listCourtsAction
    ) {}

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('Court.UI.WEB.Views.list', [
            'courts' => $this->listCourtsAction->run()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Court.UI.WEB.Views.form.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CreateCourtRequest $request)
    {
        $data = $request->validated();
        $this->createCourtAction->run($data);

        return redirect()->route('courts.index')
            ->with(['status' => 'success', 'message' => 'Court has been created!']);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(int $id)
    {
        return view('Court.UI.WEB.Views.form.edit', [
            'court' => $this->findCourtByIdAction->run($id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCourtRequest $request, int $id)
    {
        $data = $request->validated();
        $this->updateCourtAction->run($id, $data);

        return redirect()->route('courts.index')
            ->with(['status' => 'success', 'message' => 'Court has been updated!']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
        $this->deleteCourtAction->run($id);

        return redirect()->route('courts.index')
            ->with(['status' => 'success', 'message' => 'Court has been deleted!']);
    }
}
