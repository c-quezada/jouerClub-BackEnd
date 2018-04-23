<?php

namespace App\Http\Controllers\Branch;

use App\Branch;
use App\Skill;
use Illuminate\Http\Request;
use App\Http\Controllers\ApiController;

class BranchSkillController extends ApiController
{
    public function __construct()
    {
      parent::__construct();
    }

    public function index(Branch $branch)
    {
        $skills = $branch->skills;
        return $this->showAll($skills);
    }
}
