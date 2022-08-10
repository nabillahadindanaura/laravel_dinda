@extends('layout')
@section("content")
<div class="contact">
  <div class="contact-top">
    <form action="{{ route('contact/submit') }}" method="POST">
      @csrf
      <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Email address</label>
        <div class="input-box">
          <input type="email" name="email" class="form-control  @error('email') border-danger @enderror" id="exampleFormControlInput1" placeholder="name@example.com">
          @error('email')
          <div class="unvalidated">
            {{$message}}
          </div>
          @enderror
        </div>
      </div>
      <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label  ">Example textarea</label>
        <div class="input-box">
          <textarea name="message" class="form-control  @error('email') border-danger @enderror" id="exampleFormControlTextarea1" rows="3"></textarea>
          @error('message')
          <div class="unvalidated">
            {{ $message }}
          </div>
          @enderror
        </div>
      </div>
      <div class="d-grid">
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </form>
  </div>
  <div class="contact-bottom">
    <table class="table table-striped">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">First</th>
          <th scope="col">Last</th>
          <th scope="col">Handle</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th scope="row">1</th>
          <td>Mark</td>
          <td>Otto</td>
          <td>@mdo</td>
        </tr>
        <tr>
          <th scope="row">2</th>
          <td>Jacob</td>
          <td>Thornton</td>
          <td>@fat</td>
        </tr>
        <tr>
          <th scope="row">3</th>
          <td colspan="2">Larry the Bird</td>
          <td>@twitter</td>
        </tr>
      </tbody>
    </table>
  </div>
</div>
@endsection