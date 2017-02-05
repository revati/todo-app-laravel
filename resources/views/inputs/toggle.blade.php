<div class="checkbox {{ $errors->has($name) ? 'has-error' : '' }}">
    {{ Form::hidden($name, 0) }}
    <label>
        {{ Form::checkbox($name, $value, $checked) }}
        {{ $label }}
    </label>
    @if($errors->has($name))
        @foreach($errors->get($name) as $error)
            <span class="help-block">{{ $error }}</span>
        @endforeach
    @endif
</div>
