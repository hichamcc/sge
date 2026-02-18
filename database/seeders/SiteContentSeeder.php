<?php

namespace Database\Seeders;

use App\Models\Credential;
use App\Models\Differentiator;
use App\Models\Leader;
use App\Models\Project;
use App\Models\Sector;
use App\Models\Service;
use App\Models\SiteSetting;
use App\Models\Stat;
use Illuminate\Database\Seeder;

class SiteContentSeeder extends Seeder
{
    public function run(): void
    {
        // ── Company Info ──
        SiteSetting::set('company', [
            'name' => 'SGE Prime Contracting',
            'legal' => 'Sensibly Green Enterprises Ltd.',
            'tagline' => 'General Contracting & Civil Construction',
            'location' => 'Cochrane, Alberta',
            'address' => 'Box 564, Cochrane, Alberta T4C 0C8',
            'phone' => '403 966 4593',
            'email' => 'admin@sensiblygreenltd.com',
            'years' => '15+',
            'established' => 'Family Owned & Operated',
        ]);

        // ── Hero ──
        SiteSetting::set('hero', [
            'headline' => 'Building Critical Infrastructure Across Alberta',
            'subline' => 'General contracting and civil construction with over 15 years of proven delivery. We bring disciplined execution, in-house capability, and hands-on leadership to every project.',
            'cta_primary_text' => 'Our Capabilities',
            'cta_primary_link' => '#services',
            'cta_secondary_text' => 'Project Experience',
            'cta_secondary_link' => '#experience',
        ]);

        // ── Stats ──
        $stats = [
            ['value' => '15+', 'label' => 'Years of Infrastructure Delivery'],
            ['value' => '1000+', 'label' => 'Contracts Completed'],
            ['value' => '95%', 'label' => 'Self-Performed Capability'],
            ['value' => 'COR', 'label' => 'Certified Safety Program'],
        ];
        foreach ($stats as $i => $stat) {
            Stat::create([...$stat, 'sort_order' => $i]);
        }

        // ── Services ──
        $services = [
            [
                'title' => 'General Contracting',
                'description' => 'Full-scope prime contracting for complex infrastructure projects. We manage every phase from mobilization through commissioning, integrating civil, structural, mechanical, and electrical disciplines under one accountable team.',
                'capabilities' => [
                    'Construction Management & Project Controls',
                    'Multi-discipline Coordination',
                    'Lump Sum & Fixed Price Delivery',
                    'Commissioning & Turnover',
                    'Fully Licensed, Insured and Qualified Alberta Home Builder',
                ],
                'icon' => 'building',
                'badge' => 'Fully Licensed, Insured and Qualified Alberta Home Builder',
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
                'badge' => null,
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
                'badge' => null,
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
                'badge' => null,
            ],
        ];
        foreach ($services as $i => $service) {
            Service::create([...$service, 'sort_order' => $i]);
        }

        // ── Sectors ──
        $sectors = [
            ['name' => 'First Nation Communities', 'description' => 'Long-standing partnerships delivering critical water, wastewater, and building infrastructure within Indigenous communities.'],
            ['name' => 'Municipal', 'description' => 'Water and sewer infrastructure, utility repairs, and essential service upgrades for municipal clients across Alberta.'],
            ['name' => 'Mining & Industrial', 'description' => 'Heavy civil, underground concrete, and process infrastructure for mining operations and industrial facilities.'],
            ['name' => 'Private', 'description' => 'As a licensed Alberta homebuilder, we specialize in private acreage development with a primary focus on the design and certified installation of compliant private wastewater systems.'],
            ['name' => 'Institutional', 'description' => 'General construction within active community environments including learning centres, schools, and public facilities.'],
            ['name' => 'Emergency Response', 'description' => 'Large-scale flood mitigation, wildfire recovery, and infrastructure restoration programs managing 150+ personnel.'],
        ];
        foreach ($sectors as $i => $sector) {
            Sector::create([...$sector, 'sort_order' => $i]);
        }

        // ── Projects ──
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
                'scope' => 'Institutional',
                'detail' => 'Sensibly Green Enterprises Ltd. served as General Contractor for the Eden Valley Head Start Early Learning Center, partnering with A&E Architectural and Engineering Group of Edmonton, Alberta. The project reflects our purpose of delivering sustainable, high-performance construction that creates lasting value for the communities we serve.',
                'image' => 'https://images.unsplash.com/photo-1621905252507-b35492cc74b4?q=80&w=800&auto=format&fit=crop',
                'highlight' => 'Architectural Compliance Excellence',
            ],
            [
                'name' => 'Alberta Government Private Wastewater',
                'scope' => 'Private Wastewater',
                'detail' => 'Delivered a province-led infrastructure program for the Government of Alberta involving the coordinated replacement of more than 80 private residential wastewater systems. The project required disciplined scheduling, regulatory compliance, and consistent quality control across multiple sites to ensure reliable, long-term environmental performance.',
                'image' => '/images/placeholder-wastewater-mound.jpg',
                'highlight' => '80+ Private Wastewater Systems',
            ],
            [
                'name' => 'Alberta Government – Flood Mitigation',
                'scope' => 'Emergency Response',
                'detail' => 'Our team was the sole private contractor selected by the Alberta Government for a large-scale flood recovery project. Our team managed over 150 personnel and handled more than $8M in project revenue.',
                'image' => 'https://images.unsplash.com/photo-1545259741-2ea3ebf61fa3?q=80&w=800&auto=format&fit=crop',
                'highlight' => '$8M+ Workforce Revenue',
            ],
            [
                'name' => 'Village of Cremona – Municipal Services',
                'scope' => 'Municipal Water & Sewer',
                'detail' => "Since 2015, we've provided ongoing municipal water and sewer repairs, system maintenance, and key infrastructure upgrades to support the community's essential services.",
                'image' => 'https://images.unsplash.com/photo-1581094794329-c8112a89af12?q=80&w=800&auto=format&fit=crop',
                'highlight' => 'Critical Utility Restoration',
            ],
            [
                'name' => 'Slave Lake – Wildfire Recovery',
                'scope' => 'Emergency Response & Industrial',
                'detail' => 'Led fire mitigation and industrial redevelopment, including an 18,000 sq. ft. industrial building, multi-residential home rebuilds, community connections, and disaster relief across a five-acre site.',
                'image' => 'https://www.theglobeandmail.com/resizer/v2/2UFDNI3A45CLBGNHIXNTWES7UA?auth=f9f4955ed0bbd1c776f46d721d7d2fa039acb369503c7c98ef1708749156790b&width=900&height=900&quality=80&smart=true',
                'highlight' => '18,000 sq. ft. Industrial Building',
            ],
            [
                'name' => 'Transcanada Turbine – Watermain Service Riser Replacement',
                'scope' => 'Industrial',
                'detail' => 'Acted as the prime contractor for the design and build of a critical water service replacement project, delivered under tight deadlines and penalty-driven contract terms.',
                'image' => '/images/placeholder-turbine.jpg',
                'highlight' => 'Design & Build Expertise',
            ],
            [
                'name' => 'Municipal Water Main Extensions',
                'scope' => 'Civil & Water',
                'detail' => "With over 15 years of experience, we've completed multi-kilometer design-build water main extensions across municipal, industrial, and oil & gas sectors.",
                'image' => '/images/placeholder-watermain.jpg',
                'highlight' => '15 Years of Experience',
            ],
            [
                'name' => 'Stoney Nation Well and Cistern Replacements',
                'scope' => 'Critical Infrastructure',
                'detail' => 'Critical water infrastructure execution including large-scale civil works and underground services for Stoney Tribal Administration.',
                'image' => 'https://4.imimg.com/data4/PF/WT/MY-17644858/under-ground-water-tank.jpg',
                'highlight' => 'Water Access Initiative',
            ],
        ];
        foreach ($projects as $i => $project) {
            Project::create([...$project, 'sort_order' => $i]);
        }

        // ── Leadership ──
        $leaders = [
            [
                'name' => 'Colin Gustafson',
                'title' => 'Principal & CEO',
                'experience' => '28 years',
                'description' => 'Executive oversight and risk mitigation leadership across civil, underground, concrete, and site infrastructure. Ensures constructability, safety performance, schedule certainty, and timely resolution of complex field conditions in alignment with design intent. His background spans residential, institutional, commercial, industrial, civil, oil & gas, and water/wastewater infrastructure, providing a broad and practical foundation for managing complex, multi-scope projects. Raised in a business environment and supported by three decades of hands-on financial management and operational oversight—grounded in formal studies in business management, accounting, and finance—he brings a disciplined understanding of fiscal stewardship, organizational structure, and sustainable growth. This depth of experience supports sound decision-making across financial planning, internal controls, and team development, reinforcing stability, accountability, and long-term performance throughout the organization.',
                'credentials' => null,
            ],
            [
                'name' => 'Brandon Clague',
                'title' => 'Project Manager',
                'experience' => '25 years',
                'description' => 'Day-to-day delivery leadership with direct responsibility for technical risk management and commissioning. Has managed capital programs exceeding $100M USD and led workforces of 400+ personnel.',
                'credentials' => 'BASc Civil Engineering (UBC)',
            ],
        ];
        foreach ($leaders as $i => $leader) {
            Leader::create([...$leader, 'sort_order' => $i]);
        }

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
        foreach ($differentiators as $i => $diff) {
            Differentiator::create([...$diff, 'sort_order' => $i]);
        }

        // ── Credentials ──
        $credentials = [
            'COR Certified Safety Program',
            'Full Alberta WCB Coverage',
            'Licensed for Public Infrastructure Works in Alberta',
            'Bonding Capacity for Public-Sector Contracts',
            'Proven Engineer-Led Contract Delivery',
            'Fieldwire Digital Project Management',
        ];
        foreach ($credentials as $i => $label) {
            Credential::create(['label' => $label, 'sort_order' => $i]);
        }
    }
}
