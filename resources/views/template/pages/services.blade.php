@extends('template.layout.master')
@section('body')
    <div class="hero-container" style="text-align: center">
        <h1 class="hero-title" style="margin-top: 180px">
            <span class="hero-nexus">Our</span><span class="hero-flow">Services</span>
        </h1>
    </div>
<section class="hero">
    <div class="hero-container">
        <div class="service-box" id="short_circuit_studies">
            {{--header--}}
            <div class="service-header">
                <div class="feature-icon" style="width: 70px !important; height: 70px !important;">
                    <img src="{{ asset('template/home-img/1-Short Circuit Studies.png') }}">
                </div>
                <h3 class="service-title">Short Circuit Studies</h3>
            </div>

            <div class="elements">
                {{--content--}}
                    <div class="service-content" style="width: 100%">
                        <p class="service-description">
                            Short circuit studies are critical to electrical system reliability and safety. Electrical codes require protective devices (fuses, circuit breakers) to be rated to interrupt the calculated short circuit current. Electrical codes also require the maximum short circuit current to be listed at each service.
                        </p>
                        <p class="service-description">
                            Electrical codes are becoming more stringent with each Code revision. Are YOU compliant? Avoid costly downtime and potential fines by having a compliant, adequately rated system.
                        </p>
                        <p class="service-description">
                            A Short Circuit study will:
                        </p>

                        <div class="key-benefits">
                            <div class="" style="text-align: left">
                                <i class="fas fa-circle"></i>
                                <span>Identify underrated equipment that can not safely interrupt a short circuit.</span>
                            </div>
                            <div class="" style="text-align: left">
                                <i class="fas fa-circle"></i>
                                <span>Increase facility uptime, equipment protection and personnel safety.</span>
                            </div>
                            <div style="text-align: left">
                                <i class="fas fa-circle"></i>
                                <span>Aid in future expansion plans by providing updated short circuit values at each location in the system, thereby allowing properly rated equipment to be specified.</span>
                            </div>
                        </div>

                        <p class="service-description">
                            We use proprietary AI technology to visualize data and present an easy-to-read report that cuts through all the data and helps Facility Management quickly identify issues with their electrical system. However, ALL data is manually reviewed by a Professional Engineer prior to issuance to the Client.
                            <strong>We do not simply “push buttons” in the study program and blindly have AI create “magical solutions” without human review!</strong>
                        </p>
                    </div>
                {{--image--}}
                <div class="service-image-container">
                    <img src="{{ asset('template/home-img/services/ANSI expample.png') }}" style="" alt="ANSI Service">
                </div>
            </div>
        </div>
        <div class="service-box" id="protective_device_coordination_studies">
            <div class="service-header">
                <div class="feature-icon" style="width: 70px !important; height: 70px !important;">
                    <img src="{{ asset('template/home-img/2-Protective Device Coordination Studies.png') }}">

                </div>
                <h3 class="service-title">PROTECTIVE DEVICE COORDINATION STUDIES</h3>
            </div>
            <div class="elements">
                <div class="service-content">
                <p class="service-description">
                    Coordination studies evaluate the settings and ratings of protective devices (fuses, circuit breakers, relays, reclosers) and ensures that the device closest to a short circuit operates. A coordination study provides the following benefits:
                </p>
                <div class="key-benefits">
                    <div style="text-align: left">
                        <i class="fas fa-circle"></i>
                        <span>Improved reliability and minimization of equipment affected by a short circuit.</span>
                    </div>
                    <div style="text-align: left">
                        <i class="fas fa-circle"></i>
                        <span>Minimization of arc flash hazards by having the device closest to the arc operate as fast as possible.</span>
                    </div>
                    <div style="text-align: left">
                        <i class="fas fa-circle"></i>
                        <span>REQUIRED for utility interconnections and Life-Safety systems</span>
                    </div>
                    <div style="text-align: left">
                        <i class="fas fa-circle"></i>
                        <span>Avoid costly interruptions and Code violations! Let us review your new or existing electrical system and recommend optimal settings to optimize your electrical system!</span>
                    </div>
                    <div style="text-align: left">
                        <i class="fas fa-circle"></i>
                        <span>We will also use proprietary AI technology to develop an easy to read settings sheet of all adjustable protective devices within the study, for ease of reference!</span>
                    </div>
                </div>
            </div>
                {{--image--}}
                <div class="service-image-container">
                    <img src="{{ asset('template/home-img/services/protictive device.png') }}" style="" alt="ANSI Service">
                </div>
            </div>
        </div>
        <div class="service-box" id="arc_flash_studies">
            <div class="service-header">
                <div class="feature-icon" style="width: 70px !important; height: 70px !important;">
                    <img src="{{ asset('template/home-img/3-Arc Flash Studies.png') }}">
                </div>
                <h3 class="service-title">ARC FLASH STUDIES</h3>
            </div>

            <div class="elements">
                <div class="service-content">
                <p class="service-description">
                    We will calculate the arc flash incident (heat) energy for major equipment such as switchgear, switchboards, panelboards, industrial control panels, and motor control centers in your facility. We will then use the latest IEEE 1584 and NFPA 70E Standards to perform the incident energy and hazard analysis. We will calculate the following:
                </p>
                <div class="key-benefits">
                    <div style="text-align: left">
                        <i class="fas fa-circle"></i>
                        <span>Flash hazard boundary</span>
                    </div>
                    <div style="text-align: left">
                        <i class="fas fa-circle"></i>
                        <span>Amount of incident energy (cal/cm2)</span>
                    </div>

                    <div style="text-align: left">
                        <i class="fas fa-circle"></i>
                        <span>Shock hazard</span>
                    </div>

                    <div style="text-align: left">
                        <i class="fas fa-circle"></i>
                        <span>Limited approach</span>
                    </div>
                    <div style="text-align: left">
                        <i class="fas fa-circle"></i>
                        <span>Restricted approach</span>
                    </div>
                    <div style="text-align: left">
                        <i class="fas fa-circle"></i>
                        <span>Type of Personnel Protective Equipment (PPE) needed. Custom Lists applicable to your facility can be easily generated!</span>
                    </div>
                </div>

                <p class="service-description">
                    An Arc Flash Study will:
                </p>

                <div class="key-benefits">
                    <div style="text-align: left">
                        <i class="fas fa-circle"></i>
                        <span>Improve safety</span>
                    </div>
                    <div style="text-align: left">
                        <i class="fas fa-circle"></i>
                        <span>Increase facility reliability, equipment protection, and personnel safety by ensuring personnel are advised of hazards and use protective equipment.</span>
                    </div>
                    <div style="text-align: left">
                        <i class="fas fa-circle"></i>
                        <span>Comply with NEC Article 110.16, NFPA 70E, and OSHA requirements</span>
                    </div>
                    <div style="text-align: left">
                        <i class="fas fa-circle"></i>
                        <span>We will use proprietary AI technology to create easy-to-read, sortable lists of hazards, and how much of an impact they will have on your specific facility. We will create easy to read, sortable lists that easily visualize the data, rather than other firms that simply produce hundreds of pages of raw data!</span>
                    </div>
                </div>

            </div>
                {{--image--}}
                <div class="service-image-container">
                    <img src="{{ asset('template/home-img/services/Arc flash report.png') }}" style="" alt="ANSI Service">
                </div>
            </div>
        </div>
        <div class="service-box" id="harmonic_studies">
            <div class="service-header">
                <div class="feature-icon" style="width: 70px !important; height: 70px !important;">
                    <img src="{{ asset('template/home-img/4-Harmonic Studies.png') }}">
                </div>
                <h3 class="service-title">HARMONIC STUDIES</h3>
            </div>
            <div class="elements">
                <div class="service-content">
                <p class="service-description">
                    Devices with power electronics, such as Variable Frequency Drives (VFD), Uninterruptible Power Supplies (UPS), and AC-DC converters and inverters can introduce harmonic currents at a higher frequency than the fundamental 50Hz or 60Hz frequency. High levels of harmonics can cause overheating in motors and wires, and cause equipment malfunctions.
                    We routinely perform the following for a harmonic study:
                </p>
                <div class="key-benefits">
                    <div style="text-align: left">
                        <i class="fas fa-circle"></i>
                        <span>Identify the source of harmonics (internal and external to your facility)</span>
                    </div>
                    <div style="text-align: left">
                        <i class="fas fa-circle"></i>
                        <span>Evaluate the impact of harmonic sources on facility distribution systems</span>
                    </div>
                    <div style="text-align: left">
                        <i class="fas fa-circle"></i>
                        <span>Recommend or verify proper ratings, configuration and location of harmonic-mitigating filters (active and passive), if necessary</span>
                    </div>
                </div>
            </div>
                {{--image--}}
                <div class="service-image-container">
                    <img src="{{ asset('template/home-img/services/harmonic example.png') }}" style="" alt="ANSI Service">
                </div>
            </div>

        </div>
        <div class="service-box" id="reliability_studies">
            <div class="service-header">
                <div class="feature-icon" style="width: 70px !important; height: 70px !important;">
                    <img src="{{ asset('template/home-img/5-Reliability Studies.png') }}">
                </div>
                <h3 class="service-title">RELIABILITY STUDIES</h3>
            </div>
            <div class="elements">
                <div class="service-content">
                <p class="service-description">
                    We will perform reliability studies of your electrical system. The electrical system is only reliable as its “weakest link”. Facilities have lost significant money due to the failure of a seemingly insignificant component. Our study will include:
                </p>
                <div class="key-benefits">
                    <div style="text-align: left">
                        <i class="fas fa-circle"></i>
                        <span>In person evaluation of your electrical system.</span>
                    </div>
                    <div style="text-align: left">
                        <i class="fas fa-circle"></i>
                        <span>Identification of any obsolete or hard to find components that will extend the mean time to repair.</span>
                    </div>
                    <div style="text-align: left">
                        <i class="fas fa-circle"></i>
                        <span>Review of processes and assignment of values per latest industry standards or IEEE 493.</span>
                    </div>
                    <div style="text-align: left">
                        <i class="fas fa-circle"></i>
                        <span>Unlike other firms that usually rely on data from IEEE 493, which was last updated in 2007, we will research more recent uptime statistics from data published by associations relative to YOUR industry!</span>
                    </div>
                    <div style="text-align: left">
                        <i class="fas fa-circle"></i>
                        <span>We will produce flowcharts and process flow diagrams to quickly identify “weakest links” in your electrical system.</span>
                    </div>
                </div>
            </div>
                {{--image--}}
                <div class="service-image-container">
                    <img src="{{ asset('template/home-img/services/RELIABILITY STUDIES 1.png') }}" style="" alt="ANSI Service">
                </div>
            </div>
        </div>
        <div class="service-box" id="Voltage_and_Motor_Starting_Studies">
            <div class="service-header">
                <div class="feature-icon" style="width: 70px !important; height: 70px !important;">
                    <img src="{{ asset('template/home-img/6-Voltage and Motor Starting Studies.png') }}">
                </div>
                <h3 class="service-title">MOTOR STARTING STUDIES</h3>
            </div>

            <div class="elements">

                <div class="service-content">
                <p class="service-description">
                    Whenever a motor starts, a voltage drop is experienced on the system. The voltage drop can result in problems with other equipment, nuisance flickering of lights, overheating of feeder cables, and in extreme cases, motors not starting correctly when required. Contempus Engineering can do the following during a motor starting study:
                </p>
                <div class="key-benefits">
                    <div style="text-align: left">
                        <i class="fas fa-circle"></i>
                        <span>In person evaluation of motor starters and starting sequences.</span>
                    </div>
                    <div style="text-align: left">
                        <i class="fas fa-circle"></i>
                        <span>Evaluation of “ramp time” for variable frequency drives and soft starters.</span>
                    </div>
                    <div style="text-align: left">
                        <i class="fas fa-circle"></i>
                        <span>Evaluation of utility voltage tolerances.</span>
                    </div>
                    <div style="text-align: left">
                        <i class="fas fa-circle"></i>
                        <span>Calculation of starting sequences and resultant voltage drops.</span>
                    </div>
                    <div style="text-align: left">
                        <i class="fas fa-circle"></i>
                        <span>Recommendations for improvement, such as adjusting transformer voltage taps, re-programming of starters, or replacement of starting equipment.</span>
                    </div>
                </div>
            </div>
                {{--image--}}
                <div class="service-image-container">
                    <img src="{{ asset('template/home-img/services/Motor Starting Study1.png') }}" style="" alt="ANSI Service">
                </div>
            </div>
        </div>
        <div class="service-box" id="">
            <div class="service-header">
                <div class="feature-icon" style="width: 70px !important; height: 70px !important;">
                    <img src="{{ asset('template/home-img/1-Short Circuit Studies.png') }}">
                </div>
                <h3 class="service-title">DUCTBANK HEATING STUDIES</h3>
            </div>
            <div class="elements">
                <div class="service-content">
                <p class="service-description">
                    Ductbank heating calculations are crucial to ensure underground feeders do not become overheated under the facility’s operating load. Variations in soil, burial depth, conductor types, and concrete characteristics can significantly impact conductor temperatures. Do NOT simply rely on NEC ampacity tables! Ductbank heating calculations will ensure conductor temperatures will not exceed NEC recommendations, and prevent catastrophic failure of feeders!
                    Contempus Engineering can do the following during a ductbank heating study:
                </p>
                <div class="key-benefits">
                    <div style="text-align: left">
                        <i class="fas fa-circle"></i>
                        <span>Review of geotechnical soil reports.</span>
                    </div>
                    <div style="text-align: left">
                        <i class="fas fa-circle"></i>
                        <span>Review of ambient soil temperature data specific to your location</span>
                    </div>
                    <div style="text-align: left">
                        <i class="fas fa-circle"></i>
                        <span>Calculation of ductbanks in accordance with Neher-McGrath industry standard calculation methods</span>
                    </div>
                    <div style="text-align: left">
                        <i class="fas fa-circle"></i>
                        <span>Recommendations on how to maintain conductor temperatures.</span>
                    </div>
                </div>

                <p class="service-description">
                    Ductbank heating calculations can actually save you money during installation by optimizing the number of conductors and reducing the amount of thermal backfill needed. We have saved our clients hundreds of thousands of dollars by optimizing the amount of thermal backfill and trenching needed! Let us review your design today!
                </p>
            </div>
                {{--image--}}
                <div class="service-image-container">
                    <img src="{{ asset('template/home-img/services/DUCTBANK HEATING STUDIES 2.png') }}" style="" alt="ANSI Service">
                </div>
            </div>
        </div>
    </div>
</section>
@endsection



