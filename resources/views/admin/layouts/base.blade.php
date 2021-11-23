<x-layouts.base>

    @if(auth()->user()->role == 'admin')

    {{-- Nav --}}
    @include('admin.layouts.nav')
    {{-- SideNav --}}
    @include('admin.layouts.sidenav')
    <main class="content">
        {{-- TopBar --}}
        @include('admin.layouts.topbar')
        {{-- @include('admin.layouts.breadcrumb') --}}
        
        @if(in_array(request()->route()->getName(), ['admin.users.index']))
            @include('admin.layouts.actions')
            <div class="card border-0 shadow mb-4">
                <div class="card-body">
                    <div class="table-responsive py-4">
                        @yield('content')
                    </div>
                </div>
            </div>
            
        @else
            @yield('content')
        @endif
        {{-- Footer --}}
        @include('admin.layouts.footer')
    </main>

    @elseif(in_array(request()->route()->getName(), ['404', '500', 'lock']))

    @endif
</x-layouts.base>