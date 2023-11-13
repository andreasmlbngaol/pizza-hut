<table>
    <thead>
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>Position</th>
            <th>Outlet</th>
            <th>Area</th>
            <th>District</th>
        </tr>
    </thead>
    <tbody>
@foreach ($employees as $employee)
<tr>
    <td>{{ $loop->iteration }}</td>
    <td>{{ $employee->name }}</td>
    <td>{{ $employee->position->name }}</td>
    <td>{{ $employee->outlet->name }}</td>
    <td>{{ $employee->outlet->area->name }}</td>
    <td>{{ $employee->outlet->area->district->name }}</td>
</tr>
@endforeach
</tbody>
</table>