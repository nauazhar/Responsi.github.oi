document.addEventListener('DOMContentLoaded', function() {
    const books = [
        'The Great Gatsby',
        '1984',
        'To Kill a Mockingbird',
        'The Catcher in the Rye',
        'Pride and Prejudice'
    ];

    const bookList = document.getElementById('book-list');

    books.forEach(book => {
        const li = document.createElement('li');
        li.textContent = book;
        bookList.appendChild(li);
    });
});
