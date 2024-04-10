@extends('../layouts')

@section('content')
    <section class="bg-zinc-100 w-full min-h-screen flex ">

        <form class="card p-10 shadow bg-white card-bordered mx-auto my-auto " action="{{ route('login') }}" method="POST">
            <h1 class="text-lg font-bold mb-5">Login to your account</h1>
            @csrf <!-- {{ csrf_field() }} -->
            <label  for="email">Email</label>
            <input class="input border border-accent"  type="email" name="email" id="email">
            <label for="password">Password</label>
            <input class="input border border-accent" type="password" name="password" id="password">
            <button class="btn btn-active my-2" type="submit">Login</button>
        </form>
    </section>

@endsection
