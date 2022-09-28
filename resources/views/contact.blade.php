@extends('layout')
@section('content')
    <div class="contact">
        <div class="contact-top">
            <form action="{{ route('contact/submit') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Your Email</label>
                    <div class="input-box">
                        <input type="email" name="email" class="form-control  @error('email') border-danger @enderror"
                            id="exampleFormControlInput1" placeholder="name@example.com">
                        @error('email')
                            <div class="unvalidated">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label  ">Your Message</label>
                    <div class="input-box">
                        <textarea name="message" class="form-control  @error('email') border-danger @enderror" id="exampleFormControlTextarea1"
                            rows="3"></textarea>
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
                        <th scope="col">Email</th>
                        <th scope="col">Message</th>

                    </tr>
                </thead>
                <tbody>
                    @foreach ($contact as $c)
                        <tr>
                            <th scope="row"> {{ $c->id }} </th>
                            <td>{{ $c->email }}</td>
                            <td>{{ $c->message }}</td>
                            <td class="table-action">
                                <a href="">
                                    <div class="btn btn-success">edit</div>
                                </a>
                                <a href="/contact/delete/{{ $c->id }}">
                                    <div class="btn btn-danger">Hapus</div>
                                </a>
                            </td>
                        </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>

    
@endsection
