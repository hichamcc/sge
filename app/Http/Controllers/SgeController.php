<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class SgeController extends Controller
{
    public function index()
    {
        // ── Company Info ──
        $company = [
            'name' => 'SGE Prime Contracting',
            'legal' => 'Sensibly Green Enterprises Ltd.',
            'tagline' => 'General Contracting & Civil Construction',
            'location' => 'Cochrane, Alberta',
            'address' => 'Box 564, Cochrane, Alberta T4C 0C8',
            'phone' =>  '403 966 4593',
            'email' => 'admin@sensiblygreenltd.com',
            'years' => '15+',
            'established' => 'Family Owned & Operated',
        ];

        // ── Hero ──
        $hero = [
            'headline' => 'Building Critical Infrastructure Across Alberta',
            'subline' => 'General contracting and civil construction with over 15 years of proven delivery. We bring disciplined execution, in-house capability, and hands-on leadership to every project.',
            'cta_primary' => ['text' => 'Our Capabilities', 'link' => '#services'],
            'cta_secondary' => ['text' => 'Project Experience', 'link' => '#experience'],
        ];

        // ── Stats / At a Glance ──
        $stats = [
            ['value' => '15+', 'label' => 'Years of Infrastructure Delivery'],
            ['value' => '1000+', 'label' => 'Contracts Completed'],
            ['value' => '95%', 'label' => 'Self-Performed Capability'],
            ['value' => 'COR', 'label' => 'Certified Safety Program'],
        ];

        // ── Core Services ──
        $services = [
            [
                'title' => 'General Contracting',
                'description' => 'Full-scope prime contracting for complex infrastructure projects. We manage every phase from mobilization through commissioning, integrating civil, structural, mechanical, and electrical disciplines under one accountable team.',
                'capabilities' => [
                    'Construction Management & Project Controls',
                    'Multi-discipline Coordination',
                    'Lump Sum & Fixed Price Delivery',
                    'Commissioning & Turnover',
                ],
                'icon' => 'building',
            ],
            [
                'title' => 'Civil Construction',
                'description' => 'In-house civil infrastructure with strong self-performance capability. Our crews, equipment, and field leadership deliver earthworks, underground utilities, and site infrastructure with direct control over safety, quality, and schedule.',
                'capabilities' => [
                    'Site Preparation, Excavation & Grading',
                    'Trenching, Backfill & Compaction',
                    'Underground Utility Installation',
                    'Access Roads, Drainage & Site Services',
                ],
                'icon' => 'excavator',
            ],
            [
                'title' => 'Water & Wastewater Infrastructure',
                'description' => 'Municipal sewer and water is the backbone of our civil portfolio. Over 14 years of design-build water main extensions, treatment facility support, and underground distribution systems across municipal, industrial, and First Nation communities.',
                'capabilities' => [
                    'Municipal Water & Sewer Systems',
                    'Water Treatment Plant Construction',
                    'Distribution & Collection Networks',
                    'Private Wastewater Systems',
                ],
                'icon' => 'water',
            ],
            [
                'title' => 'Concrete & Structural Works',
                'description' => 'Over 19 years of experience in cast-in-place concrete for foundations, clearwells, holding structures, and underground infrastructure. We deliver structural integrity with precision tolerances aligned to engineered specifications.',
                'capabilities' => [
                    'Foundations & Building Slabs',
                    'Cast-in-Place Concrete Structures',
                    'Underground Concrete & Tanks',
                    'Building Science & Remediation',
                ],
                'icon' => 'concrete',
            ],
        ];

        // ── Sectors ──
        $sectors = [
            ['name' => 'First Nation Communities', 'description' => 'Long-standing partnerships delivering critical water, wastewater, and building infrastructure within Indigenous communities.'],
            ['name' => 'Municipal', 'description' => 'Water and sewer infrastructure, utility repairs, and essential service upgrades for municipal clients across Alberta.'],
            ['name' => 'Mining & Industrial', 'description' => 'Heavy civil, underground concrete, and process infrastructure for mining operations and industrial facilities.'],
            ['name' => 'Oil & Gas', 'description' => 'High-risk utility works, design-build water main extensions, and site infrastructure in demanding energy sector environments.'],
            ['name' => 'Institutional', 'description' => 'General construction within active community environments including learning centres, schools, and public facilities.'],
            ['name' => 'Emergency Response', 'description' => 'Large-scale flood mitigation, wildfire recovery, and infrastructure restoration programs managing 150+ personnel.'],
        ];

        // ── Project Experience ──
        $projects = [
            [
                'name' => 'Bearspaw First Nation — Capital Projects',
                'scope' => 'General Contracting & Civil',
                'detail' => '10+ major infrastructure and building projects, each exceeding $1M in value. Over 100 contracts completed for Stoney Tribal Administration and Bearspaw First Nation.',
                'image' => 'https://images.unsplash.com/photo-1504307651254-35680f356dfd?q=80&w=800&auto=format&fit=crop',
                'highlight' => '100+ Contracts',
            ],
            [
                'name' => 'Eden Valley Head Start Early Learning Center',
                'scope' => 'Water & Wastewater',
                'detail' => 'Sensibly Green Enterprises Ltd. served as General Contractor for the Eden Valley Head Start Early Learning Center, partnering with A&E Architectural and Engineering Group of Edmonton, Alberta. The project reflects our purpose of delivering sustainable, high-performance construction that creates lasting value for the communities we serve.',
                'image' => 'https://images.unsplash.com/photo-1621905252507-b35492cc74b4?q=80&w=800&auto=format&fit=crop',
                'highlight' => '10+ Years of Experience',
            ],
            [
                'name' => 'Morley Well & Cistern Replacements',
                'scope' => 'Civil Infrastructure',
                'detail' => 'Critical water infrastructure execution including large-scale civil works and underground services for Bearspaw First Nation (2023-2024).',
                'image' => 'https://images.unsplash.com/photo-1590069261209-f8e9b8642343?q=80&w=800&auto=format&fit=crop',
                'highlight' => '',
            ],
            [
                'name' => 'Alberta Government – Flood Mitigation',
                'scope' => 'Emergency Response',
                'detail' => 'Our team was the sole private contractor selected by the Alberta Government for a large-scale flood recovery project. Our team managed over 150 personnel and handled more than $8M in project revenue.',
                'image' => 'https://images.unsplash.com/photo-1545259741-2ea3ebf61fa3?q=80&w=800&auto=format&fit=crop',
                'highlight' => '$8M+ Revenue',
            ],
            [
                'name' => 'Village of Cremona – Municipal Services',
                'scope' => 'Municipal Water & Sewer',
                'detail' => 'Since 2015, we’ve provided ongoing municipal water and sewer repairs, system maintenance, and key infrastructure upgrades to support the community’s essential services.',
                'image' => 'https://images.unsplash.com/photo-1581094794329-c8112a89af12?q=80&w=800&auto=format&fit=crop',
                'highlight' => 'Serving Since 2015',
            ],
            [
                'name' => 'Slave Lake – Wildfire Recovery',
                'scope' => 'Emergency Response & Industrial',
                'detail' => 'Led fire mitigation and industrial redevelopment, including a five-acre site buildout and structural projects.',
                'image' => 'https://www.theglobeandmail.com/resizer/v2/2UFDNI3A45CLBGNHIXNTWES7UA?auth=f9f4955ed0bbd1c776f46d721d7d2fa039acb369503c7c98ef1708749156790b&width=900&height=900&quality=80&smart=true',
                'highlight' => 'Multi-residential Home Rebuilds',
            ],
            [
                'name' => 'TransCanada – Turbine Project',
                'scope' => 'Industrial',
                'detail' => 'Acted as the prime contractor for the design and build of a critical water service replacement project, delivered under tight deadlines and penalty-driven contract terms.',
                'image' => 'https://images.unsplash.com/photo-1587293852726-70cdb56c2866?q=80&w=800&auto=format&fit=crop',
                'highlight' => 'Design & Build Expertise',
            ],
            [
                'name' => 'Municipal Water Main Extensions',
                'scope' => 'Civil & Water',
                'detail' => 'With over 14 years of experience, we’ve completed multi-kilometer design-build water main extensions across municipal, industrial, and oil & gas sectors.',
                'image' => 'https://images.unsplash.com/photo-1541888946425-d81bb19240f5?q=80&w=800&auto=format&fit=crop',
                'highlight' => '14 Years of Experience',
            ],
        ];

        // ── Leadership ──
        $leadership = [
            [
                'name' => 'Colin Gustafson',
                'title' => 'Principal & CEO',
                'experience' => '28 years',
                'description' => 'Executive oversight and risk mitigation leadership across civil, underground, concrete, and site infrastructure. Built substantial in-house capacity with owned equipment and crews capable of completing 95% of project scopes internally.',
            ],
            [
                'name' => 'Brandon Clague',
                'title' => 'Project Manager',
                'credentials' => 'BASc Civil Engineering (UBC)',
                'experience' => '25 years',
                'description' => 'Day-to-day delivery leadership with direct responsibility for technical risk management and commissioning. Has managed capital programs exceeding $100M USD and led workforces of 400+ personnel.',
            ],
        ];

        // ── Differentiators ──
        $differentiators = [
            [
                'title' => 'Self-Performance Capability',
                'description' => 'We self-perform 95% of civil, underground, and concrete scopes in-house with owned equipment — no pass-through contracting. This gives us direct control over safety, quality, and schedule.',
            ],
            [
                'title' => 'Senior Leadership on Every Project',
                'description' => 'Our Principal and Project Manager are directly involved from bid to turnover. You work with the people who make decisions, not intermediaries.',
            ],
            [
                'title' => 'Proven Community Partnerships',
                'description' => 'Over a decade of trusted delivery within First Nation communities, with full-time local staff, satellite facilities, and long-standing relationships built on transparency and respect.',
            ],
            [
                'title' => 'Agile & Responsive',
                'description' => 'A streamlined core team that enables rapid decision-making, efficient problem-solving, and responsive execution — from mobilization through commissioning.',
            ],
        ];

        // ── Credentials ──
        $credentials = [
            'COR Certified Safety Program',
            'Full Alberta WCB Coverage',
            'Licensed for Public Infrastructure Works in Alberta',
            'Bonding Capacity for Public-Sector Contracts',
            'Proven Engineer-Led Contract Delivery',
            'Fieldwire Digital Project Management',
        ];

        return view('welcome', compact(
            'company', 'hero', 'stats', 'services', 'sectors',
            'projects', 'leadership', 'differentiators', 'credentials'
        ));
    }

    public function contact(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'organization' => 'nullable|string|max:255',
            'subject' => 'nullable|string|max:255',
            'message' => 'required|string|max:2000',
        ]);

        Contact::create($validated);

        return redirect()->route('home')->with('success',
            'Thank you for your inquiry. A member of our team will be in touch shortly.'
        );
    }

    public function contacts()
    {
        $contacts = Contact::latest()->paginate(15);

        return view('contacts.index', compact('contacts'));
    }
}
