@extends('base')

@section('content')
    <div class="p-6 max-w-7xl mx-auto flex flex-col gap-5">
        {{-- ── Heading ── --}}
        <div class="flex items-center justify-between flex-wrap gap-3 animate-fade-up">
            <div>
                <h1 class="text-[22px] font-extrabold text-gray-900 leading-tight" style="font-family:'Sora',sans-serif">
                    Kelola Buku
                </h1>
            </div>
            <div class="flex gap-2 flex-wrap">
                <a href="{{ route('admin.book.create') }}">
                    <button class="inline-flex items-center gap-1.5 px-4 py-2.5 rounded-xl bg-blue-400 text-sm font-semibold text-white shadow-md hover:-translate-y-0.5 hover:shadow-lg transition-all">
                        <i class="ri-add-line"></i>Tambah Buku
                    </button>
                </a>
            </div>
        </div>

        {{-- Alert session --}}
        @if (session('success'))
            <div class="flex items-center px-4 py-4 bg-green-50 border border-green-100 text-green-700 text-sm font-medium">
                {{ session('success') }}
            </div>
        @endif

        {{-- ── Table card ── --}}
        <div class="bg-white rounded-2xl border border-gray-100 overflow-hidden animate-fade-up delay-2">

            {{-- Table header --}}
            <div class="px-6 py-4 border-b border-gray-100 flex items-center justify-between">
                <div class="text-[15px] font-bold text-red-900" style="font-family:'Sora',sans-serif">
                    Daftar Buku
                </div>
            </div>


            {{-- Table --}}
            <div class="overflow-x-auto">
                <table class="w-full border-collapse" id="categoryTable">
                    <thead>
                        <tr class="bg-gray-50 border-b border-gray-100">
                            <th class="text-left text-[11px] font-semibold tracking-wide uppercase text-gray-400 px-6 py-3 w-10">
                                #</th>
                            <th class="text-left text-[11px] font-semibold tracking-wide uppercase text-gray-400 px-6 py-3">
                                Judul</th>
                            <th class="text-left text-[11px] font-semibold tracking-wide uppercase text-gray-400 px-6 py-3">
                                Kategori</th>
                            <th
                                class="text-center text-[11px] font-semibold tracking-wide uppercase text-gray-400 px-6 py-3">
                                Penulis</th>
                            <th
                                class="text-center text-[11px] font-semibold tracking-wide uppercase text-gray-400 px-6 py-3">
                                Stok</th>
                            <th
                                class="text-center text-[11px] font-semibold tracking-wide uppercase text-gray-400 px-6 py-3">
                                Aksi</th>
                        </tr>
                    </thead>

                    <tbody id="tableBody">

                        @forelse ($books as $item)
                            <tr class="border-b border-gray-50 hover:bg-gray-50 transition-colors duration-150 category-row">
                                <td class="px-6 py-4 text-xs text-gray-400">1</td>
                                <td class="px-6 py-4">
                                    {{-- judul --}}
                                    <div class="flex items-center gap-3">
                                        <span class="text-sm font-semibold text-gray-800">{{ $item->title }}</span>
                                    </div>
                                </td>
                                <td class="px-6 py-4">
                                    {{-- kategori --}}
                                    <code class="text-xs bg-gray-100 text-gray-500 px-2.5 py-1 rounded-lg font-mono">
                                        {{ $item->category->name }}
                                    </code>
                                </td>
                                <td class="px-6 py-4">
                                    {{-- penulis --}}
                                    <span class="text-sm font-semibold text-gray-800">{{ $item->author }}</span>
                                </td>
                                <td class="px-6 py-4">
                                    {{-- stok buku --}}
                                    <span class="text-sm font-semibold text-gray-800">{{ $item->stock }}</span>
                                </td>
                                {{-- aksi --}}
                                <td class="px-6 py-4">
                                    <div class="flex items-center justify-center gap-2">
                                        <a href="{{ route('admin.book.detail', $item->id) }}"
                                            class="w-8 h-8 rounded-lg flex items-center justify-center text-gray-400 bg-gray-50 border border-gray-200 hover:bg-blue-50 hover:text-blue-500 hover:border-blue-200 transition-all">
                                            <i class="ri-eye-line"></i>
                                        </a>
                                        <a href="{{ route('admin.book.edit', $item->id) }}"
                                            class="w-8 h-8 rounded-lg flex items-center justify-center text-gray-400 bg-gray-50 border border-gray-200 hover:bg-yellow-50 hover:text-yellow-500 hover:border-yellow-200 transition-all">
                                            <i class="ri-file-edit-line"></i>
                                        </a>
                                        <button class="w-8 h-8 rounded-lg flex items-center justify-center text-gray-400 bg-gray-50 border border-gray-200 hover:bg-red-50 hover:text-red-500 hover:border-red-200 transition-all">
                                            <i class="ri-delete-bin-line"></i>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                        @empty
                           <p>data buku tidak ada</p> 
                        @endforelse

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    @endsection
