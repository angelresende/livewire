<div>
    <h1>Show Tweets</h1>

    <p>{{ $content }}</p>

    <form method="post" wire:submit.prevent='create'>
        <input  type="text" name="context" id="content" wire:model="content"/>
        @error('content')
            {{ $message }}
        @enderror
        <button type="submit">Criar</button>
    </form>

    <hr>

    @foreach ($tweets as $tweet)

    {{ $tweet->user->name }} - {{ $tweet->content }} <br>

    @endforeach
</div>
