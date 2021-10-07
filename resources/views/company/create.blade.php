



<style>
    .container {
        width: 80%;
        margin: auto;
    }
</style>
<div class='container'>
<h1>Add company</h1>

<form method='POST' action="{{route('company.store')}}">
    Name: <input type='text' name='company_name'>
    Type: <input type='text' name='company_type'>
    Description: <input type='text' name='company_description'>

    @csrf
       <button type='submit'>Add company</button>





</form>
</div>
