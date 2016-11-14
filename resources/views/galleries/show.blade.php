@extends("layouts.application_gallery")
@section("content")
  <article class="row">
    <h2>{!! $gallery->title !!}</h2>
    <img src="{{ asset('/upload_image/'.$gallery->id.'/'.$gallery->url) }}"/>
  </article>
  <div>
  {!! Form::open(array('route' => array('galleries.destroy', $gallery->id), 'method' => 'delete')) !!}
    {!! link_to(route('galleries.index'), "Back", ['class' => 'btn btn-raised btn-info']) !!}
   {!! link_to(route('galleries.edit', $gallery->id), 'Edit', ['class' => 'btn btn-raised btn-warning']) !!}
   {!! Form::submit('Delete', array('class' => 'btn btn-raised btn-danger', "onclick" => "return confirm('are you sure?')")) !!}
  {!! Form::close() !!}
  </div>
@stop