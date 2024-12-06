@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4 pt-16">
    <div class="mb-8">
        <h1 class="text-4xl font-bold text-indigo-600 mb-4">Daftar Tugas</h1>
        <button class="bg-indigo-600 text-white px-6 py-2 rounded-lg hover:bg-indigo-700 transition-colors">
            Tambah Tugas Baru
        </button>
    </div>

    <!-- Daftar Tugas -->
    <div class="grid gap-4 md:grid-cols-2 lg:grid-cols-3">
        @forelse($tasks as $task)
            <div class="bg-white rounded-xl shadow-lg p-6">
                <div class="flex justify-between items-start mb-4">
                    <h3 class="text-xl font-semibold text-gray-800">{{ $task->title }}</h3>
                    <span class="text-sm text-gray-500">{{ $task->created_at->format('d M Y') }}</span>
                </div>
                <p class="text-gray-600 mb-4">{{ $task->description }}</p>
                <div class="flex justify-between items-center">
                    <span class="px-3 py-1 rounded-full text-sm {{ $task->status === 'completed' ? 'bg-green-100 text-green-800' : 'bg-yellow-100 text-yellow-800' }}">
                        {{ ucfirst($task->status) }}
                    </span>
                    <div class="flex space-x-2">
                        <button class="text-indigo-600 hover:text-indigo-800">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"/>
                            </svg>
                        </button>
                        <button class="text-red-600 hover:text-red-800">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
        @empty
            <div class="col-span-full text-center py-8">
                <p class="text-gray-500">Belum ada tugas yang ditambahkan</p>
            </div>
        @endforelse
    </div>
</div>
@endsection
