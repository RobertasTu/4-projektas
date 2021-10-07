
<h1>Information about Client</h1>
<table>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Surname</th>
        <th>Username</th>
        <th>Company_id</th>
        <th>Image</th>
    </tr>



        <tr>
            <td>{{ $client->id }}</td>

            <td>{{ $client->name }}</td>
            <td>{{ $client->surname }}</td>
            <td>{{ $client->username }}</td>
            <td>{{ $client->company_id }}</td>
            <td>{{ $client->image_url }}</td>

            <td>
                <a href='{{route('client.edit',[$client])}}'>Edit</a>
                <form method='POST' action="{{route('client.destroy', [$client]) }}">

                @csrf
                <button type='submit'>Delete</button>

                </form>
            </td>
        </tr>


    </table>


ID:<p>{{$client->id}}</p>
Name:<p>{{$client->name}}</p>
Surname<p>{{$client->surname}}</p>
Username:<p>{{$client->username}}</p>
Company ID: <p>{{$client->company_id}}</p>
Image:<p>{{$client->image_url}}</p>
