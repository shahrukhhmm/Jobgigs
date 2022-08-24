@props(['tagsCsv'])

@php
    $tags = explode(',',$tagsCsv);
@endphp

<ul class="gig-ul">
    @foreach ($tags as $tag)
    <li class="me-2 mt-4">
        <a class="gig-links" href="/?tag={{$tag}}">{{$tag}}</a>
    </li>
    @endforeach
</ul>