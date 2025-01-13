<div class="container mx-auto px-4 lg:px-8 py-24">
  <div class="flex flex-col md:flex-row md:flex-wrap">
    <div class="w-full mb-8 md:mb-10 md:w-1/2 lg:w-1/4">
      <span class="inline-block text-white text-2xl font-serif mb-4">Navigatie</span>
      <ul>

      @foreach ($mainMenuItems as $page)

        @if ((int) Route::current()->getName() === $page->id)
          <li class="my-2">
            <a href="{{ route($page->id) }}" title="{{ $page->title }}"
               class="text-white text-base font-sans font-bold hover:text-opacity-50 underline">
              {{ $page->name }}
            </a>
          </li>
        @else
          <li class="my-2">
            <a href="{{ route($page->id) }}" title="{{ $page->title }}"
               class="text-white text-base font-sans font-bold hover:text-opacity-50">
              {{ $page->name }}
            </a>
          </li>
        @endif
      @endforeach

      </ul>
    </div>
    <div class="w-full mb-8 md:mb-10 md:w-1/2 lg:w-1/4">
      {{-- <span class="inline-block text-white text-2xl font-serif mb-4">Laatste nieuws</span>
      <ul>
        <li class="my-2">
          <a href="#"
             class="inline-block w-4/5 truncate text-white text-base font-sans font-bold hover:text-opacity-50">
            Gemeentelijke binnensportaccomodaties gesloten t/m 31-08-2020
          </a>
        </li>
        <li class="my-2">
          <a href="#" class="inline-block w-4/5 truncate text-white text-base font-sans font-bold hover:text-opacity-50">
            Competitie najaar 2020
          </a>
        </li>
      </ul> --}}

{{--      <span class="inline-block text-white text-2xl font-serif mb-4 mt-6">Evenementen</span>--}}
{{--      <ul>--}}
{{--        <li class="my-2">--}}
{{--          <a href="#"--}}
{{--             class="inline-block w-4/5 truncate text-white text-base font-sans font-bold hover:text-opacity-50">--}}
{{--            Gemeentelijke binnensportaccomodaties gesloten t/m 31-08-2020--}}
{{--          </a>--}}
{{--        </li>--}}
{{--        <li class="my-2">--}}
{{--          <a href="#" class="inline-block w-4/5 truncate text-white text-base font-sans font-bold hover:text-opacity-50">--}}
{{--            Competitie najaar 2020--}}
{{--          </a>--}}
{{--        </li>--}}
{{--      </ul>--}}

    </div>
    <div class="w-full mb-8 md:mb-0 md:w-1/2 lg:w-1/4">
     <span class="inline-block text-white text-2xl font-serif mb-4">Documenten</span>
     <ul>
{{--       <li class="my-2">--}}
{{--         <a href="{{ url('/documents/Merwestad-inschrijvingsformulier-2020.docx') }}" target="_blank" class="inline-block w-4/5 truncate text-white text-base font-sans font-bold hover:text-opacity-50">--}}
{{--           Inschrijvingsformulier--}}
{{--         </a>--}}
{{--       </li>--}}
{{--       <li class="my-2">--}}
{{--         <a href="{{ url('/documents/Merwestad-aanmeldingshulp-2020.docx') }}" target="_blank" class="inline-block w-4/5 truncate text-white text-base font-sans font-bold hover:text-opacity-50">--}}
{{--           Aanmeldingshulp document--}}
{{--         </a>--}}
{{--       </li>--}}
       <li class="my-2">
         <a href="{{ url('/documents/Mer2018-05-23-Privacy-Policy.pdf') }}" target="_blank" class="inline-block w-4/5 truncate text-white text-base font-sans font-bold hover:text-opacity-50">
           Privacyverklaring
         </a>
       </li>
       <li class="my-2">
         <a href="{{ url('/documents/Mer2017-05-01-Huishoudelijk-reglement-ttv-Merwestad-update-2017.pdf') }}" target="_blank" class="inline-block w-4/5 truncate text-white text-base font-sans font-bold hover:text-opacity-50">
           Huishoudelijk reglement
         </a>
       </li>
     </ul>
    </div>
    <div class="w-full md:w-1/2 lg:w-1/4">
      <span class="inline-block text-white text-2xl font-serif mb-4">Locatie</span>
      <span class="block text-base font-sans text-white">{{ Setting::get('address') }}</span>
      <span class="block text-base font-sans text-white">{{ Setting::get('zipcode') }}, {{ Setting::get('residence') }}</span>
      <br />
      <a href="mailto:info@ttvmerwestad.nl"
         class="block text-base font-sans text-white underline">
        info@ttvmerwestad.nl
      </a>
      <br />
      <span class="block text-white text-2xl font-serif mb-4">Openingstijden</span>
      <span class="inline-block w-24 text-base font-sans text-white">Dinsdag</span>
      <span class="inline-block text-base font-sans text-white">19:30 tot 22:00</span><br />
      <span class="inline-block w-24 text-base font-sans text-white">Donderdag</span>
      <span class="inline-block text-base font-sans text-white">19:30 tot 22:00</span><br />
    </div>
  </div>
</div>
