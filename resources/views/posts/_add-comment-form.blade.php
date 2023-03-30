@auth
    <x-panel>
        <form action="/posts/{{ $post->slug }}/comments" method="POST">
            @csrf
            <header class="flex items-center">
                <img src="https://i.pravatar.cc/60?id={{ auth()->id() }}" alt="" width="60" height="60"
                    class="rounded-xl">

                <h2 class="ml-4">Want to participate?</h2>
            </header>
            <div class="mt-6">
                <textarea name="body" class="w-full text-sm focus:outline-none focus:ring" rows="5"
                    placeholder="Quick,think of something to say!" required></textarea>
                @error('body')
                    <span>{{ $message }}</span>
                @enderror
            </div>
            <div class="flex justify-end mt-10 border-t border-gray-200 pt-6">
                <x-form.button>Publish</x-form.button>
            </div>
        </form>
    </x-panel>
@else
    <p>
        <a href="/login">Log in to be able to comment</a>
    </p>

@endauth
