
    <table border="1">
        <tr>
          <td>id</td>
          <td>name</td>
          <td>email</td>
          <td>photo</td>
       
        </tr>
        @foreach ($collection as $users
)
        <tr>
          <td>{{$users['id']}}</td>
        <td>{{$users['first_name']}}</td>
        <td>{{$users['email']}}</td>
        <td><img src="{{$users['avatar']}}" alt=""></td>
        
        </tr>
        @endforeach

    </table>
