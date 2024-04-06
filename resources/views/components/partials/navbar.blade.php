@php
    $setting = UtilsHelp::settingApp();
@endphp

@props(['sidebar' => ''])
<nav class="side-nav">
    <a href="{{ url('dashboard') }}" class="intro-x flex items-center pl-5 pt-4 mt-3">
        <img alt="Penilaian Siswa" class="w-6" src="{{ asset('upload/settings/icon/'.$setting->icon_settings) }}">
        <span class="hidden xl:block text-white text-lg ml-3"> {{ $setting->nama_settings }} </span>
    </a>
    <div class="side-nav__devider my-6"></div>
    <ul>
        {!! $sidebar !!}
    </ul>
</nav>
