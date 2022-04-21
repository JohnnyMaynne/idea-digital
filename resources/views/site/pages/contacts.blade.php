@extends('site.layouts.app')

@section('content')
    <x-app.page>
            <div class="pt-40 pb-20 relative z-30">
                <x-app.container>
                    <div class="text-7xl max-w-[900px] max-w-3xl font-bold">
                        Contact Idea Digital Agency
                    </div>
                </x-app.container>
            </div>

        <x-app.section class="pb-20 pt-0">
            <x-app.container>
                <x-app.feedback/>
            </x-app.container>
        </x-app.section>

    </x-app.page>
@endsection
