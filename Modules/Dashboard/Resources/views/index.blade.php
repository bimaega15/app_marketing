<x-backend-layout>
    @section('title', 'Dashboard page')
    <div class="grid grid-cols-12 gap-6">
        <div class="col-span-12 2xl:col-span-9">
            <div class="grid grid-cols-12 gap-6">
                <!-- BEGIN: General Report -->
                <div class="col-span-12 mt-8">
                    <div class="intro-y flex items-center h-10">
                        <h2 class="text-lg font-medium truncate mr-5">
                            Jumlah Data
                        </h2>
                    </div>
                    <div class="grid grid-cols-12 gap-6 mt-5">
                        <div class="col-span-12 sm:col-span-6 xl:col-span-3 intro-y">
                            <div class="report-box zoom-in">
                                <div class="box p-5">
                                    <div class="flex">
                                        <i class="fa-solid fa-users fa-2x textPrimary"></i>
                                    </div>
                                    <div class="text-3xl font-medium leading-8 text-right">{{ $user }}</div>
                                    <div class="text-base text-slate-700 mt-1">Jumlah <strong>Karyawan</strong></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-span-12 sm:col-span-6 xl:col-span-3 intro-y">
                            <div class="report-box zoom-in">
                                <div class="box p-5">
                                    <div class="flex">
                                        <i class="fa-solid fa-user-pen fa-2x textInfo"></i>
                                    </div>
                                    <div class="text-3xl font-medium leading-8 text-right">{{ $role }}</div>
                                    <div class="text-base text-slate-700 mt-1">Jumlah <strong>Jabatan</strong></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @push('custom_js')
        <script class="url_root" data-url="{{ url('/') }}"></script>
        <script class="url_datatable" data-url="{{ url('dashboard') }}"></script>
        <script src="{{ asset('js/dashboard/index.js') }}"></script>
    @endpush
</x-backend-layout>
