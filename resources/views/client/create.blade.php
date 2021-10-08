

<style>
    .container {
        width: 80%;
        margin: auto;
    }
</style>
<div class='container'>
<h1>Add client</h1>

<form method='POST' action="{{route('client.store')}}">
    Name: <input type='text' name='client_name' />
    Surname: <input type='text' name='client_surname' />
    Username: <input type='text' name='client_username' />
    Company_id: <input type='text' name='company_id' />
    Image: <input type='text' name='image_url' />
    @csrf
       <button type='submit'>Add client</button>





</form>
</div>
