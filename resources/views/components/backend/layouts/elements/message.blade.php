@props(['message'])

@if ($message)
<div class="alert alert-success">
    <span class="close" data-dismiss="alert">&times;</span>
    <strong>{{ $message }}.</strong>
</div>
@endif