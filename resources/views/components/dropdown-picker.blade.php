<div>
    <select {{ $attributes }}>
        @foreach($options as $key => $option)
            <option value="{{ $key }}" @if($key == $selectedOption) selected @endif>{{ $option }}</option>
        @endforeach
    </select>
</div>
