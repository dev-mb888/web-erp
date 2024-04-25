<?php

namespace App\Services\Product;

use App\Models\Category;

class CategoryService
{
    public function make()
    {
        return new static();
    }

    public function createCategory(string $name, string $description)
    {
        return Category::create([
            'name' => $name,
            'description' => $description,
        ]);
    }

    public function editCategory(Category $category, string $name, string $description)
    {
        $category->update([
            'name' => $name,
            'description' => $description
        ]);
    }

    public function deleteCategory(Category $category)
    {
        $category->delete();
    }


}
