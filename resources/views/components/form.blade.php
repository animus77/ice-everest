<div>
    <label for="{{ $for }}">{{ $title }}</label>
    <input id="{{ $for }}" {{ $attributes->merge(
        ['type' => 'text'], ['name' => ''], ['min' => ''], ['value' => '']
        )}}>
    </input>
    <span>{{ $slot }}</span>

</div>