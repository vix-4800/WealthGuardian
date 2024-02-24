<?php

namespace App\Http\Controllers\Profile;

use App\Http\Controllers\Controller;
use App\Http\Requests\JoinFamilyRequest;
use App\Models\Family;
use App\Models\User;
use App\Services\FamilyService;

class FamilyController extends Controller
{
    private FamilyService $service;

    public function __construct(FamilyService $service)
    {
        $this->service = $service;
    }

    public function index()
    {
        return view('pages.profile.families.index', [
            'familyMembers' => $this->service->getFamilyMembers(),
            'isCreator' => auth()->user()->isFamilyCreator(),
        ]);
    }

    public function create()
    {
        auth()->user()->createNewFamily();

        return back();
    }

    public function kick(User $member)
    {
        $this->service->kickMember($member);

        return back();
    }

    public function join(JoinFamilyRequest $request)
    {
        $family = Family::whereInvitationCode($request->validated()['code'])->first();

        if (! $family) {
            return back();
        }

        auth()->user()->joinFamily($family);

        return redirect()->route('family.index');
    }
}
