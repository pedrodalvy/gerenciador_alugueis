@if ($errors->has($field))
    <span class="small">{{ $errors->first($field) }}</span>
@endif