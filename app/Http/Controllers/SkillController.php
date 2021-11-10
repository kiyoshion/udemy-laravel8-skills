<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Skill;

class SkillController extends Controller
{
    public function index()
    {
        $skills = Skill::paginate(10);
        return view('skill.index', [
            'skills' => $skills
        ]);
    }

    public function show($id)
    {
        $skill = Skill::find($id);
        return view('skill.show', [
            'skill' => $skill
        ]);
    }
}
