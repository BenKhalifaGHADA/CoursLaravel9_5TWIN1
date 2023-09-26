<?php

namespace App\Http\Controllers;

use App\Models\Module;
use Illuminate\Http\Request;

class ModuleController extends Controller
{
    public function affiche(){
        $listmodules=Module::all();//select * from Module;
        return view('modules.cours',compact('listmodules'));
       // return view('modules.cours')->with(['listmodules'=> $listmodules]);
        //return view ('modules.cours')->withListmodules($listmodules);

   }

   public function show($id){
        $module=Module::find($id);    //select from module where id_module=$id;
        return view('modules.show', compact('module'));
   }

   public function destroy($id){
        $module=Module::find($id);
        $module->delete();
        return redirect()->route('module.affiche');
   }

   public function create(){
        return view('modules.add');
   }

   public function store(Request $request){
        $module=new Module();
        $module->Nom_Module=$request->Nom_Module;
        $module->description=$request->description;
        $module->duree=$request->duree;
        //$request->all()
       $module->save();
       return redirect('/cours');
   }


    public function edit(Request $request)
    {
        $module=\App\Models\Module::find($request->id);
        return view('modules.edit',compact('module'));
    }

    public function update(Request $request, $id)
    {
        // Récupérez le module en fonction de l'ID
        $module = Module::find($id);

        if (!$module) {
            return redirect()->route('module.affiche');
        }

        // Mettez à jour les attributs du modèle avec les données du formulaire
        $module->Nom_module = $request->input('Nom_Module');
        $module->description = $request->input('description');
        $module->duree = $request->input('duree');

        // Sauvegardez les modifications dans la base de données
        $module->save();

        return redirect()->route('module.affiche');
    }
}
