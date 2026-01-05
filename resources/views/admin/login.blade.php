@extends('layouts.app')

@section('content')
<section class="min-h-screen flex items-center justify-center bg-dark-primary">
    <div class="max-w-md w-full">
        <div class="bg-dark-tertiary rounded-2xl p-8 border border-gray-800/50 shadow-xl">

            <!-- Title -->
            <div class="text-center mb-8">
                <h1 class="text-2xl font-bold text-white">Admin Login</h1>
                <p class="text-gray-400 mt-2">Access your portfolio dashboard</p>
            </div>

            <!-- Error Message -->
            @if(session('error'))
                <div class="bg-red-500/20 border border-red-500/50 text-red-300 px-4 py-3 rounded-lg mb-6">
                    {{ session('error') }}
                </div>
            @endif

            <!-- Login Form -->
            <form method="POST" action="{{ route('admin.login.submit') }}">
                @csrf

                <div class="space-y-4">

                    <!-- Email -->
                    <div>
                        <label for="email" class="block text-sm font-medium text-gray-300 mb-2">
                            Email
                        </label>

                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 flex items-center pl-4 pointer-events-none">
                                <!-- Email Icon -->
                                <svg class="w-5 h-5 text-gray-500" fill="none" stroke="currentColor" stroke-width="1.5"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M21.75 6.75v10.5A2.25 2.25 0 0119.5 19.5h-15A2.25 2.25 0 012.25 17.25V6.75
                                           m19.5 0A2.25 2.25 0 0019.5 4.5h-15A2.25 2.25 0 002.25 6.75
                                           m19.5 0l-9.75 6.75L2.25 6.75" />
                                </svg>
                            </div>

                            <input
                                type="email"
                                id="email"
                                name="email"
                                required
                                class="w-full pl-12 pr-4 py-3 bg-dark-secondary border border-gray-700 rounded-xl
                                       focus:ring-2 focus:ring-navy-500 focus:border-navy-500
                                       transition-all duration-300 text-white placeholder-gray-500"
                                placeholder="Email"
                            >
                        </div>
                    </div>

                    <!-- Password -->
                    <div>
                        <label for="password" class="block text-sm font-medium text-gray-300 mb-2">
                            Password
                        </label>

                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 flex items-center pl-4 pointer-events-none">
                                <!-- Lock Icon -->
                                <svg class="w-5 h-5 text-gray-500" fill="none" stroke="currentColor" stroke-width="1.5"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M16.5 10.5V7.875a4.125 4.125 0 10-8.25 0V10.5
                                           m-.75 0h9a1.5 1.5 0 011.5 1.5v6
                                           a1.5 1.5 0 01-1.5 1.5h-9
                                           A1.5 1.5 0 015.25 18v-6
                                           a1.5 1.5 0 011.5-1.5z" />
                                </svg>
                            </div>

                            <input
                                type="password"
                                id="password"
                                name="password"
                                required
                                class="w-full pl-12 pr-4 py-3 bg-dark-secondary border border-gray-700 rounded-xl
                                       focus:ring-2 focus:ring-navy-500 focus:border-navy-500
                                       transition-all duration-300 text-white placeholder-gray-500"
                                placeholder="Enter your password"
                            >
                        </div>
                    </div>

                    <!-- Button -->
                    <button
                        type="submit"
                        class="w-full px-6 py-3 bg-navy-600 text-white rounded-xl font-medium
                               hover:bg-navy-700 transition-all duration-300
                               transform hover:-translate-y-1
                               shadow-lg shadow-navy-500/25
                               border border-navy-500/30">
                        Login
                    </button>

                </div>
            </form>

            <!-- Back Link -->
            <div class="mt-6 text-center">
                <a href="{{ route('home') }}"
                   class="text-navy-400 hover:text-navy-300 transition-colors">
                    ← Back to Portfolio
                </a>
            </div>
        </div>
    </div>
</section>
@endsection
