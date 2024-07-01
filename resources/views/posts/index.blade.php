<x-layout>
    @auth
    <h1>Your are Logged In</h1>
    @endauth

    @guest
        <h1>Welcome Guest</h1>
    @endguest
</x-layout>
