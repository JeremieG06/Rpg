<?php

namespace App\Http\Controllers;

use App\Models\Group;
use Illuminate\Http\Request;

class GroupController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $groups = Group::all();
        return view('groups.index', ['groups' => $groups]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('groups.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string|max:255',
            'size' => 'required|string',
        ]);

        $group = new Group;
        $group->name = $validatedData['name'];
        $group->description = $validatedData['description'];
        $group->size = $validatedData['size'];
        $group->save();

        // Rediriger l'utilisateur vers une page de confirmation
        return redirect()->route('groups.index')->with('success', 'Le groupe a été créé avec succès!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Group $group)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Group $group)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Group $group)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        // Récupérer le groupe à supprimer
        $group = Group::findOrFail($id);

        // Vérifier que l'utilisateur peut supprimer le groupe
        // if ($group->user_id != auth()->user()->id) {
        //     abort(403, 'Vous n\'êtes pas autorisé à supprimer ce groupe.');
        // }

        // Supprimer le groupe de la base de données
        $group->delete();

        // Rediriger l'utilisateur vers la page d'index des groupes
        return redirect()->route('groups.index')
            ->with('success', 'Le groupe a été supprimé avec succès.');
    }
}
