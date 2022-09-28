@extends ('layout')
@section('content')
<div> class="container mt-5">
    <div> class="alert alert-info" role="alert">
        * Catatan :
        <ul>
            <li>Silahkan upload file dalam bentuk gambar.</li>
            <li>Silahkan upload file gambar dengan ukuran maksimal 2MB.</li>
        </ul>
    </div>
    <form enctype="multipart/form-data" method="POST" action="{{ url('post/upload') }}">
        @scrf
        <div class="row mb-3">
            <label for="inputEmail"> class="col-sm-12 col-form-label">Silahkan masukan gambar</label>
            <div class="col-sm-12"> 
                <input type="file" class="form-control {{ $errors->has('gambar')?'is-invalid':''}}" id="gambar" name="gambar">
                @if($errors->has('gambar'))
                <div id="validationServer03Feedback" class="invalid-feedback ">
                    {{$errors->first('gambar')}}
                </div>  
                @endif
                </div>
            </div>
            <button type="submit class="btn btn-primary>Upload Gambar</button>~~`~~
        </form> 
        </div>
@endsection
