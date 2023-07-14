<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Type;

class TypeController extends Controller
{

    private $validations = [
        'type'     => 'required|string|min:5|max:100',
        'collabs'     => 'required|string|min:5|max:100',

    ];

    private $validation_messages = [
        'required'  => 'Il campo :attribute è obbligatorio',
        'min'       => 'Il campo :attribute deve avere almeno :min caratteri',
        'max'       => 'Il campo :attribute non può superare i :max caratteri',

    ];

    public function index()
    {
        $types = Type::paginate(5);
        return view('admin.types.index', compact('types'));
    }


    public function create()
    {
        return view('admin.types.create');
    }


    public function store(Request $request)
    {

        $request->validate($this->validations, $this->validation_messages);

        $data = $request->all();


        $newType = new Type();

        $newType->type     = $data['type'];
        $newType->collabs     = $data['collabs'];
        $newType->save();

        return to_route('admin.types.show', ['type' => $newType]);
    }


    public function show(Type $type)
    {
        return view('admin.types.show', compact('type'));
    }


    public function edit(Type $type)
    {

        return view('admin.types.edit', compact('type'));
    }



    public function update(Request $request, Type $type)
    {

        $request->validate($this->validations);


        $data = $request->all();

        $type->type = $data['type'];
        $type->collabs = $data['collabs'];
        $type->update();

        return redirect()->route('admin.types.index', ['type' => $type]);
    }


    public function destroy(Type $type)
    {
        foreach ($type->project as $project) {
            $project->type_id = 1;
            $project->update();
        }

        $type->delete();

        return to_route('admin.types.index')->with('delete_success', $type);
    }
}
