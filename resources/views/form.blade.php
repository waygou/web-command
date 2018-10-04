<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
    <form method="post" action="{{ route('webcommand.execute') }}">
        @csrf
        <input type="text" name="command" value="{{ $command ?? null }}" />
        <textarea>{{ $response ?? null }}</textarea>
    </form>
</body>
</html>