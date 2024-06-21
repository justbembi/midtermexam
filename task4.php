<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Search</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f7f7f7;
        }

        .container {
            max-width: 600px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            border-radius: 5px;
        }

        #searchInput {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            font-size: 16px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        #searchResults {
            margin-top: 10px;
        }

        .resultItem {
            padding: 5px;
            border-bottom: 1px solid #ddd;
        }

        .sampleBooks {
            margin-top: 20px;
        }

        .sampleBooks h2 {
            margin-bottom: 10px;
        }

        .hidden {
            display: none;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Book Search</h1>
        <input type="text" id="searchInput" placeholder="Search by title or author">
        <div id="searchResults"></div>

        <div class="sampleBooks" id="sampleBooksSection">
            <h2>Sample Books</h2>
            <ul>
                <li><strong>Harry Potter and the Sorcerer's Stone</strong> by J.K. Rowling</li>
                <li><strong>The Hobbit</strong> by J.R.R. Tolkien</li>
                <li><strong>To Kill a Mockingbird</strong> by Harper Lee</li>
                <li><strong>1984</strong> by George Orwell</li>
            </ul>
        </div>
    </div>

    <script src="search.js"></script>
</body>
</html>
