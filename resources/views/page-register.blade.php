@extends('layouts.app')
@section('content')
<form id="form-register" class="max-w-sm mx-auto">
    <h2 class="hero-text text-primary text-center font-bold pt-4 pb-8">SIGN UP</h2>
    <div class="mb-5">
        <label for="email" class="block mb-2 small-text text-primary font-semibold">Your email</label>
        <input type="email" id="email" name="email"
            class="bg-secondary border border-accent text-primary small-text rounded-lg focus:ring-accent focus:border-accent block w-full p-3 transition"
            placeholder="email" required />
    </div>
    <div class="mb-5">
        <label for="email" class="block mb-2 small-text text-primary font-semibold">Your password</label>
        <input type="password" id="password" name="password" placeholder="Password"
            class="bg-secondary border border-accent text-primary small-text rounded-lg focus:ring-accent focus:border-accent block w-full p-3 transition"
            required />
    </div>
    <div class="mb-5">
        <label for="email" class="block mb-2 small-text text-primary font-semibold">Repeat password</label>
        <input type="password" id="password_confirmation" name="password_confirmation" placeholder="Repeat Password"
            class="bg-secondary border border-accent text-primary small-text rounded-lg focus:ring-accent focus:border-accent block w-full p-3 transition"
            required />
    </div>
    <div class="flex items-start mb-5">
        <div class="flex items-center h-5">
            <input id="terms" type="checkbox" name="terms" value=""
                class="w-4 h-4 border border-gray-300 rounded-sm bg-gray-50 focus:ring-3 focus:ring-blue-300  dark:focus:ring-blue-600"
                required />
        </div>
        <label for="terms" class="ms-2 text-sm font-medium text-gray-900 ">I agree with the <a href="#"
                class="text-blue-600 hover:underline dark:text-blue-500">terms and conditions</a></label>
    </div>
    <button type="submit"
        class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Register
        new account</button>
</form>

@endsection
@push('scripts')
  @vite(['resources/js/register.js'])
@endpush