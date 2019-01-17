<tr>
    <td>{{ $student->name }}</td>
    <td>{{ $student->email }}</td>
    <td>{{ $student->phone }}</td>
    <td>
        @if($student->photo_url)
            <img style="width: 50px;height: auto;" src="{{ url($student->photo_url) }}" alt="Student Photo">
        @endif
    </td>
    <td>
        @can('update',$student)
        <a href="{{ route('students.edit',$student->id) }}">Edit</a>
        @endcan
    </td>
</tr>