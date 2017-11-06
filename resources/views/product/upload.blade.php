@extends('app')

@section('title', 'Upload photo')

@section('content')
    <form action="san-pham" method="post" enctype="multipart/form-data">
        Select image to upload:
        <input type="file" name="fileToUpload" id="fileToUpload">
        <input type="submit" value="Upload Image" name="submit">
    </form>
@endsection