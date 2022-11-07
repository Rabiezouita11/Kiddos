<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use DB ;
use PDF;
class KiddsController extends Controller
{


    public function idmaj1()
    {

return view('kidds.idmajya.text');


    }


    public function dars3()
    {

return view('kidds.drous.text3');


    }
    public function dars2()
    {

return view('kidds.drous.text2');


    }



    public function bb()
    {

return view('kidds.devoir.timeup');


    }

    public function index1()
    {

return view('kidds.devoir.index1');


    }
    public function index2()
    {

return view('kidds.devoir.index2');


    }

    public function indexautre()
    {

return view('kidds.autre.index');


    }



    public function indexidmajya()
    {

return view('kidds.idmajya.index2');


    }

    public function indexdrous()
    {

return view('kidds.drous.index2');


    }


    public function drous()
    {

return view('kidds.drous.index');


    }
    public function categdrous()
    {

return view('kidds.drous.index1');


    }
    public function categidmajya()
    {

return view('kidds.idmajya.categorie');


    }
    public function categidmajya1()
    {

return view('kidds.idmajya.index');


    }


    public function index()
    {

return view('kidds.index');


    }
    public function logout(Request $request)
    {
    
        $this->guard()->logout();
    
        $request->session()->invalidate();
    
        $request->session()->regenerateToken();
    
        if ($response = $this->loggedOut($request)) {
            return $response;
        }
    
        return $request->wantsJson()
            ? new Response('', 204)
            : redirect('/index');
    
    
    }
    protected function guard()
    {
        return Auth::guard();
    }
    protected function loggedOut(Request $request)
    {
        //
    }
public function profile()
{
return view('kidds.profil.index');
}
public function Affichemodifier(Request $request)
{
     $id=$request['id'];
     $users=\App\Models\User::find($id);
     $aa=\App\Models\ClasseSelected::all();
     return view('kidds.profil.modifierprofile',compact('users','aa'));
}

public function Modifierprofile(Request $request)
{

    $this->validate($request, [

        'nom' => 'string|nullable|max:255',
        'email' => 'email|nullable|max:255',
        'telephone_principale' => 'integer|digits:8',
        'telephone_secondaire' => 'integer|digits:8',
        ]);

     $id=$request['id'];
     $users=\App\Models\User::find($id);
     $users->name=$request['name'];
     $users->email=$request['email'];
     $users->classe=$request['classe'];
if($request->hasFile('image')){
            $users->image=$request->image->store('kidds');
        }
     $users->update();
     return redirect()->route('profilee')->with('vert','le compte a bien été modifier');
}    
public function changemdp()
  {

return view ('kidds.profil.changermotdepasse');

  }
  
