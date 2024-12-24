<x-guest-layout>
    <div class="bg-white h-screen rounded-b-3xl relative bg-jar-hero">
        <div class="h-[calc(100vh-80px)]">
            <div class="grid lg:grid-cols-2 grid-cols-1 max-w-6xl mx-auto h-full px-5 lg:px-0">
                <div class="flex flex-col justify-center gap-2 px-5 relative z-10">
                    <div>
                        <p class="md:text-5xl text-3xl font-bold text-center md:text-start">E-Konsultasi
                        </p>
                        <p class="md:text-3xl text-lg font-bold text-center md:text-start">Pemerintah Kabupaten Paser
                        </p>
                    </div>
                    <p class="text-watercouse-700 text-sm font-light text-center md:text-start">
                        Aplikasi Konsultasi Digital untuk
                        <span class="font-extrabold py-1">
                            Aparatur Sipil Negara (ASN).
                        </span>
                    </p>
                    <div class="grid md:grid-cols-2 grid-cols-1 md:gap-4">
                        <a href="{{ route('login') }}"
                            class="!mt-5 border-2 border-watercouse-700 rounded-lg text-watercouse-700 font-semibold px-5 py-1 text-lg hover:bg-watercouse-700 hover:text-white transition-all duration-500 text-center w-full">Mulai
                            Konsultasi</a>
                        <a href="{{ env('PENGADUAN_URL') }}" target="_blank"
                            class="!mt-5 border-2 border-watercouse-700 rounded-lg text-watercouse-700 font-semibold px-5 py-1 text-lg hover:bg-watercouse-700 hover:text-white transition-all duration-500 text-center w-full">Pengaduan</a>
                    </div>
                </div>
                <div
                    class="flex items-center justify-center absolute lg:relative top-0 w-full h-full z-0 opacity-10 lg:opacity-100 overflow-hidden">
                    <dotlottie-player class="w-full h-full"
                        src="https://lottie.host/8caf647f-1d01-4f3a-bb3f-944d934cb732/yz8zBJavJJ.lottie"
                        background="transparent" speed="1" loop autoplay></dotlottie-player>
                    {{-- <img src="{{ asset('assets/images/hero-bg.png') }}" alt=""> --}}
                </div>
            </div>
        </div>
    </div>
    <div class="-mt-14 relative z-10">
        <div class="max-w-5xl mx-auto px-3">
            <div class="bg-watercouse-600 rounded-3xl border shadow-lg p-5">
                <div class="flex items-center justify-center gap-3">
                    <svg class="fill-white w-10" viewBox="0 0 512 512" version="1.1" xml:space="preserve"
                        xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                        <g
                            id="B_-_119_x2C__Support_x2C__Business_x2C__consulting_x2C__customer_x2C__man_x2C__online_consultant_x2C__service">
                            <path
                                d="M285.195,399.619c-1.621,0-2.871-1.327-2.871-2.911 c0-1.62,1.25-2.909,2.871-2.909h38.094c1.622,0,2.875,1.289,2.875,2.909c0,1.584-1.253,2.911-2.875,2.911H285.195z M285.195,423.491c-1.621,0-2.871-1.289-2.871-2.911c0-1.62,1.25-2.909,2.871-2.909h38.094c1.622,0,2.875,1.289,2.875,2.909 c0,1.622-1.253,2.911-2.875,2.911H285.195z M365.066,320.413c-11.346-6.04-24.83-13.298-40.6-22.251l-41.85,68.854 c-0.148,0.222-0.293,0.405-0.44,0.627c-1.105,1.178-2.946,1.252-4.128,0.147l-21.955-20.483l-24.314,24.167v0.036l0,0h-0.075 v0.038l-0.072,0.036v0.037l0,0v0.037h-0.072v0.035l0,0l-0.076,0.038l0,0v0.036l-0.072,0.038l-0.076,0.036l0,0l-0.221,0.111 l-0.072,0.036l0,0l-0.075,0.037l0,0l0,0l-0.072,0.036l0,0l-0.072,0.037l-0.076,0.037l0,0l-0.073,0.037l0,0h-0.076l0,0 l-0.072,0.037l0,0h-0.072l0,0l-0.076,0.035l0,0h-0.072l0,0h-0.075l0,0l-0.072,0.038l0,0l0,0h-0.072l0,0h-0.076l0,0h-0.072l0,0 h-0.076l0,0h-0.145h-0.076h-0.072h-0.075h-0.072l0,0h-0.076l0,0l-0.072-0.038l0,0h-0.072l0,0h-0.076l0,0l-0.072-0.035l0,0h-0.076 l-0.072-0.037l0,0h-0.072l0,0l-0.147-0.074l0,0l-0.148-0.073l0,0l-0.072-0.037l0,0l-0.076-0.036l0,0l0,0l-0.072-0.038l0,0 l-0.148-0.073v-0.036h-0.072l-0.075-0.112h-0.072v-0.035v-0.037h-0.076v-0.037v-0.036h-0.072v-0.038h-0.072v-0.036v-0.037h-0.076 V371.4v-0.038h-0.072v-0.036v-0.038l-0.075-0.035l0,0l-0.073-0.074v-0.037l-0.072-0.185l0,0l-0.075-0.036l-0.072-0.147 l-0.076-0.11l-39.639-72.427c-16.207,9.21-29.987,16.541-41.405,22.62c-26.526,14.183-40.379,21.551-47.156,32.565 c-7.367,12.01-7.147,29.398-6.63,65.611c0.147,10.278,0.295,21.993,0.295,34.04c54.521,12.452,108.969,18.53,163.421,18.456 c54.449-0.073,108.896-6.335,163.421-18.456c0-11.604,0.145-23.062,0.293-33.155c0.443-36.583,0.664-54.155-6.778-66.312 C406.031,342.37,392.03,334.854,365.066,320.413z M259.925,342.886l19.45,18.199l40.303-66.349l-14.66-13.445L259.925,342.886z M192.289,294.811l38.166,69.811l21.735-21.661l-45.167-61.669L192.289,294.811z M257.495,68.873 c-21.884,0-41.777,8.88-56.146,23.247c-11.566,11.567-19.525,26.672-22.251,43.507c0.147,0.406,0.22,0.884,0.147,1.326 c-0.295,1.841-0.516,3.72-0.588,5.599c-0.148,1.843-0.221,3.759-0.221,5.711c0,4.273,0.293,8.841,0.881,13.63v0.111 c0.592,4.79,1.477,9.799,2.582,14.81c0.072,0.258,0.146,0.589,0.146,0.883c0,0.259-0.073,0.479-0.073,0.737 c4.2,18.162,11.935,37.614,22.917,53.528c13.112,19.009,30.795,32.824,52.606,32.824c21.808,0,39.563-13.815,52.679-32.824 c1.4-2.063,2.799-4.2,4.128-6.373l-44.208,16.799c-2.285,0.847-4.644,0.737-6.705-0.185c-1.99-0.922-3.76-2.616-4.568-4.863 c-0.885-2.247-0.736-4.642,0.221-6.667c0.884-2.063,2.578-3.758,4.787-4.605l61.744-23.504 c7.441-18.972,11.349-38.865,11.349-54.3c0-21.92-8.915-41.777-23.284-56.144C299.27,77.752,279.449,68.873,257.495,68.873z M194.499,129.364c-0.737-1.4-0.148-3.168,1.25-3.905c1.4-0.737,3.17-0.147,3.907,1.252c1.545,2.948,3.387,5.49,5.452,7.663 c6.262,6.668,14.81,9.983,23.501,10.794c8.696,0.811,17.611-0.921,24.317-4.384c2.43-1.253,4.641-2.727,6.333-4.421l0.076-0.038 c15.25-14.441,20.923-17.129,23.357-14.588l0.145,0.147c1.477,1.731,1.032,4.237,0.443,7.146 c-0.443,2.137-0.957,4.606-0.516,5.785v0.074c0.367,0.589,1.841,0.553,5.82-0.922c5.453-2.063,13.484-4.532,20.703-4.863h0.076 c8.104-0.295,15.177,1.989,17.459,10.131c0.445,1.547-0.512,3.131-2.062,3.573c-1.546,0.405-3.167-0.515-3.535-2.025 c-1.329-4.752-6.116-6.078-11.643-5.858h-0.072c-6.413,0.295-13.853,2.58-18.864,4.458c-8.18,3.02-11.787,1.289-13.26-2.284 l-0.076-0.295c-1.029-2.689-0.368-6.042,0.221-8.915c0.296-1.4,1.4-1.695,0.961-2.137c-0.148-0.185-3.172,3.463-15.178,14.81 v0.037c-2.214,2.063-4.793,3.832-7.739,5.341c-7.664,3.979-17.684,5.932-27.481,5.011c-10.021-0.922-19.893-4.826-27.264-12.563 C198.403,135.848,196.265,132.827,194.499,129.364z M279.375,178.692c-1.474,0.626-3.168-0.073-3.832-1.547 c-0.588-1.474,0.076-3.168,1.549-3.795c0.072-0.037,18.053-8.104,26.744,0.627c1.105,1.105,1.105,2.983,0,4.125 c-1.177,1.105-3.019,1.105-4.123-0.037C293.891,172.245,279.449,178.692,279.375,178.692z M159.5,139.458 c3.315-27.703,15.105-52.275,32.272-69.995c17.459-18.051,40.524-28.993,65.722-28.993c25.271,0,48.331,10.942,65.794,28.993 c17.167,17.72,28.958,42.292,32.272,69.995h7.663v35.33h-23.137c1.915-9.506,2.875-18.567,2.875-26.524 c0-2.948-0.076-5.895-0.443-8.805h7.222c-3.315-26.12-14.44-49.254-30.651-65.943c-16.431-16.946-37.946-27.224-61.595-27.224 c-23.578,0-45.168,10.278-61.523,27.224c-16.21,16.688-27.408,39.823-30.651,65.943h7.147c-0.296,2.91-0.441,5.857-0.441,8.805 c0,7.957,0.958,17.019,2.947,26.524h-22.695v-35.33H159.5z M348.56,189.892c0-1.622,1.329-2.948,2.95-2.948 c1.618,0,2.871,1.326,2.871,2.948v12.157c0,1.326-0.884,2.432-2.062,2.799l-84.292,32.087c-1.545,0.589-3.166-0.184-3.755-1.657 c-0.589-1.51,0.147-3.205,1.694-3.758l82.593-31.461V189.892z M237.97,173.35c1.473,0.627,2.134,2.322,1.473,3.795 c-0.589,1.474-2.286,2.173-3.759,1.547c-0.072,0-14.513-6.447-20.334-0.627c-1.105,1.142-2.947,1.142-4.127,0.037 c-1.104-1.142-1.104-3.02,0-4.125C219.918,165.246,237.894,173.313,237.97,173.35z"
                                style="fill-rule:evenodd;clip-rule:evenodd;"></path>
                        </g>
                    </svg>
                    <p class="text-center text-3xl font-semibold text-white">E-Konsultasi</p>

                </div>
                <p class="text-center max-w-4xl mx-auto text-xs text-white/90">
                    Aplikasi ini digunakan sebagai sarana untuk memfasilitasi konsultasi mengenai birokrasi di
                    Pemerintahan Kabupaten Paser. Melalui aplikasi ini, masyarakat dapat menyampaikan pertanyaan terkait
                    berbagai urusan administratif secara lebih mudah dan efisien.</p>
            </div>
        </div>
    </div>
    <div class="max-w-6xl mx-auto py-10 mt-10">
        <div class="grid lg:grid-cols-2 grid-cols-1 px-3 lg:px-0 relative">
            <div class="flex items-center justify-center lg:relative absolute h-full w-full lg:opacity-100 opacity-10">
                <dotlottie-player src="https://lottie.host/0b4a6adb-f4b9-40a1-a1e3-f8da5d6c1ae0/HFban4mqLx.lottie"
                    background="transparent" speed="1" class="w-2/3" loop autoplay></dotlottie-player>
            </div>
            <div class="z-10 relative">
                <p class="font-semibold md:text-xl text-lg mb-3">Perangkat Daerah melakukan Registrasi dan Konsultasi
                    melalui
                    Aplikasi E-Konsultasi dengan langkah-langkah berikut:</p>
                <div class="text-sm md:text-base">
                    <div class="flex items-center">
                        <dotlottie-player
                            src="https://lottie.host/d18221c4-daa0-4679-8b39-4312b8fad321/12uBlmUvNa.lottie"
                            background="transparent" speed="1" class="w-20 flex-none" loop
                            autoplay></dotlottie-player>
                        <div>
                            <p class="font-semibold">Perangkat Daerah</p>
                            <p>Mengisi data asal masing-masing perangkat daerah.</p>
                        </div>
                    </div>
                    <div class="flex items-center">
                        <dotlottie-player
                            src="https://lottie.host/d18221c4-daa0-4679-8b39-4312b8fad321/12uBlmUvNa.lottie"
                            background="transparent" speed="1" class="w-20 flex-none" loop
                            autoplay></dotlottie-player>
                        <div>
                            <p class="font-semibold">Area Konsultasi</p>
                            <p>Memilih area pemeriksaan yang relevan.</p>
                        </div>
                    </div>
                    <div class="flex items-center">
                        <dotlottie-player
                            src="https://lottie.host/d18221c4-daa0-4679-8b39-4312b8fad321/12uBlmUvNa.lottie"
                            background="transparent" speed="1" class="w-20 flex-none" loop
                            autoplay></dotlottie-player>
                        <div>
                            <p class="font-semibold">Permasalahan/Materi Konsultasi</p>
                            <p>Menjelaskan permasalahan yang akan dikonsultasikan.</p>
                        </div>
                    </div>
                    <div class="flex items-center">
                        <dotlottie-player
                            src="https://lottie.host/d18221c4-daa0-4679-8b39-4312b8fad321/12uBlmUvNa.lottie"
                            background="transparent" speed="1" class="w-20 flex-none" loop
                            autoplay></dotlottie-player>
                        <div>
                            <p class="font-semibold">Lampiran Materi Konsultasi</p>
                            <p>Mengunggah file atau materi yang relevan untuk konsultasi.</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="py-10 mt-10">
        <div class="bg-watercouse-50 max-w-6xl mx-auto rounded-3xl shadow-lg p-5">
            <p class="text-center md:text-3xl text-xl font-semibold">Alur Melakukan Konsultasi Melalui Aplikasi
                E-Konsultasi</p>
            <div
                class="space-y-8 relative before:absolute before:inset-0 before:ml-5 before:-translate-x-px md:before:mx-auto md:before:translate-x-0 before:h-full before:w-0.5 before:bg-gradient-to-b before:from-transparent before:via-slate-300 before:to-transparent py-10">
                <div
                    class="relative flex items-center justify-between md:justify-normal md:odd:flex-row-reverse group is-active">
                    <div
                        class="flex items-center justify-center w-10 h-10 rounded-full border border-white bg-watercouse-500 text-white shadow shrink-0 md:order-1 md:group-odd:-translate-x-1/2 md:group-even:translate-x-1/2">
                        <p>1</p>
                    </div>
                    <div
                        class="w-[calc(100%-4rem)] md:w-[calc(50%-2.5rem)] bg-white p-4 rounded-3xl border border-slate-200 shadow">
                        <div class="flex items-center justify-between space-x-2 mb-1">
                            <div class="font-bold text-slate-900">Login/Registrasi</div>
                        </div>
                        <div class="text-slate-500 text-sm">Perangkat Daerah Melakukan Login/Registrasi permohonan
                            layanan dan
                            melakukan Konsultasi melalui Aplikasi E-Konsultasi.</div>
                    </div>
                </div>
                <div
                    class="relative flex items-center justify-between md:justify-normal md:odd:flex-row-reverse group is-active">
                    <div
                        class="flex items-center justify-center w-10 h-10 rounded-full border border-white bg-watercouse-500 text-white shadow shrink-0 md:order-1 md:group-odd:-translate-x-1/2 md:group-even:translate-x-1/2">
                        <p>2</p>
                    </div>
                    <div
                        class="w-[calc(100%-4rem)] md:w-[calc(50%-2.5rem)] bg-white p-4 rounded-3xl border border-slate-200 shadow">
                        <div class="flex items-center justify-between space-x-2 mb-1">
                            <div class="font-bold text-slate-900">Konfirmasi</div>
                        </div>
                        <div class="text-slate-500 text-sm">Apabila Perangkat Daerah memerlukan konsultasi secara tatap
                            muka, konfirmasi jadwal pelaksanaan layanan konsultasi akan disampaikan melalui WhatsApp dan
                            email.</div>
                    </div>
                </div>
                <div class="relative flex items-center justify-between md:justify-normal md:odd:flex-row-reverse group">
                    <div
                        class="flex items-center justify-center w-10 h-10 rounded-full border border-white bg-watercouse-500 text-white shadow shrink-0 md:order-1 md:group-odd:-translate-x-1/2 md:group-even:translate-x-1/2">
                        <p>3</p>
                    </div>
                    <div
                        class="w-[calc(100%-4rem)] md:w-[calc(50%-2.5rem)] bg-white p-4 rounded-3xl border border-slate-200 shadow">
                        <div class="flex items-center justify-between space-x-2 mb-1">
                            <div class="font-bold text-slate-900">Berita Acara</div>
                        </div>
                        <div class="text-slate-500 text-sm">Setelah selesai melakukan konsultasi, Perangkat Daerah akan
                            menerima Berita Acara Hasil Konsultasi yang telah ditandatangani oleh semua pihak terkait.
                        </div>
                    </div>
                </div>

            </div>


        </div>
    </div>
</x-guest-layout>
