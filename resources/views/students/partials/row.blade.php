<tr>
    <td>{{ $user->name }}</td>
    <td>{{ $user->email }}</td>
    <td>{{ $user->phone }}</td>
    <td>
        @if($user->photo_url)
            <img style="width: 50px;height: auto;" src="{{ url($user->photo_url) }}" alt="Student Photo">
        @endif
    </td>
</tr>