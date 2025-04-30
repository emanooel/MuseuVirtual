<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Player') }}
        </h2>
    </x-slot>

    <div class="flex h-screen bg-gray-100 text-gray-800">
        <!-- Sidebar -->
        <aside class="w-64 bg-white border-r border-gray-200 p-4 flex flex-col">
            <h2 class="text-xl font-bold mb-4 text-red-500">Menu</h2>
            <nav class="flex flex-col space-y-2">
                <a href="#" class="hover:text-red-500">Home</a>
                <a href="#" class="hover:text-red-500">Playlist</a>
                <a href="#" class="hover:text-red-500">Favoritos</a>
            </nav>
        </aside>

        <!-- Main Content -->
        <main class="flex-1 flex flex-col">
            <div class="flex-grow flex flex-col items-center justify-center">
                <!-- Audio Element (escondido) -->
                <audio id="audioPlayer" src="{{ asset('img/musicas/570d234ca0b54314be9eda52ff741f83.mp3') }}"></audio>

                <!-- Capa -->
                <img src="{{ asset('img/musicasimg/41cd797f06e9587cef4396b1d558c583.jpg') }}"
                     alt="Album" class="w-64 h-64 rounded-lg shadow-lg mb-6">

                <!-- Info da música -->
                <h1 class="text-2xl font-semibold">Nome da Música</h1>
                <p class="text-gray-600">Nome do Artista</p>

                <!-- Controles -->
                <div class="flex items-center mt-6 space-x-4">
                    <button class="text-2xl" onclick="skip(-10)">⏮️</button>
                    <button id="playPauseBtn" class="text-3xl text-red-500">⏯️</button>
                    <button class="text-2xl" onclick="skip(10)">⏭️</button>
                </div>
            </div>

            <!-- Barra inferior -->
            <footer class="bg-white border-t border-gray-200 px-6 py-3 w-full">
                <div class="flex items-center text-sm w-full">
                    <span id="currentTime">0:00</span>
                    <input type="range" id="seekBar" class="w-full mx-4 accent-red-500" value="0" step="1">
                    <span id="duration">0:00</span>
                </div>
            </footer>
        </main>
    </div>

    <!-- Scripts -->
    <script>
    const audio = document.getElementById('audioPlayer');
    const playPauseBtn = document.getElementById('playPauseBtn');
    const seekBar = document.getElementById('seekBar');
    const currentTimeSpan = document.getElementById('currentTime');
    const durationSpan = document.getElementById('duration');

    // Formata mm:ss
    function formatTime(seconds) {
        const minutes = Math.floor(seconds / 60);
        const secs = Math.floor(seconds % 60);
        return `${minutes}:${secs < 10 ? '0' : ''}${secs}`;
    }

    // Define duração máxima ao carregar
    audio.addEventListener('loadedmetadata', () => {
        seekBar.max = Math.floor(audio.duration);
        durationSpan.textContent = formatTime(audio.duration);
    });

    // Atualiza barra e tempo atual a cada segundo
    setInterval(() => {
        if (!audio.paused && !seekBar.matches(':active')) {
            seekBar.value = Math.floor(audio.currentTime);
            currentTimeSpan.textContent = formatTime(audio.currentTime);
        }
    }, 1000);

    // Botão de play/pause
    playPauseBtn.addEventListener('click', () => {
        if (audio.paused) {
            audio.play();
            playPauseBtn.textContent = '⏸️'; // muda para pause
        } else {
            audio.pause();
            playPauseBtn.textContent = '⏯️'; // muda para play
        }
    });
    </script>

</x-app-layout>
