<div>
    <ul>
        @foreach($users as $user)
        <li>{{ fullName($user->id) }}</li>
        @endforeach
    </ul>
</div>
