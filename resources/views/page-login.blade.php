@extends('layouts.app')
@section('content')
  <!-- FORM BLOCK -->
<section>
  <form id="form-login" class="max-w-sm mx-auto bg-primary p-6 rounded-xl shadow-md">
    <div class="mb-5">
      <label for="email" class="block mb-2 small-text text-primary font-semibold">Your email</label>
      <input 
        type="email" 
        id="email" 
        name="username"
        class="bg-secondary border border-accent text-primary small-text rounded-lg focus:ring-accent focus:border-accent block w-full p-3 transition" 
        placeholder="name@example.com" 
        required 
      />
    </div>
    <div class="mb-5">
      <label for="password" class="block mb-2 small-text text-primary font-semibold">Your password</label>
      <input 
        type="password" 
        id="password" 
        name="password"
        class="bg-secondary border border-accent text-primary small-text rounded-lg focus:ring-accent focus:border-accent block w-full p-3 transition" 
        required 
      />
    </div>
    <div class="flex items-start mb-5">
      <div class="flex items-center h-5">
        <input 
          id="remember" 
          type="checkbox" 
          class="w-4 h-4 text-accent bg-primary border border-accent rounded focus:ring-accent"
        />
      </div>
      <label for="remember" class="ms-2 small-text text-secondary">Remember me</label>
    </div>
    <button 
      type="submit" 
      class="w-full bg-accent bg-accent-hover text-white font-semibold py-2.5 px-5 rounded-lg transition focus:outline-none focus:ring-4 focus-ring-accent"
    >
      Submit
    </button>
  </form>
</section>
@endsection