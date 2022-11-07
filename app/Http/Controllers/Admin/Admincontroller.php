<?php

namespace App\Http\Controllers\Admin;

use App\User;
use App\Ordre;
use App\Contact;
use App\Livreur;
use App\Produit;
use App\categorie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Brian2694\Toastr\Facades\Toastr;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
/**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index()
{
    return view('admin.dashboard.index');
}


public function user(Request $request)
{
    $id=$request['id'];
    $admin=\App\Models\Admin::find($id);
return view ('admin.dashboard.user.user',compact('admin'));
}

public function ModifierUser(Request $request)
{
     $id=$request['id'];
     $admin=\App\Models\Admin::find($id);
     $admin->name=$request['name'];
     $admin->email=$request['email'];
  
      
if($request->hasFile('image')){
            $admin->image=$request->image->store('kidds');
        }
     $admin->update();
     alert()->info('انذار','تم تحديث الملف الشخصي بنجاح');
     return redirect()->back();
}       


public function eleve()
{


return view('admin.eleve.index');

}

public function supprimereleve($id){
    
    
    $user=\App\Models\User::find($id);
    $user->delete();
   
    return  redirect()->route('eleve')->with('success','تم حذف تلميذ بنجاح');
    }




    public function ensin()
    {
    
    
    return view('admin.ensignant.index');
    
    }

    public function supprimerensi($id){
    
    
        $user=\App\Models\Prof::find($id);
        $user->delete();
       
        return  redirect()->route('ensin')->with('xx','تم حذف معلم بنجاح');
        }




        public function contact()
        {
        
        
        return view('admin.contact.index');
        
        }
    
        public function supprimercontact($id){
        
        
            $user=\App\Models\Contact::find($id);
            $user->delete();
           
            return  redirect()->route('contactadmin')->with('tt','تم حذف رسالة بنجاح');
            }
    



            public function feedback()
            {
            
            
            return view('admin.feedback.index');
            
            }


            public function Devoir()
            {
            
            
            return view('admin.devoir.index');
            
            }
            public function pageajoutDevoir()
            {
            
            
            return view('admin.devoir.add');
            
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
            
                 return redirect()->route('Devoiradmin')->with('x','تم إضافة بنجاح  ');
            }

            public function supprimerDevoirAdmin($id){
        
        
                $user=\App\Models\Devoir::find($id);
                $user->delete();
               
                return  redirect()->route('Devoiradmin')->with('t','تم حذف ملف بنجاح');
                }
        








                
            public function idmajjj()
            {
            
            
            return view('admin.idmajya.index');
            
            }
            public function pageajoutidmaj()
            {
            
            
            return view('admin.idmajya.add');
            
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
            
                 return redirect()->route('idmajjj')->with('a','تم إضافة بنجاح  ');
            }

            public function supprimeridmajj($id){
        
        
                $user=\App\Models\Wadhaaya::find($id);
                $user->delete();
               
                return  redirect()->route('idmajjj')->with('b','تم حذف ملف بنجاح');
                }
        









                      
            public function darss()
            {
            
            
            return view('admin.dars.index');
            
            }
            public function pageajoutdars()
            {
            
            
            return view('admin.dars.add');
            
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
            
                 return redirect()->route('darss')->with('v','تم إضافة بنجاح  ');
            }

            public function supprimerdars($id){
        
        
                $user=\App\Models\Dars::find($id);
                $user->delete();
               
                return  redirect()->route('darss')->with('n','تم حذف ملف بنجاح');
                }
        






                
                      
            public function autree()
            {
            
            
            return view('admin.autre.index');
            
            }
            public function pageajoutautre()
            {
            
            
            return view('admin.autre.add');
            
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
            
                 return redirect()->route('vedos')->with('l','تم إضافة بنجاح  ');
            }

            public function supprimerautre($id){
        
        
                $user=\App\Models\Autre::find($id);
                $user->delete();
               
                return  redirect()->route('vedos')->with('n','تم حذف ملف بنجاح');
                }


                public function pageajoutimage()
                {
                
                
                return view('admin.autre.addimage');
                
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
                
                     return redirect()->route('image')->with('l','تم إضافة بنجاح  ');
                }
                public function supprimerautreimage($id){
        
        
                    $user=\App\Models\Vedos::find($id);
                    $user->delete();
                   
                    return  redirect()->route('image')->with('n','تم حذف ملف بنجاح');
                    }







                    public function pageajoutfile()
                    {
                    
                    
                    return view('admin.autre.addfile');
                    
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
                    
                         return redirect()->route('files1')->with('l','تم إضافة بنجاح  ');
                    }
                    public function supprimerautrefile($id){
            
            
                        $user=\App\Models\File::find($id);
                        $user->delete();
                       
                        return  redirect()->route('files1')->with('n','تم حذف ملف بنجاح');
                        }
    
    

public function files1()
{

return view('admin.autre.files.files');


}


    

public function image()
{

return view('admin.autre.files.image');


}


public function vedos()
{

return view('admin.autre.files.vedos');


}


                    public function resulat()
                    {
                    
                    
                    return view('admin.resultat.index');
                    
                    }

















// devoir

                    public function resultatdevoiradmin()
                    {
                    
                    
                    return view('admin.resultat.devoir.index');
                    
                    }

                    public function Afficheresultatadmin(Request $request)
                    {
                         $id=$request['id'];
                         $produits=\App\Models\User::find($id);
           
                         return view('admin.resultat.devoir.score',compact('produits'));
                    }

//dars1 

public function resultatdevoirdars1()
{


return view('admin.resultat.drous.index1');

}

public function Afficheresultatadmindars1(Request $request)
{
     $id=$request['id'];
     $produits=\App\Models\User::find($id);

     return view('admin.resultat.drous.score1',compact('produits'));
}
  // dars2 


public function resultatdevoirdars2()
{


return view('admin.resultat.drous.index2');

}

public function Afficheresultatadmindars2(Request $request)
{
     $id=$request['id'];
     $produits=\App\Models\User::find($id);

     return view('admin.resultat.drous.score2',compact('produits'));
}


// dars3


public function resultatdevoirdars3()
{


return view('admin.resultat.drous.index3');

}

public function Afficheresultatadmindars3(Request $request)
{
     $id=$request['id'];
     $produits=\App\Models\User::find($id);

     return view('admin.resultat.drous.score3',compact('produits'));
}

// idmaj


public function resultatdevoiridmaj()
{


return view('admin.resultat.idmaj.index');

}

public function Afficheresultatadminidmaj(Request $request)
{
     $id=$request['id'];
     $produits=\App\Models\User::find($id);

     return view('admin.resultat.idmaj.score',compact('produits'));
}




public function changemdp()
  {

return view ('admin.dashboard.user.profile');

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















































}
