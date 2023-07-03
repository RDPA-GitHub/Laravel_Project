<x-layouts.app :title="$perrito->title">

<h1 style="text-align:center; color:gray; font-family:'Courier New', Courier, monospace; margin-top:28px">
  {{$perrito->title}}
</h1>
<h3>{{$perrito->body}}</h3>

<a href="{{route('posts.index')}}" style="text-decoration: none; color: red; font-weight:bold; margin-left: 2rem">Regresar</a>

</x-layouts.app>