<div class="checkbox">
    {{ Form::hidden($name, 0) }}
    <label>
        {{ Form::checkbox($name, $value, $checked) }}
        {{ $label }}
    </label>
</div>
