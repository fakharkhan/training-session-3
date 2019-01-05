<table class="table table-bordered">
    <tr>
        <td>Name</td>
        <td>Email</td>
        <td>Phone</td>
    </tr>
    @foreach($users as $user)
        @include('students.partials.row')
    @endforeach
</table>