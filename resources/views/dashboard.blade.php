@extends('base')

@section('content')
    {{-- Main dashboard --}}
    <div class="p-6 max-w-7xl mx-auto flex flex-col gap-6">
        <!-- Heading -->
        <div class="flex items-center justify-between animate-fade-up">
            <div>
                <h1 class="text-2xl font-extrabold text-gray-900" style="font-family:'Sora',sans-serif">Dashboard 👋
                </h1>
                <p class="text-sm text-gray-500 mt-0.5">Halo, <span class="font-semibold text-gray-700">Wida</span>!
                    Berikut ringkasan E-Library hari ini.</p>
            </div>
        </div>

        <!-- Stat Cards -->
        <div class="grid grid-cols-2 lg:grid-cols-3 gap-4">

            <!-- Total Buku -->
            <div
                class="stat-card stat-card-blue relative bg-white rounded-2xl p-6 border border-gray-100 overflow-hidden transition-all hover:-translate-y-1 hover:shadow-2xl animate-fade-up delay-1">
                <div class="w-11 h-11 rounded-xl flex items-center justify-center mb-3.5 bg-blue-50">
                    <i class="ri-book-open-line text-blue-500 text-xl"></i>
                </div>
                <div class="text-3xl font-extrabold text-gray-900 leading-none mb-1" data-count="248"
                    style="font-family:'Sora',sans-serif">0</div>
                <div class="text-sm text-gray-500 font-medium">Total Buku</div>
            </div>

            <!-- Total Anggota -->
            <div
                class="stat-card stat-card-green relative bg-white rounded-2xl p-6 border border-gray-100 overflow-hidden transition-all hover:-translate-y-1 hover:shadow-2xl animate-fade-up delay-2">
                <div class="w-11 h-11 rounded-xl flex items-center justify-center mb-3.5 bg-green-50">
                    <i class="ri-group-line text-green-400 text-xl"></i>
                </div>
                <div class="text-3xl font-extrabold text-gray-900 leading-none mb-1" data-count="86"
                    style="font-family:'Sora',sans-serif">0</div>
                <div class="text-sm text-gray-500 font-medium">Total Anggota</div>
            </div>

            <!-- Sedang Dipinjam -->
            <div
                class="stat-card stat-card-yellow relative bg-white rounded-2xl p-6 border border-gray-100 overflow-hidden transition-all hover:-translate-y-1 hover:shadow-2xl animate-fade-up delay-3">
                <div class="w-11 h-11 rounded-xl flex items-center justify-center mb-3.5 bg-yellow-50">
                    <i class="ri-todo-line text-yellow-500 text-xl"></i>
                </div>
                <div class="text-3xl font-extrabold text-gray-900 leading-none mb-1" data-count="34"
                    style="font-family:'Sora',sans-serif">0</div>
                <div class="text-sm text-gray-500 font-medium">Sedang Dipinjam</div>
            </div>
        </div>

        <!-- Row 2: Chart + Top Books -->
        <div class="grid grid-cols-1 lg:grid-cols-1">

            <!-- Bar Chart -->
            <div class="bg-white rounded-2xl border border-gray-100 overflow-hidden animate-fade-up delay-5 lg:col-span-2">
                <div class="px-6 py-4.5 border-b border-gray-100 flex items-center justify-between">
                    <div>
                        <div class="text-[15px] font-bold text-gray-900" style="font-family:'Sora',sans-serif">
                            Peminjaman per Bulan</div>
                        <div class="text-xs text-gray-400 mt-0.5 font-medium">6 bulan terakhir</div>
                    </div>
                    <div class="flex gap-2">
                        <button
                            class="inline-flex items-center px-3.5 py-1.5 rounded-xl text-xs font-semibold text-gray-500 border border-gray-200 hover:bg-gray-50 transition-all">Minggu</button>
                        <button
                            class="inline-flex items-center px-3.5 py-1.5 rounded-xl text-xs font-semibold text-blue-700 border border-blue-200 bg-blue-50 transition-all">Bulan</button>
                    </div>
                </div>

                <div class="px-6 pt-4 pb-1 flex justify-between text-[11px] text-gray-400 font-medium">
                    <span>0</span><span>20</span><span>40</span><span>60</span>
                </div>

                <div id="barChart" class="flex items-end gap-2.5 px-6 pb-4" style="height:250px"></div>
            </div>
        </div>
    </div>
@endsection
