@extends('bruces.layouts.app')

@section('title', 'Welcome')

@section('content')
    <div class="container">
        <section class="content-section types-of-installs">
            <h3>Home & Business Installations</h3>

            <ul class="list-unstyled">
                <li class="media">
                    <img src="/assets/images/tv-mounting.png" class="mr-3" alt="TV Mount icon.">
                    <div class="media-body">
                        <h5 class="mt-0 mb-1">TV Mounting</h5>
                        Installations, mounts, wire hiding and more!
                    </div>
                </li>
                <li class="media">
                    <img src="/assets/images/av-cable.png" class="mr-3" alt="A/V Cable icon.">
                    <div class="media-body">
                        <h5 class="mt-0 mb-1">A/V Cable Installation & Concealment/Wall Fishing</h5>
                        Your home theater system should be a source of joy — both for sound and appearance.
                    </div>
                </li>
                <li class="media">
                    <img src="/assets/images/wired-network.png" class="mr-3" alt="Wired network icon.">
                    <div class="media-body">
                        <h5 class="mt-0 mb-1">Wired Network Configuration</h5>
                        A wired setup uses physical cables to transfer data between your different devices and computer systems.
                    </div>
                </li>
                <li class="media">
                    <img src="/assets/images/wireless-network.png" class="mr-3" alt="Wireless network icon.">
                    <div class="media-body">
                        <h5 class="mt-0 mb-1">Wireless Network Configuration</h5>
                        Link multiple devices over a short distance through the use of wireless communication.
                    </div>
                </li>
                <li class="media">
                    <img src="/assets/images/security-camera.png" class="mr-3" alt="Security icon.">
                    <div class="media-body">
                        <h5 class="mt-0 mb-1">Surveillance and Remote Monitoring Systems</h5>
                        Remote video surveillance enables you to view live video on a PC or laptop from just about anywhere in the world with internet access.
                    </div>
                </li>
                <li class="media">
                    <img src="/assets/images/alarm-icon.png" class="mr-3" alt="Alarm icon">
                    <div class="media-body">
                        <h5 class="mt-0 mb-1">Alarm Systems</h5>
                        Upgrade your security and your lifestyle.
                    </div>
                </li>
                <li class="media">
                    <img src="/assets/images/smart-home.png" class="mr-3" alt="Smart home icon.">
                    <div class="media-body">
                        <h5 class="mt-0 mb-1">Whole-Home Smart Solution Installation & Configuration</h5>
                        Includes lighting, thermostat, and smoke/carbon monoxide detection.
                    </div>
                </li>
            </ul>
        </section>

        <section class="content-section about-owner">
            <h3>About the Owner</h3>

            <div class="row">
                <div class="col-md-8">
                    <p>Bruce Montano has been in the professional installation industry for over fifteen years which includes long-time residences with Adelphia, Time Warner, and Spectrum Cable.</p>

                    <p>Bruce believes that healthy customer relationships are best supported by operational integrity, sincerity and dependability.</p>
                </div>

                <div class="col-md-4">
                    <img src="/assets/images/working-hard.jpg" class="img-fluid">
                </div>
            </div>
        </section>
    </div>
@endsection