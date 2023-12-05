<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Service\ExpertiseService;

class ExpertiseController extends Controller
{
    protected $expertiseService;

    public function __construct(ExpertiseService $expertiseService)
    {
        $this->expertiseService = $expertiseService;
    }

    public function index()
    {
        $expertises = $this->expertiseService->getAllExpertises();

        return view('expertise.list', compact('expertises'));
    }

    public function destroy($id)
    {
        $expertise = $this->expertiseService->deleteExpertiseById($id);

        return redirect()->route('expertise.index');
    }
}
