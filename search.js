// Function to fetch search results
function fetchSearchResults(query) {
    // Make an AJAX request to your server with the query
    // Here, you can use XMLHttpRequest, fetch API, or any library like jQuery.ajax

    // For demonstration, let's assume searchResults is an array of books
    const searchResults = [
        { title: "Harry Potter and the Sorcerer's Stone", author: "J.K. Rowling" },
        { title: "The Hobbit", author: "J.R.R. Tolkien" },
        { title: "To Kill a Mockingbird", author: "Harper Lee" },
        { title: "1984", author: "George Orwell" },
        // Add more books here
    ];

    // Filter search results based on the query
    const filteredResults = searchResults.filter(book =>
        book.title.toLowerCase().includes(query.toLowerCase()) ||
        book.author.toLowerCase().includes(query.toLowerCase())
    );

    return filteredResults;
}

// Function to update search results dynamically
function updateSearchResults() {
    const searchInput = document.getElementById('searchInput');
    const searchResultsDiv = document.getElementById('searchResults');

    const query = searchInput.value.trim();
    const searchResults = fetchSearchResults(query);

    // Clear previous search results
    searchResultsDiv.innerHTML = '';

    // Display new search results
    searchResults.forEach(book => {
        const resultItem = document.createElement('div');
        resultItem.textContent = `${book.title} by ${book.author}`;
        searchResultsDiv.appendChild(resultItem);
    });
}

// Event listener for input changes
document.getElementById('searchInput').addEventListener('input', updateSearchResults);
