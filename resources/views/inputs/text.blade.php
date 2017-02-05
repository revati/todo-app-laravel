<div class="form-group {{ $errors->has($name) ? 'has-error' : '' }}">
    {{ Form::label($name, $label, ['class' => 'control-label']) }}
    {{ Form::text($name, $value, array_merge(['class' => 'form-control'], $attributes)) }}
    @if($errors->has($name))
        @foreach($errors->get($name) as $error)
            <span class="help-block">{{ $error }}</span>
        @endforeach
    @endif
</div>
