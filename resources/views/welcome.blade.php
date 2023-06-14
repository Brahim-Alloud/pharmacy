
    @include('layouts.navbar-client')
    <section class="relative isolate overflow-hidden bg-white px-6 py-24 sm:py-32 lg:px-8">
        <div
            class="absolute inset-0 -z-10 bg-[radial-gradient(45rem_50rem_at_top,theme(colors.indigo.100),white)] opacity-20">
        </div>
        <div
            class="absolute inset-y-0 right-1/2 -z-10 mr-16 w-[200%] origin-bottom-left skew-x-[-30deg] bg-white shadow-xl shadow-indigo-600/10 ring-1 ring-indigo-50 sm:mr-28 lg:mr-0 xl:mr-16 xl:origin-center">
        </div>
        <div class="mx-auto max-w-2xl lg:max-w-4xl">
            <figure class="mt-10">
                <blockquote class="text-center text-xl font-semibold leading-8 text-gray-900 sm:text-2xl sm:leading-9">
                  <div
                  id="carouselDarkVariant"
                  class="relative"
                  data-te-carousel-init
                  data-te-carousel-slide>
                  <!-- Carousel indicators -->
                  <div
                    class="absolute inset-x-0 bottom-0 z-[2] mx-[15%] mb-4 flex list-none justify-center p-0"
                    data-te-carousel-indicators>
                    <button
                      data-te-target="#carouselDarkVariant"
                      data-te-slide-to="0"
                      data-te-carousel-active
                      class="mx-[3px] box-content h-[3px] w-[30px] flex-initial cursor-pointer border-0 border-y-[10px] border-solid border-transparent bg-black bg-clip-padding p-0 -indent-[999px] opacity-50 transition-opacity duration-[600ms] ease-[cubic-bezier(0.25,0.1,0.25,1.0)] motion-reduce:transition-none"
                      aria-current="true"
                      aria-label="Slide 1"></button>
                    <button
                      data-te-target="#carouselDarkVariant"
                      class="mx-[3px] box-content h-[3px] w-[30px] flex-initial cursor-pointer border-0 border-y-[10px] border-solid border-transparent bg-black bg-clip-padding p-0 -indent-[999px] opacity-50 transition-opacity duration-[600ms] ease-[cubic-bezier(0.25,0.1,0.25,1.0)] motion-reduce:transition-none"
                      data-te-slide-to="1"
                      aria-label="Slide 1"></button>
                    <button
                      data-te-target="#carouselDarkVariant"
                      class="mx-[3px] box-content h-[3px] w-[30px] flex-initial cursor-pointer border-0 border-y-[10px] border-solid border-transparent bg-black bg-clip-padding p-0 -indent-[999px] opacity-50 transition-opacity duration-[600ms] ease-[cubic-bezier(0.25,0.1,0.25,1.0)] motion-reduce:transition-none"
                      data-te-slide-to="2"
                      aria-label="Slide 1"></button>
                  </div>
                
                  <!-- Carousel items -->
                  <div
                    class="relative w-full overflow-hidden after:clear-both after:block after:content-['']">
                    <!-- First item -->
                    <div
                      class="relative float-left -mr-[100%] w-full !transform-none opacity-0 transition-opacity duration-[600ms] ease-in-out motion-reduce:transition-none"
                      data-te-carousel-fade
                      data-te-carousel-item
                      data-te-carousel-active>
                      <img
                        src="https://mdbcdn.b-cdn.net/img/Photos/Slides/img%20(19).webp"
                        class="block w-full"
                        alt="Motorbike Smoke" />
                      <div
                        class="absolute inset-x-[15%] bottom-5 hidden py-5 text-center text-black md:block">
                        <h5 class="text-xl">First slide label</h5>
                        <p>
                          Some representative placeholder content for the first slide.
                        </p>
                      </div>
                    </div>
                    <!-- Second item -->
                    <div
                      class="relative float-left -mr-[100%] hidden w-full !transform-none opacity-0 transition-opacity duration-[600ms] ease-in-out motion-reduce:transition-none"
                      data-te-carousel-fade
                      data-te-carousel-item>
                      <img
                        src="https://mdbcdn.b-cdn.net/img/Photos/Slides/img%20(35).webp"
                        class="block w-full"
                        alt="Mountaintop" />
                      <div
                        class="absolute inset-x-[15%] bottom-5 hidden py-5 text-center text-black md:block">
                        <h5 class="text-xl">Second slide label</h5>
                        <p>
                          Some representative placeholder content for the second slide.
                        </p>
                      </div>
                    </div>
                    <!-- Third item -->
                    <div
                      class="relative float-left -mr-[100%] hidden w-full !transform-none opacity-0 transition-opacity duration-[600ms] ease-in-out motion-reduce:transition-none"
                      data-te-carousel-fade
                      data-te-carousel-item>
                      <img
                        src="https://mdbcdn.b-cdn.net/img/Photos/Slides/img%20(40).webp"
                        class="block w-full"
                        alt="Woman Reading a Book" />
                      <div
                        class="absolute inset-x-[15%] bottom-5 hidden py-5 text-center text-black md:block">
                        <h5 class="text-xl">Third slide label</h5>
                        <p>
                          Some representative placeholder content for the third slide.
                        </p>
                      </div>
                    </div>
                  </div>
                
                  <!-- Carousel controls - prev item-->
                  <button
                    class="absolute bottom-0 left-0 top-0 z-[1] flex w-[15%] items-center justify-center border-0 bg-none p-0 text-center text-black opacity-50 transition-opacity duration-150 ease-[cubic-bezier(0.25,0.1,0.25,1.0)] hover:text-black hover:no-underline hover:opacity-90 hover:outline-none focus:text-black focus:no-underline focus:opacity-90 focus:outline-none motion-reduce:transition-none"
                    type="button"
                    data-te-target="#carouselDarkVariant"
                    data-te-slide="prev">
                    <span class="inline-block h-8 w-8 dark:grayscale">
                      <svg
                        xmlns="http://www.w3.org/2000/svg"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke-width="1.5"
                        stroke="currentColor"
                        class="h-6 w-6">
                        <path
                          stroke-linecap="round"
                          stroke-linejoin="round"
                          d="M15.75 19.5L8.25 12l7.5-7.5" />
                      </svg>
                    </span>
                    <span
                      class="!absolute !-m-px !h-px !w-px !overflow-hidden !whitespace-nowrap !border-0 !p-0 ![clip:rect(0,0,0,0)]"
                      >Previous</span
                    >
                  </button>
                  <!-- Carousel controls - next item-->
                  <button
                    class="absolute bottom-0 right-0 top-0 z-[1] flex w-[15%] items-center justify-center border-0 bg-none p-0 text-center text-black opacity-50 transition-opacity duration-150 ease-[cubic-bezier(0.25,0.1,0.25,1.0)] hover:text-black hover:no-underline hover:opacity-90 hover:outline-none focus:text-black focus:no-underline focus:opacity-90 focus:outline-none motion-reduce:transition-none"
                    type="button"
                    data-te-target="#carouselDarkVariant"
                    data-te-slide="next">
                    <span class="inline-block h-8 w-8 dark:grayscale">
                      <svg
                        xmlns="http://www.w3.org/2000/svg"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke-width="1.5"
                        stroke="currentColor"
                        class="h-6 w-6">
                        <path
                          stroke-linecap="round"
                          stroke-linejoin="round"
                          d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                      </svg>
                    </span>
                    <span
                      class="!absolute !-m-px !h-px !w-px !overflow-hidden !whitespace-nowrap !border-0 !p-0 ![clip:rect(0,0,0,0)]"
                      >Next</span
                    >
                  </button>
                </div>
                </blockquote>
                <figcaption class="mt-10">
                    {{-- <input class="w-auto" type="text"> --}}
                </figcaption>
            </figure>
        </div>
    </section>
    <div class="bg-white">
      <div class="w-full">
        <form action="{{ route('pharmacie.home') }}" method="GET" class="flex items-center border rounded-md w-1/2 mx-auto px-2 py-1 gap-2">
          <div class="flex flex-col w-2/5 border rounded-md p-1">
            <label for="ville">ville</label>
            <select name="ville"  class="outline-blue-500 rounded-md p-1 border border-gray-500">
              <option value="zagora"  @selected(request()->query('ville') == 'zagora' )>Zagora</option>
              <option value="ouarzazate" @selected(request()->query('ville') == 'ouarzazate' )>Ouarzazate</option>
              <option value="kallaat elmgouna" @selected(request()->query('ville') == 'kallaat elmgouna' )>Kallaat Elmagouna</option>
            </select>
          </div>
          <div class="flex flex-col w-2/5 border rounded-md p-1">
            <label for="semaine">Semaine premanent</label>
            <input value="{{ request()->query('semaine') }}" type="week" name="semaine" id="semaine" class=" outline-blue-500 rounded-md p-1 border border-gray-500">
          </div>
          <div class="p-3 bg-blue-600 h-full rounded-md text-white w-1/5 flex justify-center items-center">
            <button ><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
              <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
            </svg>
            </button>
          </div>
        </form>
      </div>
        <div class="mx-auto max-w-2xl px-4 py-16 sm:px-6 sm:py-24 lg:max-w-7xl lg:px-8">
          <h1 class="text-3xl font-semibold mb-8 text-center">Pharmacies</h1>
            <div class="mt-6 grid grid-cols-1 gap-x-6 gap-y-10 sm:grid-cols-2 lg:grid-cols-4 xl:gap-x-8">
                @forelse ($pharmacies as $pharmacie)
                  <x-pharmacie-card 
                    name="{{ $pharmacie->nom }}" 
                    imageSrc="{{ asset('storage/images/pharmacies/'.$pharmacie->photo_chemain) }}" 
                    address="{{ $pharmacie->adresse }}"
                    id="{{ $pharmacie->id }}"
                  />
                @empty
                  <p class="text-center w-full">
                    Non pharmacies pour affiche ...
                  </p>
                @endforelse
                <!-- More products... -->
            </div>
        </div>
    </div>

    @include('layouts.footer-client')

