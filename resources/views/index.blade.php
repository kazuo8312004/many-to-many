<!DOCTYPE html>
<html>
<head>
    <title>Library</title>
</head>
<body>
    <h1>Library</h1>
    <a href="{{ route('library.create') }}">Add New Author and Book</a>

    <h2>Authors</h2>
    <table border="1">
        <tr>
            <th>Name</th>
            <th>Bio</th>
            <th>Birthdate</th>
            <th>Nationality</th>
            <th>Website</th>
            <th>Photo</th>
        </tr>
        @foreach($authors as $author)
            <tr>
                <td>{{ $author->name }}</td>
                <td>{{ $author->bio }}</td>
                <td>{{ $author->birthdate }}</td>
                <td>{{ $author->nationality }}</td>
                <td>{{ $author->website }}</td>
                <td><img src="{{ $author->photo }}" alt="Photo of {{ $author->name }}" width="50"></td>
            </tr>
        @endforeach
    </table>

    <h2>Books</h2>
    <table border="1">
        <tr>
            <th>Title</th>
            <th>Genre</th>
            <th>Summary</th>
            <th>Publication Date</th>
            <th>ISBN</th>
            <th>Cover Image</th>
            <th>Price</th>
            <th>Pages</th>
            <th>Authors</th>
        </tr>
        @foreach($books as $book)
            <tr>
                <td>{{ $book->title }}</td>
                <td>{{ $book->genre }}</td>
                <td>{{ $book->summary }}</td>
                <td>{{ $book->publication_date }}</td>
                <td>{{ $book->isbn }}</td>
                <td><img src="{{ $book->cover_image }}" alt="Cover of {{ $book->title }}" width="50"></td>
                <td>{{ $book->price }}</td>
                <td>{{ $book->pages }}</td>
                <td>
                    @foreach($book->authors as $author)
                        {{ $author->name }}<br>
                    @endforeach
                </td>
            </tr>
        @endforeach
    </table>
</body>
</html>
