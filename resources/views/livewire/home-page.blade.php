<div class="bg-neutral-950 w-full h-svh flex flex-col items-center justify-center text-white gap-4">

    <header>
        <div class="relative">
            <h1 class="font-medium text-xl">
                Social Mood
            </h1>
            <p class="text-xs text-rose-500 font-medium absolute px-1 py-px rounded flex items-center justify-center gap-1
            -top-5 -right-1">
                <span class="w-1.5 h-1.5 bg-current rounded-full animate-pulse"></span>
                <span>نسخه لایو</span>
            </p>
        </div>
    </header>

    <main class="w-full bg-neutral-900 max-w-xs p-4 rounded-lg flex flex-col items-center justify-center relative overflow-hidden">
        <ul wire:ignore class="grid grid-cols-4 gap-4 w-full z-20 select-none">
            <li class="flex flex-col items-center justify-center gap-2">
                <p wire:click="broadcast('heart')" class="text-lg cursor-pointer hover:scale-125 transition-all duration-700 hover:rotate-[8deg]">
                    ❤️
                </p>
                <p class="text-xs text-neutral-300">
                    <span id="counter-heart">0</span>
                </p>
            </li>

            <li class="flex flex-col items-center justify-center gap-2">
                <p wire:click="broadcast('fire')" class="text-lg cursor-pointer hover:scale-125 transition-all duration-700 hover:rotate-[8deg]">
                    🔥
                </p>
                <p class="text-xs text-neutral-300">
                    <span id="counter-fire">0</span>
                </p>
            </li>

            <li class="flex flex-col items-center justify-center gap-2">
                <p wire:click="broadcast('ghost')" class="text-lg cursor-pointer hover:scale-125 transition-all duration-700 hover:rotate-[8deg]">
                    👻
                </p>
                <p class="text-xs text-neutral-300">
                    <span id="counter-ghost">0</span>
                </p>
            </li>

            <li class="flex flex-col items-center justify-center gap-2">
                <p wire:click="broadcast('moon')" class="text-lg cursor-pointer hover:scale-125 transition-all duration-700 hover:rotate-[8deg]">
                    🌖
                </p>
                <p class="text-xs text-neutral-300">
                    <span id="counter-moon">0</span>
                </p>
            </li>
        </ul>
        <div class="absolute bg-green-800 w-32 h-32 opacity-50 -bottom-16 rounded-full blur-[24px]"></div>
        <div class="absolute bg-blue-500 w-16 h-16 opacity-25 -bottom-4 rounded-full blur-[24px] animate-pulse transition-all duration-1000"></div>
    </main>

    <footer>
        <p class="text-xs">
            ایجاد شده با ❤️ در سبزلرن
        </p>
    </footer>

</div>
