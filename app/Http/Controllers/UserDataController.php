<?php

namespace App\Http\Controllers;

use App\Core\Services\Contracts\IUserDataService;
use App\Models\UserData;
use Illuminate\Http\Request;

class UserDataController extends Controller
{
    /* @var IUserDataService */
    protected $userDataService;

    public function __construct(IUserDataService $userDataService)
    {
        $this->userDataService = $userDataService;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Database\Eloquent\Model
     */
    public function store(Request $request)
    {
        return $this->userDataService->create($request->all());
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\UserData  $userData
     * @return \Illuminate\Database\Eloquent\Model
     */
    public function update(Request $request, UserData $userData)
    {
        return $this->userDataService->update($userData->id, $request->all());
    }
}
