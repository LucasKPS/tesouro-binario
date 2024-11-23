@if (session()->has('success'))
    <div>
        <p style="color: green;">{{ session('success') }}</p>
    </div>
@endif

@if (session()->has('error'))
    <p style="color: red; text-align:center">{{ session('error') }}</p>
@endif

@if ($errors->any())
    @foreach ($errors->all() as $error)
        <p style="color: red; text-align:center">{{ $error }}</p>
    @endforeach
@endif
