<header class="p-1 md:p-2 w-full z-20 fixed bg-gray-100 dark:bg-gray-800 border-b-2 dark:border-gray-400">
  <nav class="navbar container flex justify-between mx-auto min-w-full">
    <input autocomplete="off" type="checkbox" name="hbr" id="hbr" class="hidden peer" aria-hidden="true" />
    <div class="p-4 h-fit flex justify-start space-x-3">
      <x-animated-container data-tippy-content="A for Ayham" tag="a" rel="noopener noreferrer" href="#" aria-label="Back to homepage" class="js-tippy">
        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor"  class="w-8 h-8">
          <svg viewBox="0 0 384 512">
            <path class="a"
                    d="M221.5 51.7C216.6 39.8 204.9 32 192 32s-24.6 7.8-29.5 19.7l-120 288-40 96c-6.8 16.3 .9 35 17.2 41.8s35-.9 41.8-17.2L93.3 384H290.7l31.8
                     76.3c6.8 16.3 25.5 24 41.8 17.2s24-25.5 17.2-41.8l-40-96-120-288zM264 320H120l72-172.8L264 320z"/>
          </svg>
          <svg viewBox="15 7 20 100">
            <path class="a" d="m8.8 15.4l-5.3 8.3 8.3 5.2-3.4 0.8-8.2-5.3 5.2-8.2z" />
          </svg>
          <svg viewBox="-9 7 32 100">
            <path class="a" d="m26.6 16.2l5.1 8.2-8.2 5.3-3.4-0.8 8.3-5.2-5.2-8.3z" />
          </svg>
        </svg>
      </x-animated-container>
      <x-animated-container
        class="js-tippy js-dark-mode dark:hidden cursor-pointer"
        data-tippy-content="Toggle dark and light mode"
      >
        <i class="w-7 h-7 fas fa-moon"></i>
      </x-animated-container>
      <x-animated-container
        class="js-tippy js-light-mode hidden dark:inline cursor-pointer"
        data-tippy-content="Toggle dark and light mode"
      >
        <i class="w-7 h-7 fas fa-sun"></i>
      </x-animated-container>
    </div>
    <ul class="items-stretch space-y-8 mt-20 mb-8 md:mb-0 md:mt-0 hidden -ml-8 md:ml-auto md:space-y-0 md:space-x-3 md:flex peer-checked:block">
      @foreach ($page->siteSections->keys() as $item)
        <li class="flex items-center place-content-center pb-2 md:pb-0 px-4 border-b-2 dark:border-gray-400">
          <x-animated-container
            class="js-nav-item {{ $loop->index === 0 ? 'text-stone-900 font-semibold dark:text-stone-50 -translate-y-1 scale-110' : '' }}"
            tag="a" rel="noopener noreferrer" href="#"
          >
            {{ Illuminate\Support\Str::headline($item) }}
          </x-animated-container>
        </li>
      @endforeach
    </ul>
    <x-animated-container
      tag="label"
      data-tippy-content="Toggle show hide navigation"
      data-tippy-placement="left"
      aria-label="Toggle show hide navigation"
      for="hbr"
      class="js-tippy md:hidden inline p-4 cursor-pointer h-fit peer-checked:text-stone-900 dark:peer-checked:text-stone-50 peer-checked:-translate-y-1 peer-checked:scale-110">
      <i class="fas fa-bars w-6 h-6"></i>
    </x-animated-container>
  </nav>
</header>
