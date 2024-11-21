// Movie API Key and URL
const API_KEY = 'your_api_key_here'; // Replace with your actual API key from TMDb
const API_URL = 'https://api.themoviedb.org/3/movie/popular?api_key=' + API_KEY + '&language=en-US&page=1';

// Function to fetch and display movies
async function fetchMovies() {
    try {
        const response = await fetch(API_URL);
        const data = await response.json();
        const movies = data.results;
        const movieList = document.getElementById('movies-list');

        movieList.innerHTML = '';

        movies.forEach(movie => {
            const movieCard = document.createElement('div');
            movieCard.classList.add('movie-card');
            movieCard.innerHTML = `
                <img src="https://image.tmdb.org/t/p/w500/${movie.poster_path}" alt="${movie.title}">
                <h3>${movie.title}</h3>
                <p>${movie.overview}</p>
            `;
            movieList.appendChild(movieCard);
        });
    } catch (error) {
        console.error('Error fetching movies:', error);
    }
}

// Function to search movies based on user input
async function searchMovies() {
    const searchQuery = document.getElementById('search').value;
    const SEARCH_URL = `https://api.themoviedb.org/3/search/movie?api_key=${API_KEY}&query=${searchQuery}&page=1`;

    try {
        const response = await fetch(SEARCH_URL);
        const data = await response.json();
        const movies = data.results;
        const movieList = document.getElementById('movies-list');

        movieList.innerHTML = '';

        movies.forEach(movie => {
            const movieCard = document.createElement('div');
            movieCard.classList.add('movie-card');
            movieCard.innerHTML = `
                <img src="https://image.tmdb.org/t/p/w500/${movie.poster_path}" alt="${movie.title}">
                <h3>${movie.title}</h3>
                <p>${movie.overview}</p>
            `;
            movieList.appendChild(movieCard);
        });
    } catch (error) {
        console.error('Error searching movies:', error);
    }
}

// Initialize page with popular movies
fetchMovies();
