<!DOCTYPE html>
<html>
<head>
    <title>Add New Author and Book</title>
</head>
<body>
    <h1>Add New Author and Book</h1>
    <form action="{{ route('library.store') }}" method="POST">
        @csrf
        <h2>Author Information</h2>
        <table>
            <tr>
                <td>Name:</td>
                <td><input type="text" name="name" placeholder="Name" required></td>
            </tr>
            <tr>
                <td>Bio:</td>
                <td><textarea name="bio" placeholder="Bio"></textarea></td>
            </tr>
            <tr>
                <td>Birthdate:</td>
                <td><input type="date" name="birthdate" placeholder="Birthdate"></td>
            </tr>
            <tr>
                <td>Nationality:</td>
                <td><input type="text" name="nationality" placeholder="Nationality"></td>
            </tr>
            <tr>
                <td>Website:</td>
                <td><input type="url" name="website" placeholder="Website"></td>
            </tr>
            <tr>
                <td>Photo URL:</td>
                <td><input type="text" name="photo" placeholder="Photo URL"></td>
            </tr>
        </table>

        <h2>Book Information</h2>
        <table>
            <tr>
                <td>Title:</td>
                <td><input type="text" name="title" placeholder="Title" required></td>
            </tr>
            <tr>
                <td>Genre:</td>
                <td><input type="text" name="genre" placeholder="Genre"></td>
            </tr>
            <tr>
                <td>Summary:</td>
                <td><textarea name="summary" placeholder="Summary"></textarea></td>
            </tr>
            <tr>
                <td>Publication Date:</td>
                <td><input type="date" name="publication_date" placeholder="Publication Date"></td>
            </tr>
            <tr>
                <td>ISBN:</td>
                <td><input type="text" name="isbn" placeholder="ISBN"></td>
            </tr>
            <tr>
                <td>Cover Image URL:</td>
                <td><input type="text" name="cover_image" placeholder="Cover Image URL"></td>
            </tr>
            <tr>
                <td>Price:</td>
                <td><input type="number" name="price" placeholder="Price"></td>
            </tr>
            <tr>
                <td>Pages:</td>
                <td><input type="number" name="pages" placeholder="Pages"></td>
            </tr>
            <tr>
                <td>Authors:</td>
                <td>
                    <select name="authors[]" multiple>
                        @foreach($authors as $author)
                            <option value="{{ $author->id }}">{{ $author->name }}</option>
                        @endforeach
                    </select>
                </td>
            </tr>
        </table>
        <button type="submit">Add Author and Book</button>
    </form>
</body>
</html>
