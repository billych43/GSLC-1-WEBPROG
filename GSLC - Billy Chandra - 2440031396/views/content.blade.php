@extends('home')

@section('isi')

    <div class="mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
        <div class="p-6">
            <div class="flex items-center">
                <h2>Loop</h2>
            </div>

            <div class="ml-12">
                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                    @for ($i = 1; $i <= 5; $i++)
                        <h3> {{$i}} </h3>
                    @endfor
                </div>
            </div>
        </div>
    </div>

@endsection






