<?php

namespace App\Http\Controllers;

use App\Models\Team;
use App\Models\Teamcategory;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class TeamController extends Controller
{
    /**
     * Display a listing of teams and categories
     */
    public function index()
    {
        $categories = Teamcategory::with('teams')->latest()->get();
        $teams = Team::with('teamcategory')->latest()->get();

        return view('dashboard.teams.index', compact('categories', 'teams'));
    }

    /**
     * Store a new category
     */
    public function storeCategory(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255|unique:teamcategories,name',
        ]);

        Teamcategory::create([
            'name' => $request->name,
            'slug' => Str::slug($request->name),
        ]);

        return redirect()->back()->with('success', 'Category created successfully!');
    }

    /**
     * Update category
     */
    public function updateCategory(Request $request, Teamcategory $category)
    {
        $request->validate([
            'name' => 'required|string|max:255|unique:teamcategories,name,'.$category->id,
        ]);

        $category->update([
            'name' => $request->name,
            'slug' => Str::slug($request->name),
        ]);

        return redirect()->back()->with('success', 'Category updated successfully!');
    }

    /**
     * Delete category
     */
    public function destroyCategory(Teamcategory $category)
    {
        if ($category->teams()->count() > 0) {
            return redirect()->back()->with('error', 'Cannot delete category with existing team members!');
        }

        $category->delete();

        return redirect()->back()->with('success', 'Category deleted successfully!');
    }

    /**
     * Store a new team member
     */
    public function storeTeam(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'designation' => 'required|string|max:255',
            'teamcategory_id' => 'required|exists:teamcategories,id',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif',
            'description' => 'nullable|string',
        ]);

        $data = [
            'name' => $request->name,
            'designation' => $request->designation,
            'teamcategory_id' => $request->teamcategory_id,
            'slug' => Str::slug($request->name),
            'description' => $request->description,
        ];

        if ($request->hasFile('image')) {
            $imageName = time().'_'.$request->file('image')->getClientOriginalName();
            $request->file('image')->move(public_path('images/team'), $imageName);
            $data['image'] = 'images/team/'.$imageName;
        }

        Team::create($data);

        return redirect()->back()->with('success', 'Team member added successfully!');
    }

    /**
     * Update team member
     */
    public function updateTeam(Request $request, Team $team)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'designation' => 'required|string|max:255',
            'teamcategory_id' => 'required|exists:teamcategories,id',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'description' => 'nullable|string',
        ]);

        $data = [
            'name' => $request->name,
            'designation' => $request->designation,
            'teamcategory_id' => $request->teamcategory_id,
            'slug' => Str::slug($request->name),
            'description' => $request->description,
        ];

        if ($request->hasFile('image')) {
            // Delete old image
            if ($team->image && file_exists(public_path($team->image))) {
                unlink(public_path($team->image));
            }

            $imageName = time().'_'.$request->file('image')->getClientOriginalName();
            $request->file('image')->move(public_path('images/team'), $imageName);
            $data['image'] = 'images/team/'.$imageName;
        }

        $team->update($data);

        return redirect()->back()->with('success', 'Team member updated successfully!');
    }

    /**
     * Delete team member
     */
    public function destroyTeam(Team $team)
    {
        // Delete image
        if ($team->image && file_exists(public_path($team->image))) {
            unlink(public_path($team->image));
        }

        $team->delete();

        return redirect()->back()->with('success', 'Team member deleted successfully!');
    }
}
