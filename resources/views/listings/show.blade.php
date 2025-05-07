<x-layout>
  <a 
    href="/" 
    class="inline-block text-gray-600 hover:text-gray-900 transition-colors duration-200 ml-4 mb-4"
  >
    <i class="fa-solid fa-arrow-left"></i> Back
  </a>

  <div class="max-w-3xl mx-auto px-4">
    <x-card class="p-8 shadow-md rounded-xl">
      <div class="flex flex-col items-center text-center">
        <img 
          class="w-40 h-40 object-contain mb-6 rounded-lg border border-gray-200 shadow-sm" 
          src="{{ $listing->logo ? asset('storage/' . $listing->logo) : asset('/images/no-image.png') }}" 
          alt="Company Logo" 
        />

        <h3 class="text-3xl font-semibold text-gray-800 mb-2">
          {{ $listing->title }}
        </h3>
        <div class="text-xl text-gray-600 font-medium mb-4">
          {{ $listing->company }}
        </div>

        <x-listing-tags :tagsCsv="$listing->tags" />

        <div class="text-lg text-gray-500 flex items-center gap-2 mt-4 mb-6">
          <i class="fa-solid fa-location-dot text-red-500"></i>
          <span>{{ $listing->location }}</span>
        </div>

        <div class="w-full border-t border-gray-300 mb-6"></div>

        <div class="w-full text-left">
          <h3 class="text-2xl font-bold text-gray-800 mb-4">Job Description</h3>
          <p class="text-gray-700 leading-relaxed whitespace-pre-line mb-6">
            {{ $listing->description }}
          </p>

          <a 
            href="mailto:{{ $listing->email }}" 
            class="block w-full sm:w-auto bg-red-600 text-white py-3 px-6 rounded-lg mb-4 sm:mb-0 hover:bg-red-700 transition-colors duration-200"
          >
            <i class="fa-solid fa-envelope mr-2"></i> Contact Employer
          </a>

          <a 
  href="{{ Str::startsWith($listing->website, ['http://', 'https://']) ? $listing->website : 'https://' . $listing->website }}" 
  target="_blank" 
  class="block w-full sm:w-auto bg-gray-800 text-white py-3 px-6 rounded-lg hover:bg-gray-900 transition-colors duration-200"
>
  <i class="fa-solid fa-globe mr-2"></i> Visit Website
</a>

        </div>
      </div>
    </x-card>

    {{-- 
    <x-card class="mt-4 p-2 flex space-x-6">
      <a href="/listings/{{ $listing->id }}/edit" class="text-blue-600 hover:text-blue-800 transition-colors duration-200">
        <i class="fa-solid fa-pencil"></i> Edit
      </a>

      <form method="POST" action="/listings/{{ $listing->id }}">
        @csrf
        @method('DELETE')
        <button class="text-red-600 hover:text-red-800 transition-colors duration-200">
          <i class="fa-solid fa-trash"></i> Delete
        </button>
      </form>
    </x-card>
    --}}
  </div>
</x-layout>
