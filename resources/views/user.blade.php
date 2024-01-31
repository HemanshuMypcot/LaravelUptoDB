
<style>
    th, td {
  padding: 10px;
}
</style>
<table border="1">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Phone</th>
        <th>Gender</th>
    </tr>
    @foreach($data as $item)
    <tr>
        <td>{{$item->sno}}</td>
        <td>{{$item->name}}</td>
        <td>{{$item->email}}</td>
        <td>{{$item->phone}}</td>
        <td>{{$item->gender}}</td>
    </tr>
    @endforeach
</table>