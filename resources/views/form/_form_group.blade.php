<div class="form-group {{ $errors->has($field) ? 'text-danger' : '' }}">
    {{ $slot }}
    @include('form._help_block')
</div>