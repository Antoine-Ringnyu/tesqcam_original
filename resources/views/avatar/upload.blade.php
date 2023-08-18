<!-- resources/views/avatar/upload.blade.php -->

<form action="{{ route('avatar.upload') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <input type="file" name="avatar">
    <button type="submit">Upload Avatar</button>
</form>


<!-- resources/views/home.blade.php -->

@if (auth()->user()->avatar)
    <img src="{{ auth()->user()->avatar_url }}" alt="User Avatar">
@else
    <p>No avatar uploaded.</p>
@endif
