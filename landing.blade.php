@extends('layouts.app')

@section('content')

<div class="w-full min-h-screen bg-gray-100">

    <!-- ================= NAVBAR ================= -->
    <nav class="sticky top-0 z-50 backdrop-blur bg-white/70 border-b border-gray-100 px-6 md:px-20 py-4 flex justify-between items-center">
        <div class="text-blue-600 font-bold text-lg">
            🖐️ SMART FINGER
        </div>

        <a href="/admin"
           class="bg-blue-600 hover:bg-blue-700 text-white px-5 py-2 rounded-xl shadow transition">
            Login
        </a>
    </nav>

    <!-- ================= HERO ================= -->
    <section 
        class="relative w-full min-h-screen flex items-center px-6 md:px-20
               bg-no-repeat bg-cover bg-[position:85%_center]"
        style="background-image: url('{{ asset('images/bacground.png') }}');">

        <div class="max-w-xl md:ml-24 lg:ml-40 -mt-[100px] md:-mt-[160px]">

            <h1 class="text-6xl md:text-8xl lg:text-[110px] font-extrabold leading-[1.05] tracking-tight text-black">
                Smart <br> Fingers
            </h1>

            <p class="mt-6 text-gray-600 max-w-md">
                Platform belajar interaktif untuk memahami materi dengan cepat,
                mudah, dan menyenangkan.
            </p>

            <a href="#prologue"
               class="inline-block mt-8 bg-blue-600 hover:bg-blue-700 text-white px-8 py-3 rounded-full text-lg font-semibold transition">
                Mulai Belajar
            </a>
        </div>

    </section>

    <!-- ================= FITUR ================= -->
    <section class="relative z-10 px-6 md:px-20 -mt-20 pb-16">

        <div class="bg-white rounded-3xl shadow-[0_20px_60px_rgba(0,0,0,0.15)] p-6 md:p-10 grid md:grid-cols-4 gap-6">

            <div class="text-center hover:-translate-y-2 hover:shadow-lg transition p-4 rounded-xl">
                📘
                <h3 class="font-semibold mt-3">Prologue</h3>
                <p class="text-sm text-gray-500">Warming Up</p>
            </div>

            <div class="text-center hover:-translate-y-2 hover:shadow-lg transition p-4 rounded-xl">
                🎯
                <h3 class="font-semibold mt-3">Unit 1</h3>
                <p class="text-sm text-gray-500">Basic Tricks</p>
            </div>

            <div class="text-center hover:-translate-y-2 hover:shadow-lg transition p-4 rounded-xl">
                📊
                <h3 class="font-semibold mt-3">Unit 2</h3>
                <p class="text-sm text-gray-500">Practice</p>
            </div>

            <div class="text-center hover:-translate-y-2 hover:shadow-lg transition p-4 rounded-xl">
                🔐
                <h3 class="font-semibold mt-3">Unit 3</h3>
                <p class="text-sm text-gray-500">Answer Key</p>
            </div>

        </div>

    </section>

    <!-- ================= PROLOGUE ================= -->
    <section id="prologue" class="scroll-mt-28 bg-white py-24 px-6 md:px-20">

        <div class="max-w-4xl mx-auto text-center">

            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-6">
                Prologue Pembelajaran
            </h2>

            <div class="w-16 h-1 bg-blue-600 mx-auto mb-8 rounded-full"></div>

            <p class="text-gray-600 text-lg leading-relaxed">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
            </p>

            <p class="text-gray-600 text-lg leading-relaxed mt-4">
                Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
            </p>

        </div>

    </section>

    <!-- ================= CTA ================= -->
    <section class="bg-blue-600 py-20 text-center text-white">

        <h2 class="text-3xl md:text-4xl font-bold mb-4">
            Siap Belajar Lebih Cepat?
        </h2>

        <p class="mb-6 text-blue-100">
            Mulai perjalanan belajarmu sekarang juga bersama Smart Finger
        </p>

        <a href="/input-nama"
           class="bg-white text-blue-600 px-8 py-3 rounded-full font-semibold hover:bg-gray-100 transition">
            Mulai Sekarang
        </a>

    </section>

    <!-- ================= FOOTER ================= -->
    <footer class="bg-gray-900 text-gray-300 px-6 md:px-20 py-12">

        <div class="grid md:grid-cols-3 gap-10">

            <div>
                <h3 class="text-white font-bold text-lg mb-3">SMART FINGER</h3>
                <p class="text-sm text-gray-400">
                    Platform belajar modern berbasis interaktif untuk meningkatkan kemampuan.
                </p>
            </div>

            <div>
                <h4 class="text-white font-semibold mb-3">Menu</h4>
                <ul class="space-y-2 text-sm">
                    <li><a href="#" class="hover:text-white">Beranda</a></li>
                    <li><a href="#prologue" class="hover:text-white">Prologue</a></li>
                </ul>
            </div>

            <div>
                <h4 class="text-white font-semibold mb-3">Kontak</h4>
                <p class="text-sm">Email: smart@finger.com</p>
                <p class="text-sm mt-1">Telp: 0812-3456-7890</p>
            </div>

        </div>

        <div class="border-t border-gray-700 mt-10 pt-6 text-center text-sm text-gray-500">
            © 2026 Smart Finger
        </div>

    </footer>

</div>

@endsection