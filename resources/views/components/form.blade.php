<div class="{{ $div }}">
    <label class="font-semibold mr-2" for="{{ $for }}">{{ $title }}</label>
    <input class="bg-gray-400 p-1 outline-none {{ $sizes }}" id="{{ $for }}" {{ $attributes->merge(
        ['type' => 'text'], ['name' => ''], ['min' => ''], ['value' => '']
        )}}>
    </input>
</div>