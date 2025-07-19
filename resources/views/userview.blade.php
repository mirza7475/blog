<div>
    <h1>User View</h1>
    <p>Here is the list of users fetched from an external API:</p>
  

    {{$data[0]->name}}<br>
    {{$data[0]->email}}<br>
    {{$data[0]->address->city}}<br>
    {{$data[0]->address->street}}<br>
    {{$data[0]->address->suite}}<br>
    {{$data[0]->address->zipcode}}<br>

    <!-- It is never too late to be what you might have been. - George Eliot -->
</div>
