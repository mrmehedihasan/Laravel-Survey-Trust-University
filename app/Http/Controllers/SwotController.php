<?php

namespace App\Http\Controllers;
use App\Models\SWOT;
use Illuminate\Http\Request;

class SwotController extends Controller{

    public function create(Request $request){
        $request->validate([
            'name' => 'required',
            'contact' => 'required|between:11,15',
        ]);
        $swot = new SWOT();
        $swot->name = $request->name;
        $swot->contact = $request->contact;
        $swot->position = $request->type;
        $swot['strength-a'] = $request['strength-a'];
        $swot['strength-b'] = $request['strength-b'];
        $swot['strength-c'] = $request['strength-c'];
        $swot['strength-d'] = $request['strength-d'];
        $swot['strength-outcome-a'] = $request['strength-outcome-a'];
        $swot['strength-outcome-b'] = $request['strength-outcome-b'];
        $swot['strength-outcome-c'] = $request['strength-outcome-c'];
        $swot['strength-outcome-d'] = $request['strength-outcome-d'];
        $swot['weakness-a'] = $request['weakness-a'];
        $swot['weakness-b'] = $request['weakness-b'];
        $swot['weakness-c'] = $request['weakness-c'];
        $swot['weakness-d'] = $request['weakness-d'];
        $swot['weakness-overcome-a'] = $request['weakness-overcome-a'];
        $swot['weakness-overcome-b'] = $request['weakness-overcome-b'];
        $swot['weakness-overcome-c'] = $request['weakness-overcome-c'];
        $swot['weakness-overcome-d'] = $request['weakness-overcome-d'];
        $swot['opportunities-a'] = $request['opportunities-a'];
        $swot['opportunities-b'] = $request['opportunities-b'];
        $swot['opportunities-c'] = $request['opportunities-c'];
        $swot['opportunities-d'] = $request['opportunities-d'];
        $swot['opportunities-utilize-a'] = $request['opportunities-utilize-a'];
        $swot['opportunities-utilize-b'] = $request['opportunities-utilize-b'];
        $swot['opportunities-utilize-c'] = $request['opportunities-utilize-c'];
        $swot['opportunities-utilize-d'] = $request['opportunities-utilize-d'];
        $swot['threats-a'] = $request['threats-a'];
        $swot['threats-b'] = $request['threats-b'];
        $swot['threats-c'] = $request['threats-c'];
        $swot['threats-d'] = $request['threats-d'];
        $swot['threats-minimized-a'] = $request['threats-minimized-a'];
        $swot['threats-minimized-b'] = $request['threats-minimized-b'];
        $swot['threats-minimized-c'] = $request['threats-minimized-c'];
        $swot['threats-minimized-d'] = $request['threats-minimized-d'];
        $swot['comments'] = $request['comments'];

        $swot->save();


        return redirect('/success');
    }

    public function success(){
        return view('success');
    }
}

/**
 * array:37 [▼ // app\Http\Controllers\SwotController.php:21
  "_token" => "TQBzB642quZCb3yOmf7DfaLmwalxLevfmqkJrNrI"
  "type" => "non-academic"
  "name" => "sdfgsdga"
  "contact" => "01601300220"
  "strength-a" => null
  "strength-b" => null
  "strength-c" => null
  "strength-d" => null
  "strength-outcome-a" => null
  "strength-outcome-b" => null
  "strength-outcome-c" => null
  "strength-outcome-d" => null
  "weakness-a" => null
  "weakness-b" => null
  "weakness-c" => null
  "weakness-d" => null
  "weakness-overcome-a" => null
  "weakness-overcome-b" => null
  "weakness-overcome-c" => null
  "weakness-overcome-d" => null
  "opportunities-a" => null
  "opportunities-b" => null
  "opportunities-c" => null
  "opportunities-d" => null
  "opportunities-utilize-a" => null
  "opportunities-utilize-b" => null
  "opportunities-utilize-c" => null
  "opportunities-utilize-d" => null
  "threats-a" => null
  "threats-b" => null
  "threats-c" => null
  "threats-d" => null
  "threats-minimized-a" => null
  "threats-minimized-b" => null
  "threats-minimized-c" => null
  "threats-minimized-d" => null
  "comments" => null
]
 *
 */
