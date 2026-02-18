<?php

namespace App\Http\Controllers\Cms;

use App\Http\Controllers\Controller;
use App\Models\SiteSetting;
use Illuminate\Http\Request;

class SiteSettingsController extends Controller
{
    public function company()
    {
        $company = SiteSetting::get('company', []);

        return view('cms.company', compact('company'));
    }

    public function updateCompany(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'legal' => 'required|string|max:255',
            'tagline' => 'required|string|max:255',
            'location' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'phone' => 'required|string|max:50',
            'email' => 'required|email|max:255',
            'years' => 'required|string|max:50',
            'established' => 'required|string|max:255',
        ]);

        SiteSetting::set('company', $validated);

        return redirect()->route('cms.company')->with('status', 'company-updated');
    }

    public function hero()
    {
        $hero = SiteSetting::get('hero', []);

        return view('cms.hero', compact('hero'));
    }

    public function updateHero(Request $request)
    {
        $validated = $request->validate([
            'headline' => 'required|string|max:255',
            'subline' => 'required|string|max:1000',
            'cta_primary_text' => 'required|string|max:255',
            'cta_primary_link' => 'required|string|max:255',
            'cta_secondary_text' => 'required|string|max:255',
            'cta_secondary_link' => 'required|string|max:255',
        ]);

        SiteSetting::set('hero', $validated);

        return redirect()->route('cms.hero')->with('status', 'hero-updated');
    }
}
