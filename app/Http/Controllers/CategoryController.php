<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Support\Facades\Validator;
use App\Models\Post;

class CategoryController extends Controller
{
    public function getIndex()
    {
        $categories = Category::all();
        return view('category.index', compact('categories'));
    }

    public function getShow($id)
    {
        $category = Category::findOrFail($id);
        $posts = $category->posts()->with('category')->paginate(12);
        return view('category.show', compact('category', 'posts'));
    }



    public function getCreate()
    {
        return view('category.create');
    }


    public function getEdit($id)
    {
        $category = Category::findOrFail($id);
        return view('category.edit', compact('category'));
    }

    public function store(Request $request)
    {
        // Validar datos
        $validated = $request->validate([
            'name' => 'required|string|max:255|unique:categories,name',
        ]);

        // Crear nueva categoría
        Category::create($validated);

        return redirect()->route('category.getIndex')->with('success', 'Categoría creada exitosamente.');
    }

    public function update(Request $request, $id)
    {
        $category = Category::findOrFail($id);

        // Validar datos
        $validated = $request->validate([
            'name' => 'required|string|max:255|unique:categories,name,' . $category->id,
        ]);

        // Actualizar categoría
        $category->update($validated);

        return redirect()->route('category.getIndex')->with('success', 'Categoría actualizada.');
    }

    public function destroy($id)
    {
        $category = Category::findOrFail($id);

        // Eliminar categoría
        $category->delete();

        return redirect()->route('category.getIndex')->with('success', 'Categoría eliminada.');
    }
}
