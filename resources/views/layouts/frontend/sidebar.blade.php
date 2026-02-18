<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="dark">
<head>
    @include('partials.head')
</head>
<body class="min-h-screen bg-white dark:bg-zinc-800 antialiased">

<flux:header class="dark:bg-zinc-900 border-b border-zinc-200 dark:border-zinc-700 justify-between">
    <flux:sidebar.toggle class="lg:hidden" icon="bars-3"/>

    <flux:brand href="#" logo="{{ asset('logo.png') }}" class="max-lg:hidden dark:hidden"/>
    <flux:brand href="#" logo="{{ asset('logo.png') }}" class="max-lg:hidden! hidden dark:flex"/>

    <flux:navbar class="-mb-px max-lg:hidden py-7">
        <flux:navbar.item href="#" class="text-xl hover:!bg-transparent">Home</flux:navbar.item>
        <flux:navbar.item href="#" class="text-xl hover:!bg-transparent">News</flux:navbar.item>
        <flux:navbar.item href="#" class="text-xl hover:!bg-transparent">Webinars</flux:navbar.item>
        <flux:navbar.item href="#" class="text-xl hover:!bg-transparent">Events</flux:navbar.item>
        <flux:navbar.item href="#" class="text-xl hover:!bg-transparent">Jobs</flux:navbar.item>
        <flux:navbar.item href="#" class="text-xl hover:!bg-transparent" badge="open" badge:color="green" badge:variant="fill">Virtual Fair</flux:navbar.item>
        <flux:navbar.item href="#" class="text-xl hover:!bg-transparent">Media</flux:navbar.item>
        <flux:navbar.item href="#" class="text-xl hover:!bg-transparent">About us</flux:navbar.item>
        <flux:navbar.item href="#" class="text-xl hover:!bg-transparent">Contact</flux:navbar.item>
        <flux:navbar.item href="#" class="bg-accent !text-accent-foreground hover:!text-zinc-800">For employers</flux:navbar.item>
    </flux:navbar>

    @auth
        {{--        <flux:dropdown position="top" align="start">--}}
        {{--            <flux:profile avatar="https://fluxui.dev/img/demo/user.png"/>--}}

        {{--            <flux:menu>--}}
        {{--                <flux:menu.radio.group>--}}
        {{--                    <flux:menu.radio checked>Olivia Martin</flux:menu.radio>--}}
        {{--                    <flux:menu.radio>Truly Delta</flux:menu.radio>--}}
        {{--                </flux:menu.radio.group>--}}

        {{--                <flux:menu.separator/>--}}

        {{--                <flux:menu.item icon="arrow-right-start-on-rectangle">Logout</flux:menu.item>--}}
        {{--            </flux:menu>--}}
        {{--        </flux:dropdown>--}}
    @else

    @endauth

    <flux:navbar class="-mb-px max-lg:hidden">
        <flux:button icon="arrow-right">Sign In</flux:button>
        <flux:button icon="user-plus" variant="primary">Register</flux:button>
    </flux:navbar>

</flux:header>

<flux:sidebar sticky collapsible="mobile" class="lg:hidden bg-zinc-50 dark:bg-zinc-900 border-r border-zinc-200 dark:border-zinc-700">
    <flux:sidebar.header>
        <flux:sidebar.brand
                href="{{ route('home') }}"
                logo="{{ asset('logo.png') }}"
                logo:dark="{{ asset('logo.png') }}"
        />
        <flux:sidebar.collapse class="in-data-flux-sidebar-on-desktop:not-in-data-flux-sidebar-collapsed-desktop:-mr-2"/>
    </flux:sidebar.header>

    <flux:sidebar.nav>
        <flux:sidebar.item icon="home" href="#" current>Home</flux:sidebar.item>
        <flux:sidebar.item icon="inbox" badge="12" href="#">Inbox</flux:sidebar.item>
        <flux:sidebar.item icon="document-text" href="#">Documents</flux:sidebar.item>
        <flux:sidebar.item icon="calendar" href="#">Calendar</flux:sidebar.item>

        <flux:sidebar.group expandable heading="Favorites" class="grid">
            <flux:sidebar.item href="#">Marketing site</flux:sidebar.item>
            <flux:sidebar.item href="#">Android app</flux:sidebar.item>
            <flux:sidebar.item href="#">Brand guidelines</flux:sidebar.item>
        </flux:sidebar.group>
    </flux:sidebar.nav>

    <flux:sidebar.spacer/>

    <flux:sidebar.nav>
        <flux:sidebar.item icon="cog-6-tooth" href="#">Settings</flux:sidebar.item>
        <flux:sidebar.item icon="information-circle" href="#">Help</flux:sidebar.item>
    </flux:sidebar.nav>
</flux:sidebar>

{{ $slot }}

@fluxScripts
</body>
</html>
