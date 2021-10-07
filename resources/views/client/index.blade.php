<h1>Client index</h1>

<p>Klientų lentelė</p>

<table>
<tr>
    <th>ID</th>
    <th>Name</th>
    <th>Surname</th>
    <th>Username</th>
    <th>Company_id</th>
    <th>Image</th>
</tr>


@foreach ($clients as $client)
    <tr>
        <td>{{ $client->id }}</td>
        {{-- nukreipimas i info apie autoriu --}}
        <td><a href="{{route('client.show', [$client])}}">{{ $client->name }}</a></td>
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
@endforeach

</table>
