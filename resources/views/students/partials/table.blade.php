<table class="table table-bordered">
    <tr>
        <td>Name</td>
        <td>Email</td>
        <td>Phone</td>
        <td>Photo</td>
        <td>Action</td>
    </tr>
    @foreach($students as $student)
        @include('students.partials.row')
    @endforeach
</table>