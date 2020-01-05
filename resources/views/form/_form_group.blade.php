<div class="form-group {{ $errors->has($field) ? 'text-danger' : '' }}">
    {{ $slot }}
</div>