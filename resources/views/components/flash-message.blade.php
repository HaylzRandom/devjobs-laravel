@if (session()->has('message'))
    <div class="fixed top-0 left-1/2 -translate-x-1/2 transform rounded bg-primary px-48 py-3 text-center text-white sm:px-8 md:px-32"
        x-data="{ show: true }" x-init="setTimeout(() => show = false, 3000)" x-show="show">
        <p>
            {{ session('message') }}
        </p>
    </div>
@endif
