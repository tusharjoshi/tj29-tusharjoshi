
<x-layout>
    <x-slot:title>About</x-slot>
    <!-- Post -->
    <article class="bg-gray-50 dark:bg-gray-900 pb-12 sm:pb-16 lg:pb-24">
        <!-- Post Header -->
        <header>
          <!-- Image -->
          <div class="aspect-h-2 aspect-w-3 w-full sm:aspect-h-1">
            <img
              src="images/post-header-image.jpeg"
              class="object-cover object-center"
            />
          </div>

          <!-- Post Header Content -->
          <div class="px-5 lg:px-0">
            <!-- Article Information -->
            <div
              class="mx-auto mb-8 max-w-prose border-b border-gray-300/70 pb-8 pt-10 text-lg sm:pt-16"
            >
              <a
                href="{{ url('/projects/technology')}}"
                class="transition-color relative text-sm font-medium uppercase tracking-widest text-red-700 dark:text-red-300 duration-300 ease-in-out hover:text-red-600 dark:hover:text-red-200"
                >{{ __('Technology') }}</a
              >

              <h2
                class="mt-3.5 text-4xl font-medium tracking-normal text-gray-900 decoration-red-300 decoration-3 transition duration-300 ease-in-out group-hover:underline sm:mt-5 sm:text-5xl sm:leading-tight md:tracking-tight lg:text-6xl"
              >
                Apple to Turn IPhones Into Payment Terminals in Fintech Push
              </h2>

              <div>
                <p class="mt-4 text-base leading-loose text-gray-600">
                  Apple Inc is introducing a new feature that will allow
                  businesses to accept credit card and digital payments with just
                  a tap on their iPhones, bypassing hardware systems such as Block
                  Inc's Square terminals.
                </p>
              </div>

              <!-- Author meta -->
              <div class="mt-6 flex items-center sm:mt-8">
                <a href="{{ url('/about') }}" class="mr-3 flex-shrink-0">
                  <div class="relative">
                    <img
                      class="h-8 w-8 rounded-xl object-cover object-center sm:h-9 sm:w-9"
                      src="images/author.jpeg"
                      alt=""
                    />
                    <span
                      class="absolute inset-0 rounded-xl shadow-inner"
                      aria-hidden="true"
                    ></span>
                  </div>
                </a>

                <div class="flex items-center text-sm lg:text-[15px]">
                  <span class="hidden text-gray-500 sm:inline-block"
                    >By&nbsp;</span
                  >
                  <a
                    class="font-medium text-gray-700 hover:underline"
                    href="{{ url('/about') }}"
                    >{{ __(config('info.sitename')) }}</a
                  >

                  <x-icons.calendar />
                  <span class="ml-1 text-gray-500">Nov 2, 2020</span>

                  <span class="hidden items-center sm:flex">
                    <x-icons.clock />
                    <span class="ml-1 text-gray-500">15 min read</span>
                  </span>
                </div>
              </div>
            </div>
          </div>
        </header>

        <div class="px-5 lg:px-0">
          <!-- Post Content -->
          <!-- Uses the official Tailwind CSS Typography plugin -->
          <div
            class="prose mx-auto sm:prose-lg first-letter:text-4xl first-letter:font-bold first-letter:tracking-[.15em] prose-a:transition prose-a:duration-300 prose-a:ease-in-out hover:prose-a:text-red-700 dark:text-red-300 prose-img:rounded-xl"
          >
            <p>
              Aliqua venenatis gravida et urna molestie leo adipiscing dolore leo
              euismod quam. Aenean porta curabitur convallis pellentesque velit
              platea at neque phasellus. Aliquet pellentesque senectus velit magna
              ultrices iaculis justo habitasse vitae neque ornare nullam leo. Est
              facilisis mauris purus senectus nunc convallis praesent pharetra
              dictum dui molestie iaculis.
            </p>
            <h2>An awesome heading</h2>
            <p>
              Lorem ipsum dolor sit amet aliqua enim hac. Diam eros adipiscing
              aliquam nisi do augue mattis sodales turpis lectus a. Curabitur
              nullam sodales phasellus donec nec pharetra quisque. Nec mi congue
              lobortis eget aliqua donec diam sollicitudin eu phasellus facilisi
              dictumst. Venenatis volutpat mi sodales facilisi quisque pulvinar
              luctus eros est malesuada risus porta sed id.
            </p>
            <p>
              Lorem ipsum dolor sit amet curabitur malesuada vel praesent magna
              tincidunt.
            </p>
            <figure>
              <img src="images/post-content-image.jpeg" />
              <figcaption>
                Lorem ipsum dolor sit amet fringilla consectetur netus
                ullamcorper.
              </figcaption>
            </figure>
            <p>
              Lorem ipsum dolor sit amet netus viverra neque quisque nisi mattis
              dapibus dictumst. Erat venenatis iaculis a tellus a auctor cursus
              morbi neque molestie incididunt faucibus.
            </p>
            <ul>
              <li>
                Urna magna mauris hendrerit molestie rhoncus enim magna tempor
                nisi.
              </li>
              <li>Lorem ipsum dolor sit amet tempus bibendum dolore ida.</li>
              <li>
                Eget consectetur orci sodales purus ac egestas consequat erat
                mattis mi sapien adipiscing hac.
              </li>
            </ul>
            <p>
              Lorem ipsum dolor sit amet lobortis risus nisi lacus quisque
              porttitor fermentum arcu adipiscing.
            </p>
            <p>
              Lorem ipsum dolor sit amet <strong>bold text</strong> quam luctus
              praesent id.Gravida donec morbi incididunt enim sed sollicitudin
              malesuada tempus.
            </p>
            <h2>Another awesome heading</h2>
            <h3>A Stacked heading</h3>
            <p>
              Lorem ipsum dolor sit amet dictumst in elit sagittis venenatis
              senectus. Non nisi tortor enim pharetra rhoncus velit mauris arcu
              senectus purus egestas urna sodales dolore. Egestas nisi turpis
              hendrerit vivamus risus habitasse tincidunt in est enim egestas
              dictumst sollicitudin.
            </p>
            <blockquote>
              <p>
                Lorem ipsum dolor sit pretium nullam diam facilisi. Lacus volutpat
                malesuada fusce quis est integer euismod cras est suspendisse
                facilisi morbi.
              </p>
            </blockquote>
            <p>
              Lorem ipsum dolor sit amet quis at praesent erat. Egestas justo ut
              tempus elementum aenean luctus <a href="#">an awesome link</a> fusce
              curabitur at malesuada.
            </p>
            <p>
              Lorem ipsum dolor sit amet fermentum eget porta. Semper auctor
              tellus laoreet ut vulputate ullamcorper fringilla gravida dictum.
              Malesuada arcu aliquet cras molestie viverra vulputate netus dolore
              aliquam dictum ornare ullamcorper. Erat pretium bibendum dolore quis
              dictum vivamus libero curabitur consequat donec. Netus rhoncus
              adipiscing netus non urna egestas mattis mollis nullam odio diam
              dolore aenean.
            </p>
            <p>
              Lorem ipsum dolor sit amet quis habitasse rhoncus ac lobortis
              sapien.
            </p>
            <ol>
              <li>Lorem ipsum dolor sit amet volutpat bibendum iaculis.</li>
              <li>
                Tortor porttitor elit nibh laoreet consectetur sodales imperdiet
                congue duis blandit tempor phasellus.
              </li>
              <li>
                Enim porta tincidunt non do gravida habitasse hendrerit convallis.
              </li>
            </ol>
            <p>
              Lorem ipsum dolor sit amet interdum incididunt tortor euismod
              porttitor. Pulvinar consequat semper urna arcu etiam facilisi
              elementum aenean dictumst aliquet urna elementum facilisi. Labore
              duis fusce facilisi justo aliqua dictum et suspendisse dui dictum
              integer. Elementum scelerisque posuere eleifend fermentum tempus
              mauris elit enim etiam massa ornare congue. Hac pretium elit aliquam
              augue dolore duis leo congue fringilla condimentum semper pretium
              incididunt.
            </p>
            <p>
              Est mattis enim eleifend donec erat eget tristique. Dictum habitasse
              duis elementum feugiat elit pretium nisl curabitur lacus risus.
              Condimentum vivamus hac vestibulum mauris aliquet massa ultrices
              molestie. Tempor ut blandit fermentum id nisi facilisi turpis non.
              Eleifend duis aliqua eu dapibus lacus consequat quam pulvinar et
              aliqua luctus fames feugiat.
            </p>
          </div>

          <!-- Post Footer -->
          <footer
            class="divide-y-gray-300/70 mx-auto mt-12 max-w-prose divide-y text-lg sm:mt-14"
          >
            <!-- Tags -->
            <ul class="-m-1 flex flex-wrap justify-start pb-8 sm:pb-10">
              <!-- Tag item -->
              <li>
                <a href="{{ url('/tag') }}">
                  <span
                    class="m-1 inline-flex items-center rounded-full border border-gray-300/70 bg-transparent px-4 py-1 text-sm font-medium text-gray-800 dark:text-gray-400 transition duration-300 ease-in-out hover:text-red-700 dark:text-red-300 sm:px-6 sm:py-2"
                  >
                    Trends
                  </span>
                </a>
              </li>

              <!-- Tag item -->
              <li>
                <a href="{{ url('/tag') }}">
                  <span
                    class="m-1 inline-flex items-center rounded-full border border-gray-300/70 bg-transparent px-4 py-1 text-sm font-medium text-gray-800 dark:text-gray-400 transition duration-300 ease-in-out hover:text-red-700 dark:text-red-300 sm:px-6 sm:py-2"
                  >
                    Tips
                  </span>
                </a>
              </li>

              <!-- Tag item -->
              <li>
                <a href="{{ url('/tag') }}">
                  <span
                    class="m-1 inline-flex items-center rounded-full border border-gray-300/70 bg-transparent px-4 py-1 text-sm font-medium text-gray-800 dark:text-gray-400 transition duration-300 ease-in-out hover:text-red-700 dark:text-red-300 sm:px-6 sm:py-2"
                  >
                    Lists
                  </span>
                </a>
              </li>

              <!-- Tag item -->
              <li>
                <a href="{{ url('/tag') }}">
                  <span
                    class="m-1 inline-flex items-center rounded-full border border-gray-300/70 bg-transparent px-4 py-1 text-sm font-medium text-gray-800 dark:text-gray-400 transition duration-300 ease-in-out hover:text-red-700 dark:text-red-300 sm:px-6 sm:py-2"
                  >
                    Lessons
                  </span>
                </a>
              </li>

              <!-- Tag item -->
              <li>
                <a href="{{ url('/tag') }}">
                  <span
                    class="m-1 inline-flex items-center rounded-full border border-gray-300/70 bg-transparent px-4 py-1 text-sm font-medium text-gray-800 dark:text-gray-400 transition duration-300 ease-in-out hover:text-red-700 dark:text-red-300 sm:px-6 sm:py-2"
                  >
                    Learnings
                  </span>
                </a>
              </li>
            </ul>

            <!-- Social Share Buttons -->
            <div class="py-8 sm:py-10">
              <div class="flex items-center justify-between">
                <span class="text-lg font-medium text-gray-900"> Share </span>

                <!-- Social Links -->
                <ul class="flex items-center space-x-3">
                    @foreach (config('info.sociallinks') as $link)
                    <li>
                        <a
                            href="{{ url($link['url'])}}" target="_blank"
                            class="group flex h-10 w-10 items-center justify-center rounded-full border border-gray-300/70 bg-transparent transition duration-300 ease-in-out sm:h-12 sm:w-12"
                        >
                            <x-dynamic-component :component="$link['name']" />
                        </a>
                    </li>
                    @endforeach
                </ul>
              </div>
            </div>

            <!-- Author Details -->
            <div class="py-8 sm:py-10">
              <div class="flex w-full items-center justify-between">
                <div class="flex flex-col sm:flex-row">
                  <!-- Image -->
                  <div class="flex-shrink-0">
                    <div class="relative w-fit">
                      <img
                        class="h-20 w-20 rounded-2xl object-cover object-center sm:h-24 sm:w-24"
                        src="images/author.jpeg"
                        alt=""
                      />
                      <span
                        class="absolute inset-0 rounded-2xl shadow-inner"
                        aria-hidden="true"
                      ></span>
                    </div>
                  </div>

                  <!-- Content -->
                  <div class="mt-5 text-left sm:ml-6 sm:mt-0">
                    <div class="flex items-center justify-between">
                      <div class="'flex flex-col">
                        <p class="text-xs uppercase tracking-widest text-red-600">
                            {{ __('About Author') }}
                        </p>
                        <h1
                          class="mt-1 text-xl font-medium tracking-normal text-gray-900 md:tracking-tight lg:leading-tight"
                        >
                          {{ __(config('info.sitename'))}}
                        </h1>
                      </div>
                    </div>

                    <p class="mt-2.5 text-base leading-loose text-gray-500">
                      Lorem ipsum dolor sit amet mauris quis phasellus ornare dui
                      lectus. Laoreet habitasse eiusmod nulla odio tortor neque
                      diam convallis morbi dolore molestie tellus faucibus
                      pharetra.
                    </p>

                    <!-- Author Social Links -->
                    <ul class="mt-3.5 flex items-center space-x-3">
                        @foreach (config('info.sociallinks') as $link)
                        <li>
                            <a href="{{ url($link['url'])}}" @if (!($loop->last)) class="group" @endif>
                            <x-dynamic-component :component="$link['name']" />
                            </a>
                        </li>
                    @endforeach
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </footer>
        </div>
      </article>
</x-layout>
