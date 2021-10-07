<h1>Information about Company</h1>

<table>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Type</th>
        <th>Description</th>

    </tr>

     <tr>
            <td>{{ $company->id }}</td>
            <td>{{ $company->name }}</a></td>
            <td>{{ $company->type }}</td>
            <td>{{ $company->description }}</td>


            <td>
                <a href='{{route('company.edit',[$company])}}'>Edit</a>
                <form method='POST' action="{{route('company.destroy', [$company]) }}">

                @csrf
                <button type='submit'>Delete</button>

                </form>
            </td>
        </tr>

