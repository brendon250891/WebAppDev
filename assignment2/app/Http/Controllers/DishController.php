<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Dish;
use App\Auth;

class DishController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Displays the dish creation page allowing a restaurant user to create dishes.
     *
     * @return \Illuminate\Http\Response - The view to return
     */
    public function create()
    {
        return view('users.restaurant.dishes.add_dish_form')->with('user', auth()->user());
    }

    /**
     * Creates a new dish item for the restaurant that made it.
     *
     * @param  \Illuminate\Http\Request  $request - The data passed from the view
     * @return \Illuminate\Http\Response - The redirect location after creation.
     */
    public function store(Request $request)
    {
        // Do required validation.
        $this->validate($request, [
            'name' => 'required|unique:dishes,name,NULL,id,user_id,'.$request['restaurant'],
            'price' => 'required|numeric|min:1',
            'image' => 'mimes:jpeg,png,jpg'
        ]);
        $image = "";
        
        // Check if a file was selected for upload.
        if ($request->hasFile('image')) {
            $image = request()->file('image')->store('images', 'public');
        } else {
            $image = "images/noimage.png";
        }

        // Create dish
        $dish = Dish::create([
            'name' => $request['name'],
            'price' => $request['price'],
            'available' => true,
            'image' => "images/".$image,
            'user_id' => $request['restaurant']
        ]);
        $user_id = $request['restaurant'];
        return redirect("user/$user_id");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Displays the edit dish form
     *
     * @param  int  $id - The id of the dish to edit.
     * @return \Illuminate\Http\Response - The view to go to after editing is completed.
     */
    public function edit($id)
    {
        // Takes the user to the edit dish
        $dish = Dish::find($id);
        if (auth()->user()->id == $dish->user_id) {
            return view('users.restaurant.dishes.edit_dish_form')->with('dish', Dish::find($id));
        } else {
            return view('denied');
        }
    }

    /**
     * Updates the dish.
     *
     * @param  \Illuminate\Http\Request  $request - The data passed from the view.
     * @param  int  $id - The id of the dish
     * @return \Illuminate\Http\Response - Where to go after updating is complete.
     */
    public function update(Request $request, $id)
    {
        $dish = Dish::find($id);
        // Check if the restaurant owns the dish.
        if ($request['restaurant'] == $dish->user_id) {
            // Do required validation.
            $this->validate($request, [
                'name' => 'required|unique:dishes,name,'.$dish->id,
                'price' => 'required|numeric|min:1'
            ]);
            $image = "";
            // Check if there is a file.
            if ($request->hasFile('image')) {
                $image = request()->file('image')->store('images', 'public');
            }

            // Update dish
            $dish->update([
                'name' => $request['name'],
                'price' => $request['price'],
                'available' => $request['available'] == "on" ? true : false,
                'image' => $image == "" ? $dish->image : "images/".$image
            ]);
            return redirect("user/$dish->user_id");
        } else {
            return view('denied');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
