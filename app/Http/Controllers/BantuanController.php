<?php 

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;

use Illuminate\Http\Request;

class BantuanController extends Controller {

	 public function index()
    {
        return view('inputdata');
    }

    public function create()
    {
    	return view('inputdata');
    }

    public function edit()
    {

       $detail="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vitae mattis lacus. Ut scelerisque, orci a accumsan finibus, magna leo sagittis orci, convallis venenatis lacus elit at arcu. Sed faucibus ante quis est sagittis euismod. Vestibulum porta nibh in egestas pretium. Sed euismod laoreet nisi. Proin auctor hendrerit posuere. Aliquam erat volutpat. Nunc orci ante, sagittis ac accumsan in, rutrum vitae tortor. Maecenas egestas, mi nec pretium tincidunt, enim massa bibendum leo, a lobortis leo nibh nec velit. Etiam ut elit dui. Sed luctus fringilla scelerisque. Proin ut nibh quis turpis porttitor interdum. Aliquam nec urna euismod, sollicitudin odio vitae, sagittis lacus. Proin fermentum, nunc id tempus fringilla, sapien libero venenatis ante, non gravida odio erat vel risus. In consectetur rutrum est vitae ornare. Integer felis mi, vestibulum vel aliquet vel, varius quis elit. Pellentesque lacinia auctor felis, nec lobortis quam pharetra ac. Vestibulum condimentum purus at ligula fringilla vestibulum. Suspendisse magna ex, tincidunt a ante vitae, varius sagittis nisi. Sed vitae mauris sapien. In tincidunt odio augue, ac pharetra quam elementum id. Nulla tellus ipsum, finibus in tellus sed, volutpat maximus erat. Suspendisse dignissim magna in turpis posuere finibus. Cras ut turpis et tellus vehicula faucibus. Ut in euismod est. Nam vestibulum nisi purus, vitae feugiat libero pulvinar ullamcorper. Donec at velit pulvinar orci imperdiet egestas vel a urna. Cras risus leo, gravida sit amet sagittis a, viverra id quam. Nam feugiat lobortis est vel feugiat. Praesent libero tortor, interdum id rhoncus sit amet, condimentum ut felis. Vestibulum sit amet pharetra odio. Phasellus et scelerisque metus. In iaculis vulputate erat et imperdiet. Nulla nec condimentum odio, et laoreet ligula. Quisque finibus orci at purus finibus, in semper erat volutpat. Ut a lorem ornare, consectetur massa sit amet, dictum elit. Classa aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Morbi ac dapibus felis, scelerisque ornare tellus. Quisque vel neque imperdiet urna vestibulum mattis et vel ipsum. Quisque non tellus sit amet eros congue sollicitudin quis in mauris. Curabitur a mattis risus. Sed sit amet purus ante. Nullam laoreet ex nec bibendum ullamcorper. Ut sed faucibus ex, nec maximus dui. Aliquam eu euismod nisl, non lacinia nulla. Duis efficitur luctus nisl, a consectetur leo dapibus vel. Ut id auctor nunc. In commodo at nunc vitae laoreet. Etiam rhoncus eu erat rutrum bibendum. Nullam ultricies posuere risus, non venenatis ipsum tincidunt ut.";


        return view ('bantuan',compact('detail'));
    }

    public function tampilbantuan()
    {
        echo $username;
        return view('tampil');
    }
}