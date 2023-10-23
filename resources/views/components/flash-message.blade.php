@if(session()->has('message'))

<div x-data="{show: true}" x-transition x-init="setTimeout(() => show = false, 3000)" x-show="show" class="fixed top-0 bg-laravel text-white px-48 py-3 z-0">
    <p> {{ session('message') }}</p>
</div>

@endif