<?php

namespace App\Http\Controllers;

use App\Models\Permission;
use App\Models\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use PhpParser\Node\Stmt\TryCatch;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $roles = Role::active()->get();
        $permissions = Permission::active()->get();
        return view('roles.index', compact('roles', 'permissions'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        DB::beginTransaction();
        try {
            $role = Role::create([
                'name'       => $request->name,
                'guard_name' => 'web',
                'status'     => $request->status,
            ]);

            $permissionInput = $request->permission ?? [];

            if (!empty($permissionInput)) {


                if (in_array('All', $permissionInput)) {

                    $permissions = Permission::where('guard_name', 'web')->get();
                } else {

                    $permissions = Permission::whereIn('id', $permissionInput)->get();
                }

                $role->syncPermissions($permissions);
            }
            DB::commit();
            return redirect()->back()->with('success', 'Role has been created successfully');
        } catch (\Throwable $th) {
            DB::rollBack();
            Log::error('Role assign failed', [
                $th->getMessage(),
                $th->getFile(),
                $th->getLine(),
            ]);
            return redirect()->back()->with('error', 'Somethnig went wrong');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Role $role)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Role $role)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Role $role)
    {
        $role->update($request->all());
        return redirect()->back()->with('success', 'Role has been updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Role $role)
    {
        $role->destroy($role->id);
        return redirect()->back()->with('error', 'Role has been deleted successfully');
    }
}
