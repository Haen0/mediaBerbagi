<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pengaturan_userController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    public function showAdmin()
    {
        $slug = 'admin';
        return view('admin.konten.user.admin',compact('slug'));
    }

    public function showAkunting()
    {
        $slug = 'akunting';
        return view('admin.konten.user.akunting',compact('slug'));
    }

    public function showDonatur()
    {
        $slug = 'donatur';
        return view('admin.konten.user.donatur',compact('slug'));
    }

    public function showFundraiser()
    {
        $slug = 'fundraiser';
        return view('admin.konten.user.fundraiser',compact('slug'));
    }

    public function showGerai()
    {
        $slug = 'gerai';
        return view('admin.konten.user.gerai',compact('slug'));
    }

    public function showProgram()
    {
        $slug = 'program';
        return view('admin.konten.user.program',compact('slug'));
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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
