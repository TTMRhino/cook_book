@extends('layouts.admin_layout')

@section('title', 'Рецепты')

@section('content')


<div id="summernote">Hello Summernote</div>


<script>
    $(document).ready(function() {
        $('#summernote').summernote();
    });
</script>

@endsection