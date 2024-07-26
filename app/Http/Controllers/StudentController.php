<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Doctrine\DBAL\Types\Type;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    public function index()
    {

        //Collection methods yang berguna untuk memproses data yang berupa array.
        //dengan adanya collection ini, kita tidak perlu repot repot lagi menulis query untuk memproses data karena dengan 
        //method method yang ada di collection tersebut seakan akan menuliskan query tersebut untuk kita

        $nilai = [1, 4, 5, 9, 5, 3, 5, 8, 4, 9, 10, 2, 9, 3];

        //php biasa
        // $countNilai = count($nilai);
        // $totalNilai = array_sum($nilai);
        // $nilaiRataRata = $totalNilai / $countNilai;

        //collection
        $nilaiRataRata = collect($nilai)->avg();

        dd($nilaiRataRata);
        
    }
}