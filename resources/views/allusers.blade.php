@foreach ($users as $user)
    <p>This is user {{ $user->name }}
        (
            <a href="mailto:{{ $user->email }}">{{ $user->email }}</a>
        )
    </p>
@endforeach
