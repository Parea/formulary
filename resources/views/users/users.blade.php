@extends('users.template')

@section('contenu')
<h2>Users List</h2>
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>ID</th>
        <th>Lastname</th>
        <th>Firstname</th>
        <th>Email</th>
        <th>Message</th>
        <th>Password</th>
      </tr>
    </thead>
    <tbody>
      @foreach($users AS $user)
        <tr>
          <td>{{ $user->id }}</td>
          <td>{{ $user->lastname }}</td>
          <td>{{ $user->firstname }}</td>
          <td>{{ $user->email }}</td>
          <td>{{ $user->message }}</td>
          <td>{{ $user->password }}</td>
          {{--  <td>{{ $paymentmodes->timestamps() }}</td>  --}}
          <td>
            <button class="btn btn-default btn-xs btn-detail" href="toggle('edit', $paymentmodes.id)">Edit</button>
            <button class="btn btn-danger btn-xs btn-delete" href="confirmDelete($paymentmodes.id)">Delete</button>
          </td>
        </tr>
      @endforeach
    </tbody>
  </table>
@endsection