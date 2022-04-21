<?php

namespace Seemab40615\Learningpkgdev\Http\Controllers;

use Seemab40615\Learningpkgdev\Services\LearningService;

class LearningController extends Controller
{
    private LearningService $learningService;

    public function __construct(LearningService $learningService)
    {
        $this->learningService = $learningService;
    }

    public function index()
    {
        if ($this->learningService->isLearningGood()) {
            return "Yes";
        } else {
            return "No";
        }
    }
}
