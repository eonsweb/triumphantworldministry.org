{{-- resources/views/prayer-request/prayer-request-form.blade.php --}}
<div class="max-w-3xl mx-auto py-12 px-4 sm:px-6 lg:px-8 font-inter">
    <div class="bg-whiterounded-2xl overflow-hidden">


        <div class="py-8 px-8">
            <!-- Success Message -->
            @if(session('success'))
            <div class="mb-6 p-4 bg-green-50 border border-green-200 rounded-xl"
                 x-data="{ show: true }"
                 x-show="show"
                 x-init="setTimeout(() => show = false, 5000)"
                 x-transition:enter="transition ease-out duration-300"
                 x-transition:enter-start="opacity-0 scale-90"
                 x-transition:enter-end="opacity-100 scale-100">
                <div class="flex items-start">
                    <svg class="h-6 w-6 text-green-500 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                    </svg>
                    <div>
                        <h3 class="font-medium text-green-800">Request Received</h3>
                        <p class="mt-1 text-green-700">{{ session('success') }}</p>
                    </div>
                </div>
            </div>
            @endif

            <form method="POST" action="{{ route('prayer-request-store') }}"
                  class="space-y-6"
                  x-data="{ isAnonymous: false }">
                @csrf



                <!-- Name Field (Conditional) -->
                <div x-show="!isAnonymous" x-transition>
                    <label class="block text-gray-700 font-medium mb-2">Your Name</label>
                    <input type="text" name="name"
                           class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary-500 focus:border-primary-500 transition"
                           placeholder="Enter your name"
                           :required="!isAnonymous"
                           value="{{ old('name') }}">
                    @error('name')
                        <p class="mt-1 text-red-600 text-sm">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Email Field -->
                <div>
                    <label class="block text-gray-700 font-medium mb-2">Email (Optional)</label>
                    <input type="email" name="email"
                           class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary-500 focus:border-primary-500 transition"
                           placeholder="your.email@example.com"
                           value="{{ old('email') }}">
                    @error('email')
                        <p class="mt-1 text-red-600 text-sm">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Prayer Request -->
                <div>
                    <label class="block text-gray-700 font-medium mb-2">Your Prayer Request *</label>
                    <textarea name="request" rows="5" required
                              class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary-500 focus:border-primary-500 transition"
                              placeholder="Please share your prayer need...">{{ old('request') }}</textarea>
                    @error('request')
                        <p class="mt-1 text-red-600 text-sm">{{ $message }}</p>
                    @enderror
                </div>



                <!-- Submit Button -->
                <button type="submit"
                        class="w-full bg-primary-700 hover:bg-primary-800 text-white font-bold py-4 px-6 rounded-lg transition duration-300 transform hover:scale-[1.02] focus:outline-none focus:ring-4 focus:ring-primary-500 focus:ring-opacity-50">
                    Submit Prayer Request
                    <svg class="w-4 h-4 inline ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h14M12 5l7 7-7 7"></path>
                    </svg>
                </button>
            </form>

            <div class="mt-8 pt-6 border-t border-gray-200 text-center">
                <p class="text-gray-600">
                    <svg class="w-5 h-5 inline mr-1 text-primary-500" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"/>
                    </svg>
                    All requests are reviewed by our church team before sharing
                </p>
            </div>
        </div>
    </div>
</div>
