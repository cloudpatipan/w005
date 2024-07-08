<?php

namespace App\Http\Controllers;

use App\Models\VaccineRecord;
use App\Models\Vaccine;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class VaccineProgramChartController extends Controller
{
    public function index()
    {
        $VaccineCountsByProgram = VaccineRecord::select('program_th', DB::raw('count(*) as vaccine_count'))
        ->join('student', 'student.id', '=', 'vaccine_record.std_id')
        ->join('program', 'student.std_prg_id', '=', 'program.id')
        ->whereYear('vaccine_record.vaccined_date', 2023)
        ->groupBy('program_th')
        ->orderBy('program_th')
        ->pluck('program_th', 'vaccine_count');
        return view('vaccine.vaccine_program_chart', compact('VaccineCountsByProgram'));
    }
}
