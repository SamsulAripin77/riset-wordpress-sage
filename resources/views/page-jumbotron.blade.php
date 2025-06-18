
@extends('layouts.app')
@section('content')
<!-- FORM BLOCK -->
<section>
  <form class="max-w-sm mx-auto bg-primary p-6 rounded-xl shadow-md">
    <div class="mb-5">
      <label for="email" class="block mb-2 small-text text-primary font-semibold">Your email</label>
      <input 
        type="email" 
        id="email" 
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


<!-- HERO SECTION -->
<section class="bg-secondary py-20">
  <div class="max-w-6xl mx-auto px-6 flex flex-col md:flex-row items-center justify-between gap-10">
    <div class="max-w-xl">
      <h1 class="hero-text font-bold text-primary leading-tight mb-6">
        Powering human connection through an AI-first work platform
      </h1>
      <p class="lead-text text-secondary mb-8">
        Make virtual meetings more impactful with an AI-first platform. Zoom Workplace helps you connect, collaborate, and complete projects faster.
      </p>
      <div class="flex flex-wrap gap-4">
        <a href="#" class="inline-block bg-accent text-white px-6 py-3 rounded-full font-semibold shadow bg-accent-hover transition">
          Explore products
        </a>
        <a href="#" class="inline-block text-accent font-semibold px-6 py-3 hover:underline">
          Contact sales
        </a>
      </div>
    </div>
    <div class="hidden md:block">
      <img src="/your-right-image-or-icons.svg" alt="Decorative" class="max-w-xs" />
    </div>
  </div>
</section>

<!-- FEATURES SECTION -->
<section class="bg-primary py-16">
  <div class="max-w-7xl mx-auto px-6">
    <div class="grid md:grid-cols-3 gap-8 text-left">
      <!-- Card 1 -->
      <div class="space-y-4">
        <div class="flex items-center space-x-2">
          <div class="bg-blue-100 p-2 rounded-full">
            <img src="/icons/video-icon.svg" alt="Meetings" class="h-6 w-6" />
          </div>
          <h3 class="small-text font-semibold text-primary">Meetings</h3>
        </div>
        <h4 class="title-text font-bold text-primary">
          Bring teams together with video conferencing
        </h4>
        <p class="small-text text-secondary">
          Connect, collaborate, and get more done together with trusted video meetings.
        </p>
        <a href="#" class="text-accent small-text font-medium hover:underline">Learn more</a>
      </div>

      <!-- Card 2 -->
      <div class="space-y-4">
        <div class="flex items-center space-x-2">
          <div class="bg-purple-100 p-2 rounded-full">
            <img src="/icons/ai-icon.svg" alt="AI Companion" class="h-6 w-6" />
          </div>
          <h3 class="small-text font-semibold text-primary">AI Companion</h3>
        </div>
        <h4 class="title-text font-bold text-primary">
          Get time back with an AI assistant
        </h4>
        <p class="small-text text-secondary">
          Increase productivity, improve team effectiveness, and enhance skills.
        </p>
        <a href="#" class="text-accent small-text font-medium hover:underline">Learn more</a>
      </div>

      <!-- Card 3 -->
      <div class="space-y-4">
        <div class="flex items-center space-x-2">
          <div class="bg-blue-100 p-2 rounded-full">
            <img src="/icons/chat-icon.svg" alt="Team Chat" class="h-6 w-6" />
          </div>
          <h3 class="small-text font-semibold text-primary">Team Chat</h3>
        </div>
        <h4 class="title-text font-bold text-primary">
          Streamline communication with Team Chat
        </h4>
        <p class="small-text text-secondary">
          Connect your teams and streamline communications with instant messaging.
        </p>
        <a href="#" class="text-accent small-text font-medium hover:underline">Learn more</a>
      </div>
    </div>

    <!-- CTA Button -->
    <div class="mt-12 text-center">
      <a href="#" class="inline-block bg-accent bg-accent-hover text-white main-text font-semibold px-6 py-3 rounded-full shadow">
        Learn more about Zoom Workplace
      </a>
    </div>
  </div>
</section>

<hr>


@endsection
