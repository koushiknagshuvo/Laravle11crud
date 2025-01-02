<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductControler extends Controller
{
    public function viewform()
    {
        return view("product.create");
    }

    public function store_data(Request $request)
    {
        $data = new Product();
        $data->name = $request->input("name");
        $data->gender = $request->input("gender");
        $data->country = $request->input("country");

        $checkboxdata = $request->input("skill");
        $data->skill = implode(", ", $checkboxdata);

        // Single image upload
        if ($request->hasFile("image")) {
            $image = $request->file("image");
            $imageName = time() . "." . $image->getClientOriginalExtension();
            $image->move(public_path("storage/images"), $imageName);
            $data->image = $imageName;
        }

        // Multiple images upload
        if ($request->hasFile("images")) {
            $imagesName = [];
            foreach ($request->file("images") as $image) {
                $imageName = time() . "_" . uniqid() . "." . $image->getClientOriginalExtension();
                $image->move(public_path("storage/images"), $imageName);
                $imagesName[] = $imageName;
            }
            $data->images = implode(", ", $imagesName);
        }

        $data->save();

        return back()->with('success', 'Product created successfully!');
    }
}
