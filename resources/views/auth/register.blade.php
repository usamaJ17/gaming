<x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Username')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
            <p class="mt-2 text-gray-500 text-sm">Username should be your platform ID.</p>
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>
        <div class="mt-4">
            <x-input-label for="dob" :value="__('Date of Birth')" />
            <input id="dob" class="block mt-1 w-full bg-gray-900 text-white p-2 rounded-md flatpicker" type="text" name="dob" :value="old('dob')" required autocomplete="bday" />
            <x-input-error :messages="$errors->get('dob')" class="mt-2" />
        </div>
        <!-- Platform -->
        <div class="mt-4">
            <x-input-label for="platform" :value="__('Platform')" />
            <x-select-input id="platform" class="block mt-1 w-full" name="platform" :options="$selectOptions" :disabled="0" :selected="old('platform')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('platform')" class="mt-2" />
        </div>       
        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>
        <!-- Terms of Service Checkbox -->
        <div class="mt-4">
            <label for="agree_terms" class="flex items-center">
                <input id="agree_terms" type="checkbox" name="agree_terms" {{ old('agree_terms') ? 'checked' : '' }} required />
                <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">Do you agree with the terms of service.</span>
            </label>
            <x-input-error :messages="$errors->get('agree_terms')" class="mt-2" />
        </div>
        <br>
        {!! htmlFormSnippet([
            "theme" => "dark",
            "size" => "small",
        ]) !!}
        <x-input-error :messages="$errors->get('g-recaptcha-response')" class="mt-2" />

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>
        
            <x-primary-button id="registerButton" class="ms-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>

<script>
    // Get the checkbox element
    const agreeTermsCheckbox = document.getElementById('agree_terms');
    
    // Get the submit button element
    const registerButton = document.getElementById('registerButton');
    registerButton.addEventListener('click', function () {
        // Check if the checkbox is checked
        if (!agreeTermsCheckbox.checked) {
            Swal.fire({
                icon: "error",
                title: "Oops...",
                text: "Please Agree to our terms of service.",
            });
            event.preventDefault();
        }
    });
    
    // // Add an event listener to the checkbox
    // agreeTermsCheckbox.addEventListener('change', function () {
    //     // Enable or disable the submit button based on the checkbox state
    //     registerButton.disabled = !this.checked;
    // });
</script>