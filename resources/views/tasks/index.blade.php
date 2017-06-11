<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">

  <title>Tasks</title>
</head>

<body>

  <table border="1">
    <thead>
      <th>Title</th>
      <th>Body</th>
    </thead>
    <tbody>
      @foreach($tasks as $task)
        <tr>
            <td><a href="/tasks/{{ $task->id }}">{{ $task->title }}</a></td>
            <td>{{ $task->body }}</td>
        </tr>
      @endforeach
    </tbody>
  </table>

</body>
</html>