  public function update_password(Request $request){
    $request->validate([
    'old_password'=>'required',
    'new_password'=>'required',
    'confirm_password'=>'required|same:new_password'
    ]);

    $current_user=auth()->user();

    if(Hash::check($request->old_password,$current_user->password)){

        $current_user->update([
            'password'=>bcrypt($request->new_password)
        ]);

        return redirect()->back()->with('success','Mot de passe bien modifié.');

    }else{
        return redirect()->back()->with('error','Ancien mot de passe incorrect.');
    }
}

public function notfound()
{

return view('kidds.404');

}


public function devoir()
{


return view('kidds.devoir.index');


}
public function text()
{


return view('kidds.devoir.text');


}

public function AjoutContactus(Request $request)
{
   
   $contacts = new \App\Models\Contact();
     $contacts->nom=$request['nom'];
     $contacts->email=$request['email'];
     $contacts->message=$request['message'];
     $contacts->save();

     return redirect()->route('contact')->with('azer','تم إرسال الرسالة');
}


public function s1(Request $request)
{
   
   $s1 = new \App\Models\Resulat();
     $s1->score=$request['1'];
     $s1->nom=$request['nom'];
     $s1->save();
     $s1 = new \App\Models\Resulat();
     $s1->score=$request['2'];
     $s1->nom=$request['nom'];
     $s1->save();
     $s1 = new \App\Models\Resulat();
     $s1->score=$request['3'];
     $s1->nom=$request['nom'];
     $s1->save();
     $s1 = new \App\Models\Resulat();
     $s1->score=$request['4'];
     $s1->nom=$request['nom'];
     $s1->save();
     $s1 = new \App\Models\Resulat();
     $s1->score=$request['5'];
     $s1->nom=$request['nom'];
     $s1->save();
     $s1 = new \App\Models\Resulat();
     $s1->score=$request['6'];
     $s1->nom=$request['nom'];
     $s1->save();
     $s1 = new \App\Models\Resulat();
     $s1->score=$request['7'];
     $s1->nom=$request['nom'];
     $s1->save();
     $s1 = new \App\Models\Resulat();
     $s1->score=$request['8'];
     $s1->nom=$request['nom'];
     $s1->save();
     $s1 = new \App\Models\Resulat();
     $s1->score=$request['9'];
     $s1->nom=$request['nom'];
     $s1->save();
     $s1 = new \App\Models\Resulat();
     $s1->score=$request['10'];
     $s1->nom=$request['nom'];
     $s1->save();
     $s1 = new \App\Models\Resulat();
     $s1->score=$request['11'];
     $s1->nom=$request['nom'];
     $s1->save();
     $s1 = new \App\Models\Resulat();
     $s1->score=$request['12'];
     $s1->nom=$request['nom'];
     $s1->save();
     $s1 = new \App\Models\Resulat();
     $s1->score=$request['13'];
     $s1->nom=$request['nom'];
     $s1->save();
     $s1 = new \App\Models\Resulat();
     $s1->score=$request['14'];
     $s1->nom=$request['nom'];
     $s1->save();
     $s1 = new \App\Models\Resulat();
     $s1->score=$request['15'];
     $s1->nom=$request['nom'];
     $s1->save();
     $s1 = new \App\Models\Resulat();
     $s1->score=$request['16'];
     $s1->nom=$request['nom'];
     $s1->save();

     $id=$request['id'];
     $users=\App\Models\User::find($id);
     $users->question1=$request['1'];
     $users->question2=$request['2'];
     $users->question3=$request['3'];
     $users->question4=$request['4'];
     $users->question5=$request['5'];
     $users->question6=$request['6'];
     $users->question7=$request['7'];
     $users->question8=$request['8'];
     $users->question9=$request['9'];
     $users->question10=$request['10'];
     $users->question11=$request['11'];
     $users->question12=$request['12'];
     $users->question13=$request['13'];
     $users->question14=$request['14'];
     $users->question15=$request['15'];
     $users->question16=$request['16'];

     $users->devoir=$request['devoir'];
     $users->update();


     return redirect()->route('text')->with('azer','le message a été bien envoyé');
}



public function s2(Request $request)
{
   
   $s1 = new \App\Models\Resultatdars1();
     $s1->score=$request['25'];
     $s1->nom=$request['nom'];
     $s1->save();
     $s1 = new \App\Models\Resultatdars1();
     $s1->score=$request['26'];
     $s1->nom=$request['nom'];
     $s1->save();
     $s1 = new \App\Models\Resultatdars1();
     $s1->score=$request['27'];
     $s1->nom=$request['nom'];
     $s1->save();
     $s1 = new \App\Models\Resultatdars1();
     $s1->score=$request['28'];
     $s1->nom=$request['nom'];
     $s1->save();
     $id=$request['id'];
     $users=\App\Models\User::find($id);
     $users->dars1=$request['1'];
     $users->dars2=$request['2'];
     $users->dars3=$request['3'];
     $users->dars4=$request['4'];
     $users->dars5=$request['5'];
     $users->dars6=$request['6'];
     $users->dars7=$request['7'];
     $users->dars8=$request['8'];
     $users->dars9=$request['9'];
     $users->dars10=$request['10'];
     $users->dars11=$request['11'];
     $users->dars12=$request['12'];
     $users->dars13=$request['13'];
     $users->dars14=$request['14'];
     $users->dars15=$request['15'];
     $users->dars16=$request['16'];
     $users->dars17=$request['17'];
     $users->dars18=$request['18'];
     $users->dars19=$request['19'];
     $users->dars20=$request['20'];
     $users->dars21=$request['21'];
     $users->dars22=$request['22'];
     $users->dars23=$request['23'];
     $users->dars24=$request['24'];
     $users->dars25=$request['25'];
     $users->dars26=$request['26'];
     $users->dars27=$request['27'];
     $users->dars28=$request['28'];
     $users->resultatdars1=$request['resultatdars1'];
     $users->update();


     return redirect()->route('devoirtest')->with('azer','le message a été bien envoyé');
}


public function s3(Request $request)
{
   
   $s1 = new \App\Models\Resultatdars2();
     $s1->score=$request['24'];
     $s1->nom=$request['nom'];
     $s1->save();
     $s1 = new \App\Models\Resultatdars2();
     $s1->score=$request['25'];
     $s1->nom=$request['nom'];
     $s1->save();
     $s1 = new \App\Models\Resultatdars2();
     $s1->score=$request['26'];
     $s1->nom=$request['nom'];
     $s1->save();
     $s1 = new \App\Models\Resultatdars2();
     $s1->score=$request['27'];
     $s1->nom=$request['nom'];
     $s1->save();
     $s1 = new \App\Models\Resultatdars2();
     $s1->score=$request['28'];
     $s1->nom=$request['nom'];
     $s1->save();
     $s1 = new \App\Models\Resultatdars2();
     $s1->score=$request['29'];
     $s1->nom=$request['nom'];
     $s1->save();
     $s1 = new \App\Models\Resultatdars2();
     $s1->score=$request['30'];
     $s1->nom=$request['nom'];
     $s1->save();
     $s1 = new \App\Models\Resultatdars2();
     $s1->score=$request['31'];
     $s1->nom=$request['nom'];
     $s1->save();

     $users = new \App\Models\Dars2();
     $users->users_id=$request['id'];
     $users->dars2_1=$request['1'];
     $users->dars2_2=$request['2'];
     $users->dars2_3=$request['3'];
     $users->dars2_4=$request['4'];
     $users->dars2_5=$request['5'];
     $users->dars2_6=$request['6'];
     $users->dars2_7=$request['7'];
     $users->dars2_8=$request['8'];
     $users->dars2_9=$request['9'];
     $users->dars2_10=$request['10'];
     $users->dars2_11=$request['11'];
     $users->dars2_12=$request['12'];
     $users->dars2_13=$request['13'];
     $users->dars2_14=$request['14'];
     $users->dars2_15=$request['15'];
     $users->dars2_16=$request['16'];
     $users->dars2_17=$request['17'];
     $users->dars2_18=$request['18'];
     $users->dars2_19=$request['19'];
     $users->dars2_20=$request['20'];
     $users->dars2_21=$request['21'];
     $users->dars2_22=$request['22'];
     $users->dars2_23=$request['23'];
     $users->dars2_24=$request['24'];
     $users->dars2_25=$request['25'];
     $users->dars2_26=$request['26'];
     $users->dars2_27=$request['27'];
     $users->dars2_28=$request['28'];
     $users->dars2_29=$request['29'];
     $users->dars2_30=$request['30'];
     $users->dars2_31=$request['31'];
     $users->resultatdars2=$request['resultatdars2'];

     $users->save();


     return redirect()->route('dars2')->with('azer','le message a été bien envoyé');
}



public function s4(Request $request)
{
   
   $s1 = new \App\Models\Resultatdars3();
     $s1->score=$request['23'];
     $s1->nom=$request['nom'];
     $s1->save();
     $s1 = new \App\Models\Resultatdars3();
     $s1->score=$request['24'];
     $s1->nom=$request['nom'];
     $s1->save();
     $s1 = new \App\Models\Resultatdars3();
     $s1->score=$request['25'];
     $s1->nom=$request['nom'];
     $s1->save();
     $s1 = new \App\Models\Resultatdars3();
     $s1->score=$request['26'];
     $s1->nom=$request['nom'];
     $s1->save();
    

     $users = new \App\Models\Dars3();
     $users->users_id=$request['id'];
     $users->dars3_1=$request['1'];
     $users->dars3_2=$request['2'];
     $users->dars3_3=$request['3'];
     $users->dars3_4=$request['4'];
     $users->dars3_5=$request['5'];
     $users->dars3_6=$request['6'];
     $users->dars3_7=$request['7'];
     $users->dars3_8=$request['8'];
     $users->dars3_9=$request['9'];
     $users->dars3_10=$request['10'];
     $users->dars3_11=$request['11'];
     $users->dars3_12=$request['12'];
     $users->dars3_13=$request['13'];
     $users->dars3_14=$request['14'];
     $users->dars3_15=$request['15'];
     $users->dars3_16=$request['16'];
     $users->dars3_17=$request['17'];
     $users->dars3_18=$request['18'];
     $users->dars3_19=$request['19'];
     $users->dars3_20=$request['20'];
     $users->dars3_21=$request['21'];
     $users->dars3_22=$request['22'];
     $users->dars3_23=$request['23'];
     $users->dars3_24=$request['24'];
     $users->dars3_25=$request['25'];
     $users->dars3_26=$request['26'];

     $users->resultatdars3=$request['resultatdars3'];
     $users->save();


     return redirect()->route('dars3')->with('azer','le message a été bien envoyé');
}



public function s5(Request $request)
{
   
   $s1 = new \App\Models\ResultatIdmaj();
     $s1->score=$request['1'];
     $s1->nom=$request['nom'];
     $s1->save();
     $s1 = new \App\Models\ResultatIdmaj();
     $s1->score=$request['2'];
     $s1->nom=$request['nom'];
     $s1->save();
     

     $users = new \App\Models\Idmaj();
     $users->users_id=$request['id'];
     $users->idmaj_1=$request['1'];
     $users->idmaj_2=$request['2'];
     $users->idmaj_3=$request['3'];
     $users->idmaj_4=$request['4'];
     $users->idmaj_5=$request['5'];
     $users->idmaj_6=$request['6'];
     $users->idmaj_7=$request['7'];
     $users->idmaj_8=$request['8'];
     $users->idmaj_9=$request['9'];
     $users->idmaj_10=$request['10'];
     $users->idmaj_11=$request['11'];
     $users->idmaj_12=$request['12'];
     $users->idmaj_13=$request['13'];
     $users->idmaj_14=$request['14'];
     $users->resultatidmaj=$request['resultatidmaj'];
     $users->save();


     return redirect()->route('idmaj1')->with('azer','le message a été bien envoyé');
}

public function resetidmaj(Request $request)
{
     $id=$request['id'];
     $tt=$request['tt'];
     DB::table('resultat_idmajs')->where('nom', '=', $id)->delete();
     DB::table('idmajs')->where('users_id', '=', $tt)->delete();
     return redirect()->route('idmaj1')->with('xxx','le produit a bien été supprimé');
}



public function about()
{


return view('kidds.about');

}


public function contact()
{


return view('kidds.contact');

}








public function resetDars3(Request $request)
{
     $id=$request['id'];
     $tt=$request['tt'];
     DB::table('resultatdars3s')->where('nom', '=', $id)->delete();
     DB::table('dars3s')->where('users_id', '=', $tt)->delete();
     return redirect()->route('dars3')->with('xxx','le produit a bien été supprimé');
}



public function resetDars2(Request $request)
{
     $id=$request['id'];
     $tt=$request['tt'];
     DB::table('resultatdars2s')->where('nom', '=', $id)->delete();
     DB::table('dars2s')->where('users_id', '=', $tt)->delete();
     $users=\App\Models\User::find($tt);
     $users->resultatdars1="non";
     $users->update();

     return redirect()->route('dars2')->with('xxx','le produit a bien été supprimé');
}















public function resetD(Request $request)
{
     $id=$request['id'];
     DB::table('resultatdars1s')->where('nom', '=', $id)->delete();
     $tt=$request['tt'];
     $users=\App\Models\User::find($tt);
     $users->resultatdars1="non";
     $users->update();
     return redirect()->route('devoirtest')->with('xxx','le produit a bien été supprimé');
}


public function reset(Request $request)
{
     $id=$request['id'];
     DB::table('resulats')->where('nom', '=', $id)->delete();
     $tt=$request['tt'];
     $users=\App\Models\User::find($tt);
     $users->devoir="non";
     $users->update();
     return redirect()->route('text')->with('xxx','le produit a bien été supprimé');
}




public function devoirtest()

{

return view('kidds.drous.text');

}














































































}

