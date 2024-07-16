<?php

namespace App\Http\Controllers;

use App\Models\Campaign;
use Illuminate\Http\Request;

class campaignController extends Controller
{
    public function index() {
        $campaigns = Campaign::all();
        return view('admin.konten.publikasi_program.donasi', compact('campaigns'));
    }

    public function create()
    {
        return view('admin.konten.publikasi_program.pengalanganDana');
    }

    /**
     * Store a newly created campaign in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'slug' => 'nullable|string',
            'category' => 'required|string|max:255',
            'photo' => 'nullable|image',
            'content' => 'required|string',
            'target' => 'nullable|numeric',
            'deadline' => 'required|date',
            'donate_button_label' => 'required|string|max:255',
            'operational_fund_percentage' => 'required|integer|min:0|max:100',
            'fundraiser_reward_percentage' => 'required|integer|min:0|max:100',
            'nominal1' => 'nullable|integer',
            'nominal2' => 'nullable|integer',
            'nominal3' => 'nullable|integer',
            'nominal4' => 'nullable|integer',
            'nominal5' => 'nullable|integer',
            'nominal6' => 'nullable|integer',
        ]);

        $campaign = new Campaign($request->all());
        $campaign->save();

        return redirect()->route('campaign.index')->with('success', 'Campaign created successfully.');
    }

    /**
     * Show the form for editing the specified campaign.
     */
    public function edit(Campaign $campaign)
    {
        return view('campaigns.edit', compact('campaign'));
    }

    /**
     * Update the specified campaign in storage.
     */
    public function update(Request $request, Campaign $campaign)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'category' => 'required|string|max:255',
            'content' => 'required|string',
            'target' => 'nullable|numeric',
            'deadline' => 'required|date',
            'donate_button_label' => 'required|string|max:255',
            'operational_fund_percentage' => 'required|integer|min:0|max:100',
            'fundraiser_reward_percentage' => 'required|integer|min:0|max:100',
            'photo' => 'nullable|image',
        ]);

        $campaign->fill($request->all());
        $campaign->save();

        return redirect()->route('campaigns.index')->with('success', 'Campaign updated successfully.');
    }

    /**
     * Remove the specified campaign from storage.
     */
    public function destroy(Campaign $campaign)
    {
        $campaign->delete();
        return redirect()->route('campaigns.index')->with('success', 'Campaign deleted successfully.');
    }
}
