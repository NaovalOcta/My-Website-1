@extends('layouts.app')

@section('content')
    {{-- Hero Section --}}
    <section class="min-h-[60vh] flex items-center justify-center pt-32 pb-16 px-6 relative overflow-hidden">
        {{-- Background Effects --}}
        <div class="absolute top-20 left-0 w-72 h-72 bg-primary/10 rounded-full blur-3xl -z-10 animate-float"></div>
        <div class="absolute bottom-20 right-0 w-96 h-96 bg-purple-600/10 rounded-full blur-3xl -z-10 animate-float"
            style="animation-delay: 2s;"></div>

        <div class="container mx-auto text-center">
            <div class="animate-fade-in-up" style="animation-delay: 0.1s;">
                <span
                    class="bg-card-bg border border-gray-700 text-primary px-4 py-2 rounded-full text-sm font-semibold tracking-wide uppercase shadow-lg inline-block mb-6">
                    <i class="fas fa-envelope mr-2"></i> Get in Touch
                </span>
            </div>

            <h1 class="text-4xl md:text-6xl font-bold text-white leading-tight mb-6 animate-fade-in-up"
                style="animation-delay: 0.3s;">
                Let's <span class="text-primary">Talk</span>
            </h1>

            <p class="text-gray-400 text-lg md:text-xl max-w-2xl mx-auto animate-fade-in-up" style="animation-delay: 0.5s;">
                Punya project menarik atau ingin berdiskusi? Saya selalu terbuka untuk
                kesempatan baru dan kolaborasi yang menarik.
            </p>
        </div>
    </section>

    {{-- Main Content --}}
    <section class="py-16 px-6 relative">
        <div class="container mx-auto max-w-6xl">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">

                {{-- Left Side: Contact Info --}}
                <div class="space-y-8">
                    {{-- Contact Cards --}}
                    <div class="space-y-6">
                        <h2 class="text-2xl font-bold text-white mb-8">Informasi Kontak</h2>

                        {{-- Email Card --}}
                        <a href="mailto:contact@naoval.dev"
                            class="group flex items-start gap-5 p-6 bg-card-bg border border-gray-800 rounded-2xl hover:border-primary/50 transition duration-300">
                            <div
                                class="w-14 h-14 bg-primary/20 rounded-2xl flex items-center justify-center text-primary group-hover:bg-primary group-hover:text-white transition shrink-0">
                                <i class="fas fa-envelope text-xl"></i>
                            </div>
                            <div>
                                <h3 class="text-white font-semibold mb-1">Email</h3>
                                <p class="text-gray-400 text-sm mb-2">Cara terbaik untuk menghubungi saya</p>
                                <span class="text-primary group-hover:underline">contact@naoval.dev</span>
                            </div>
                        </a>

                        {{-- WhatsApp Card --}}
                        <a href="https://wa.me/6281234567890" target="_blank"
                            class="group flex items-start gap-5 p-6 bg-card-bg border border-gray-800 rounded-2xl hover:border-green-500/50 transition duration-300">
                            <div
                                class="w-14 h-14 bg-green-500/20 rounded-2xl flex items-center justify-center text-green-400 group-hover:bg-green-500 group-hover:text-white transition shrink-0">
                                <i class="fab fa-whatsapp text-2xl"></i>
                            </div>
                            <div>
                                <h3 class="text-white font-semibold mb-1">WhatsApp</h3>
                                <p class="text-gray-400 text-sm mb-2">Untuk respons yang lebih cepat</p>
                                <span class="text-green-400 group-hover:underline">+62 812 3456 7890</span>
                            </div>
                        </a>

                        {{-- Location Card --}}
                        <div class="flex items-start gap-5 p-6 bg-card-bg border border-gray-800 rounded-2xl">
                            <div
                                class="w-14 h-14 bg-blue-500/20 rounded-2xl flex items-center justify-center text-blue-400 shrink-0">
                                <i class="fas fa-map-marker-alt text-xl"></i>
                            </div>
                            <div>
                                <h3 class="text-white font-semibold mb-1">Lokasi</h3>
                                <p class="text-gray-400 text-sm mb-2">Home office & remote friendly</p>
                                <span class="text-gray-300">Surabaya, Indonesia</span>
                            </div>
                        </div>
                    </div>

                    {{-- Social Media --}}
                    <div class="pt-8 border-t border-gray-800">
                        <h3 class="text-lg font-semibold text-white mb-6">Connect with Me</h3>
                        <div class="flex gap-4">
                            <a href="#"
                                class="w-12 h-12 rounded-xl bg-gray-800 border border-gray-700 flex items-center justify-center text-gray-400 hover:text-white hover:border-primary hover:bg-primary transition duration-300">
                                <i class="fab fa-github text-xl"></i>
                            </a>
                            <a href="#"
                                class="w-12 h-12 rounded-xl bg-gray-800 border border-gray-700 flex items-center justify-center text-gray-400 hover:text-white hover:border-blue-500 hover:bg-blue-500 transition duration-300">
                                <i class="fab fa-linkedin-in text-xl"></i>
                            </a>
                            <a href="#"
                                class="w-12 h-12 rounded-xl bg-gray-800 border border-gray-700 flex items-center justify-center text-gray-400 hover:text-white hover:border-pink-500 hover:bg-pink-500 transition duration-300">
                                <i class="fab fa-instagram text-xl"></i>
                            </a>
                            <a href="#"
                                class="w-12 h-12 rounded-xl bg-gray-800 border border-gray-700 flex items-center justify-center text-gray-400 hover:text-white hover:border-blue-400 hover:bg-blue-400 transition duration-300">
                                <i class="fab fa-twitter text-xl"></i>
                            </a>
                        </div>
                    </div>

                    {{-- Availability Status --}}
                    <div
                        class="p-6 bg-gradient-to-br from-primary/10 to-purple-500/10 border border-primary/20 rounded-2xl">
                        <div class="flex items-center gap-3 mb-3">
                            <span class="relative flex h-3 w-3">
                                <span
                                    class="animate-ping absolute inline-flex h-full w-full rounded-full bg-green-400 opacity-75"></span>
                                <span class="relative inline-flex rounded-full h-3 w-3 bg-green-500"></span>
                            </span>
                            <span class="text-green-400 font-semibold text-sm uppercase tracking-wide">Available for
                                work</span>
                        </div>
                        <p class="text-gray-400 text-sm">
                            Saat ini saya terbuka untuk project freelance dan kesempatan kolaborasi baru.
                        </p>
                    </div>
                </div>

                {{-- Right Side: Contact Form --}}
                <div class="bg-card-bg border border-gray-800 rounded-3xl p-8 md:p-10">
                    <h2 class="text-2xl font-bold text-white mb-2">Kirim Pesan</h2>
                    <p class="text-gray-400 mb-8">Isi form di bawah dan saya akan segera merespons.</p>

                    {{-- Success Message --}}
                    @if (session('success'))
                        <div
                            class="mb-6 p-4 bg-green-500/20 border border-green-500/50 rounded-xl text-green-400 flex items-center gap-3">
                            <i class="fas fa-check-circle text-xl"></i>
                            <span>{{ session('success') }}</span>
                        </div>
                    @endif

                    {{-- Error Message --}}
                    @if (session('error'))
                        <div
                            class="mb-6 p-4 bg-red-500/20 border border-red-500/50 rounded-xl text-red-400 flex items-center gap-3">
                            <i class="fas fa-exclamation-circle text-xl"></i>
                            <span>{{ session('error') }}</span>
                        </div>
                    @endif

                    {{-- Validation Errors --}}
                    @if ($errors->any())
                        <div class="mb-6 p-4 bg-red-500/20 border border-red-500/50 rounded-xl text-red-400">
                            <div class="flex items-center gap-2 mb-2">
                                <i class="fas fa-exclamation-circle"></i>
                                <span class="font-semibold">Terjadi kesalahan:</span>
                            </div>
                            <ul class="list-disc list-inside text-sm space-y-1">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form action="{{ route('contact.send') }}" method="POST" class="space-y-6">
                        @csrf

                        {{-- Name --}}
                        <div class="space-y-2">
                            <label class="text-sm font-medium text-gray-300">
                                Nama Lengkap <span class="text-red-400">*</span>
                            </label>
                            <input type="text" name="name" value="{{ old('name') }}"
                                class="w-full bg-gray-900 border border-gray-700 rounded-xl p-4 text-white placeholder-gray-500 focus:border-primary focus:ring-1 focus:ring-primary outline-none transition @error('name') border-red-500 @enderror"
                                placeholder="John Doe" required>
                        </div>

                        {{-- Email --}}
                        <div class="space-y-2">
                            <label class="text-sm font-medium text-gray-300">
                                Email <span class="text-red-400">*</span>
                            </label>
                            <input type="email" name="email" value="{{ old('email') }}"
                                class="w-full bg-gray-900 border border-gray-700 rounded-xl p-4 text-white placeholder-gray-500 focus:border-primary focus:ring-1 focus:ring-primary outline-none transition @error('email') border-red-500 @enderror"
                                placeholder="john@example.com" required>
                        </div>

                        {{-- Subject --}}
                        <div class="space-y-2">
                            <label class="text-sm font-medium text-gray-300">
                                Subject <span class="text-red-400">*</span>
                            </label>
                            <input type="text" name="subject" value="{{ old('subject') }}"
                                class="w-full bg-gray-900 border border-gray-700 rounded-xl p-4 text-white placeholder-gray-500 focus:border-primary focus:ring-1 focus:ring-primary outline-none transition @error('subject') border-red-500 @enderror"
                                placeholder="Project Collaboration" required>
                        </div>

                        {{-- Message --}}
                        <div class="space-y-2">
                            <label class="text-sm font-medium text-gray-300">
                                Pesan <span class="text-red-400">*</span>
                            </label>
                            <textarea name="message" rows="5"
                                class="w-full bg-gray-900 border border-gray-700 rounded-xl p-4 text-white placeholder-gray-500 focus:border-primary focus:ring-1 focus:ring-primary outline-none transition resize-none @error('message') border-red-500 @enderror"
                                placeholder="Ceritakan tentang project atau kebutuhan Anda..." required>{{ old('message') }}</textarea>
                        </div>

                        {{-- Submit Button --}}
                        <button type="submit"
                            class="w-full py-4 bg-primary text-white font-bold rounded-xl hover:bg-orange-600 transition duration-300 shadow-lg shadow-primary/25 flex items-center justify-center gap-3 group">
                            <span>Kirim Pesan</span>
                            <i
                                class="fas fa-paper-plane group-hover:translate-x-1 group-hover:-translate-y-1 transition-transform"></i>
                        </button>
                    </form>
                </div>

            </div>
        </div>
    </section>

    {{-- FAQ Section --}}
    <section class="py-20 px-6">
        <div class="container mx-auto max-w-4xl">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-white mb-4">Pertanyaan <span class="text-primary">Umum</span></h2>
                <p class="text-gray-400">Beberapa pertanyaan yang sering ditanyakan</p>
            </div>

            <div class="space-y-4" id="faq-container">
                {{-- FAQ Item 1 --}}
                <div class="bg-card-bg border border-gray-800 rounded-2xl overflow-hidden faq-item">
                    <button type="button"
                        class="faq-toggle w-full flex items-center justify-between p-6 text-left hover:bg-gray-800/50 transition">
                        <span class="text-white font-semibold">Berapa lama waktu pengerjaan project?</span>
                        <i class="fas fa-chevron-down text-primary transition-transform faq-icon"></i>
                    </button>
                    <div class="faq-content hidden px-6 pb-6 text-gray-400">
                        <p>Waktu pengerjaan bervariasi tergantung kompleksitas project. Website sederhana biasanya
                            membutuhkan 1-2 minggu, sedangkan aplikasi web yang lebih kompleks bisa memakan waktu 4-8
                            minggu.</p>
                    </div>
                </div>

                {{-- FAQ Item 2 --}}
                <div class="bg-card-bg border border-gray-800 rounded-2xl overflow-hidden faq-item">
                    <button type="button"
                        class="faq-toggle w-full flex items-center justify-between p-6 text-left hover:bg-gray-800/50 transition">
                        <span class="text-white font-semibold">Berapa biaya untuk membuat website?</span>
                        <i class="fas fa-chevron-down text-primary transition-transform faq-icon"></i>
                    </button>
                    <div class="faq-content hidden px-6 pb-6 text-gray-400">
                        <p>Biaya tergantung pada requirements dan fitur yang dibutuhkan. Saya akan memberikan estimasi
                            setelah memahami kebutuhan Anda secara detail. Silakan hubungi saya untuk konsultasi gratis.
                        </p>
                    </div>
                </div>

                {{-- FAQ Item 3 --}}
                <div class="bg-card-bg border border-gray-800 rounded-2xl overflow-hidden faq-item">
                    <button type="button"
                        class="faq-toggle w-full flex items-center justify-between p-6 text-left hover:bg-gray-800/50 transition">
                        <span class="text-white font-semibold">Apakah tersedia support setelah project selesai?</span>
                        <i class="fas fa-chevron-down text-primary transition-transform faq-icon"></i>
                    </button>
                    <div class="faq-content hidden px-6 pb-6 text-gray-400">
                        <p>Ya! Setiap project mendapatkan garansi support gratis selama 1 bulan setelah launching.
                            Untuk maintenance jangka panjang, tersedia paket support bulanan dengan harga terjangkau.</p>
                    </div>
                </div>

                {{-- FAQ Item 4 --}}
                <div class="bg-card-bg border border-gray-800 rounded-2xl overflow-hidden faq-item">
                    <button type="button"
                        class="faq-toggle w-full flex items-center justify-between p-6 text-left hover:bg-gray-800/50 transition">
                        <span class="text-white font-semibold">Teknologi apa yang digunakan?</span>
                        <i class="fas fa-chevron-down text-primary transition-transform faq-icon"></i>
                    </button>
                    <div class="faq-content hidden px-6 pb-6 text-gray-400">
                        <p>Saya menggunakan teknologi modern seperti Laravel (PHP), Tailwind CSS untuk web development,
                            dan Flutter untuk mobile app development. Database yang biasa digunakan adalah MySQL atau
                            PostgreSQL.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Script for FAQ Accordion --}}
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const faqToggles = document.querySelectorAll('.faq-toggle');

            faqToggles.forEach(toggle => {
                toggle.addEventListener('click', function() {
                    const content = this.nextElementSibling;
                    const icon = this.querySelector('.faq-icon');

                    // Toggle current item
                    content.classList.toggle('hidden');
                    icon.classList.toggle('rotate-180');
                });
            });
        });
    </script>
@endsection
