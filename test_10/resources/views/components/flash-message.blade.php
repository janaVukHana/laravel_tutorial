@if (session('message'))
    <div x-data="{ show: true }" x-init="setTimeout(() => show = false, 3000)" x-show="show" class="bg-laravel text-white fixed top-0 left-1/2 transform -translate-x-1/2 py-2 px-24">
        {{request()->session()->get('message')}}
    </div>
@endif