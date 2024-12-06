<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sevias 17</title>
    <script src="https://cdn.tailwindcss.com"></script>
    
    <style>
        .animate-float {
            animation: float 3s ease-in-out infinite;
        }
        
        @keyframes float {
            0% {
                transform: translateY(0px);
            }
            50% {
                transform: translateY(-20px);
            }
            100% {
                transform: translateY(0px);
            }
        }

        .btn-hover {
            transition: all 0.3s ease;
        }
        
        .btn-hover:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(99, 102, 241, 0.2);
        }
    </style>
</head>
<body class="antialiased bg-gradient-to-br from-indigo-50 to-white min-h-screen">
    <div class="relative min-h-screen flex flex-col items-center justify-center p-4">
        <!-- Header -->
        <div class="text-center mb-12 animate-float">
            <h1 class="text-5xl md:text-6xl font-bold text-indigo-600 mb-4">
                Selamat Datang di Sevias 17
            </h1>
            <p class="text-xl text-gray-600">
                Platform manajemen tugas dan catatan yang simpel dan efektif
            </p>
        </div>

        <!-- Main Content -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 max-w-4xl w-full">
            <!-- Task Card -->
            <div class="bg-white rounded-xl shadow-lg p-6 transform transition duration-500 hover:scale-105">
                <div class="text-center mb-6">
                    <div class="bg-indigo-100 rounded-full p-4 inline-block mb-4">
                        <svg class="w-12 h-12 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4"></path>
                        </svg>
                    </div>
                    <h2 class="text-2xl font-bold text-gray-800 mb-2">Manajemen Tugas</h2>
                    <p class="text-gray-600 mb-6">
                        Kelola tugas-tugas Anda dengan mudah dan efisien
                    </p>
                    <a href="{{ route('tasks.index') }}" class="btn-hover inline-block bg-indigo-600 text-white px-8 py-3 rounded-full font-semibold">
                        Mulai Kelola Tugas
                    </a>
                </div>
            </div>

            <!-- Notes Card -->
            <div class="bg-white rounded-xl shadow-lg p-6 transform transition duration-500 hover:scale-105">
                <div class="text-center mb-6">
                    <div class="bg-indigo-100 rounded-full p-4 inline-block mb-4">
                        <svg class="w-12 h-12 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path>
                        </svg>
                    </div>
                    <h2 class="text-2xl font-bold text-gray-800 mb-2">Catatan</h2>
                    <p class="text-gray-600 mb-6">
                        Buat dan kelola catatan penting Anda
                    </p>
                    <a href="{{ route('note.note') }}" class="btn-hover inline-block bg-indigo-600 text-white px-8 py-3 rounded-full font-semibold">
                        Mulai Membuat Catatan
                    </a>
                </div>
            </div>
        </div>

        <!-- Footer -->
        <div class="absolute bottom-4 text-center text-gray-600">
            <p>&copy; {{ date('Y') }} Sevias 17. All rights reserved.</p>
        </div>
    </div>
</body>
</html>
