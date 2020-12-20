<?php

namespace App\Http\Controllers;

use App\Models\Person;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;

class DrawController extends Controller
{
    public function index()
    {
        return view('draw.index');
    }

    public function drawResult(Request $request)
    {

        $drawname = $request->input('drawname');
        $result = "";
        $people = Person::select('username')->
        where([
            'post' => $request->input('post'),
            'follow' => $request->input('follow'),
            'tag' => $request->input('tag'),
        ])->get();

        $pnumber = count($people);
        $winperson = $request->input('winperson');

        if($winperson <= $pnumber) {


        for ($i = 1; $i <= $winperson; $i++) {
            $rnumber = rand(0, $pnumber - 1);

            $result .=  "<b>".$i."</b>".'-'.$people[$rnumber]['username'] . "<br/>";

        }
    }
    else{
        echo "Kazanacak sayısı, katılımcı sayısından daha fazla olamaz.";
    }

        return view('draw.draw', [
            'result' => $result,
            'drawname' => $drawname
        ]);

            }

}






