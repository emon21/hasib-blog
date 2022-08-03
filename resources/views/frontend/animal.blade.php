@foreach ($animals as $list)
    {{ $list->body_parts->id }}
@endforeach
