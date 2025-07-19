<div>
   <table>
      <thead>
         <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
         </tr>
      </thead>
      <tbody>
         @foreach($users as $user)
         <tr>
            <td>{{ $user->id }}</td>
            <td>{{ $user->name }}</td>
            <td>{{ $user->email }}</td>
         </tr>
         @endforeach
      </tbody>
 
    <!-- The best way to take care of the future is to take care of the present moment. - Thich Nhat Hanh -->
</div>
