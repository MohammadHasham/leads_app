<!-- resources/views/insufficient_credits.blade.php -->

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Insufficient Credits
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-6">
                <p class="text-lg text-red-500 mb-4">Not enough credits. Please buy more credits.</p>
                <p class="text-sm">Your current credit balance: {{ $userCredits }}</p>
                <a href="{{ route('purchase.credits') }}" class="btn btn-primary mt-4">Buy Credits</a>

                <!-- Button to go back to the first page -->
                <button onclick="goToFirstPage()" class="btn btn-secondary mt-4">Go Back</button>
            </div>
        </div>
    </div>
</x-app-layout>

<script>
    // JavaScript function to navigate to the first page
    function goToFirstPage() {
        // Assuming your first page URL is '/leads/index', you can replace it with the correct URL
        window.location.href = '/leads';
    }
</script>

