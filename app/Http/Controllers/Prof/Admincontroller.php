<?php

namespace App\Http\Controllers\Prof;

use App\User;
use App\Ordre;
use App\Contact;
use App\Livreur;
use App\Produit;
use App\categorie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
class AdminController extends Controller
{
/**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:prof');
    }

    public function index()
{
    return view('prof.dashboard.index');
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
        : redirect('/prof');


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

return view('prof.profil.index');

}



public function Affichemodifier(Request $request)
{
     $id=$request['id'];
     $users=\App\Models\Prof::find($id);
     return view('prof.profil.modifier',compact('users'));
}

public function Modifierprofileprof(Request $request)
{

    $this->validate($request, [

        'nom' => 'string|nullable|max:255',
        'email' => 'email|nullable|max:255',
        'telephone_principale' => 'integer|digits:8',
        'telephone_secondaire' => 'integer|digits:8',
        ]);

     $id=$request['id'];
     $users=\App\Models\Prof::find($id);
     $users->name=$request['name'];
     $users->email=$request['email'];
  

if($request->hasFile('image')){
            $users->image=$request->image->store('Admin');
        }
     $users->update();

     return redirect()->route('profile')->with('vert','le compte a bien été modifier');
}    
public function changemdp()
  {

return view ('prof.profil.changermot');

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

























public function Devoir()
{


return view('prof.devoir.index');

}
public function pageajoutDevoir()
{


return view('prof.devoir.add');

}

public function AjoutDevoiradmin(Request $request)
{
    $this->validate($request, [

        'file' => 'required|mimes:pdf,docx,pptx,ppt',
      
        ]);
   
   $devoir = new \App\Models\Devoir();
     $devoir->nom=$request['nom'];
     $devoir->etat=$request['etat'];
     $devoir->file=$request->file->store('Devoir');
     $devoir->titre=$request['titre'];
     $devoir->save();

     return redirect()->route('Devoirprof')->with('x','تم إضافة بنجاح  ');
}

public function supprimerDevoirAdmin($id){


    $user=\App\Models\Devoir::find($id);
    $user->delete();
   
    return  redirect()->route('Devoirprof')->with('t','تم حذف ملف بنجاح');
    }









    
public function idmajjj()
{


return view('prof.idmajya.index');

}
public function pageajoutidmaj()
{


return view('prof.idmajya.add');

}

public function Ajoutidmajj(Request $request)
{
    $this->validate($request, [

        'file' => 'required|mimes:pdf,docx,pptx,ppt',
      
        ]);
   
   $devoir = new \App\Models\Wadhaaya();
     $devoir->nom=$request['nom'];
     $devoir->etat=$request['etat'];
     $devoir->file=$request->file->store('Devoir');
     $devoir->titre=$request['titre'];
     $devoir->save();

     return redirect()->route('idmajjjprof')->with('a','تم إضافة بنجاح  ');
}

public function supprimeridmajj($id){


    $user=\App\Models\Wadhaaya::find($id);
    $user->delete();
   
    return  redirect()->route('idmajjjprof')->with('b','تم حذف ملف بنجاح');
    }










          
public function darss()
{


return view('prof.dars.index');

}
public function pageajoutdars()
{


return view('prof.dars.add');

}

public function Ajoutdars(Request $request)
{
    $this->validate($request, [

        'file' => 'required|mimes:pdf,docx,pptx,ppt',
      
        ]);
   
   $devoir = new \App\Models\Dars();
     $devoir->nom=$request['nom'];
     $devoir->etat=$request['etat'];
     $devoir->file=$request->file->store('Devoir');
     $devoir->titre=$request['titre'];
     $devoir->save();

     return redirect()->route('darssprof')->with('v','تم إضافة بنجاح  ');
}

public function supprimerdars($id){


    $user=\App\Models\Dars::find($id);
    $user->delete();
   
    return  redirect()->route('darssprof')->with('n','تم حذف ملف بنجاح');
    }







    
          
public function autree()
{


return view('prof.autre.index');

}
public function pageajoutautre()
{


return view('prof.autre.add');

}

public function Ajoutautre(Request $request)
{
    $this->validate($request, [

        'file' => 'required|mimes:webm,mp4,mpeg,xlx,xlsx',
      
        ]);
   
   $devoir = new \App\Models\Autre();
     $devoir->nom=$request['nom'];
     $devoir->etat=$request['etat'];
     $devoir->file=$request->file->store('Devoir');
     $devoir->titre=$request['titre'];
     $devoir->save();

     return redirect()->route('vedosprof')->with('l','تم إضافة بنجاح  ');
}

public function supprimerautre($id){


    $user=\App\Models\Autre::find($id);
    $user->delete();
   
    return  redirect()->route('vedosprof')->with('n','تم حذف ملف بنجاح');
    }


    public function pageajoutimage()
    {
    
    
    return view('prof.autre.addimage');
    
    }
    public function Ajoutautreimage(Request $request)
    {
        $this->validate($request, [

            'file' => 'required|mimes:png,jpg',
          
            ]);
       
       $devoir = new \App\Models\Vedos();
         $devoir->nom=$request['nom'];
         $devoir->etat=$request['etat'];
         $devoir->file=$request->file->store('Devoir');
         $devoir->titre=$request['titre'];
         $devoir->save();
    
         return redirect()->route('imageprof')->with('l','تم إضافة بنجاح  ');
    }
    public function supprimerautreimage($id){


        $user=\App\Models\Vedos::find($id);
        $user->delete();
       
        return  redirect()->route('imageprof')->with('n','تم حذف ملف بنجاح');
        }







        public function pageajoutfile()
        {
        
        
        return view('prof.autre.addfile');
        
        }
        public function Ajoutautrefile(Request $request)
        {
            $this->validate($request, [

                'file' => 'required|mimes:pdf,docx,pptx,ppt',
              
                ]);
           
           $devoir = new \App\Models\File();
             $devoir->nom=$request['nom'];
             $devoir->etat=$request['etat'];
             $devoir->file=$request->file->store('Devoir');
             $devoir->titre=$request['titre'];
             $devoir->save();
        
             return redirect()->route('files1prof')->with('l','تم إضافة بنجاح  ');
        }
        public function supprimerautrefile($id){


            $user=\App\Models\File::find($id);
            $user->delete();
           
            return  redirect()->route('files1prof')->with('n','تم حذف ملف بنجاح');
            }



public function files1()
{

return view('prof.autre.files.files');


}




public function image()
{

return view('prof.autre.files.image');


}


public function vedos()
{

return view('prof.autre.files.vedos');


}























































































}
