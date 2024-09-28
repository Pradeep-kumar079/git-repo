var typed = new Typed(".multipal-text",{
    strings:["1st Year Roadmap","2nd Year Roadmap","3rd Year Roadmap","4th Year Roadmap","3 Months Roadmap"],
    typeSpeed: 150,
    backSpeed:150,
    backDelay:150,
    loop:true
});





document.addEventListener('DOMContentLoaded', () => {
    const repositories = [
        {
            name: 'Repo 1',
            description: 'This is the first repository.',
            url: 'https://github.com/username/repo1'
        },
        {
            name: 'Repo 2',
            description: 'This is the second repository.',
            url: 'https://github.com/username/repo2'
        },
        {
            name: 'Repo 3',
            description: 'This is the third repository.',
            url: 'https://github.com/username/repo3'
        }
    ];

    const repoContainer = document.getElementById('repo-container');

    repositories.forEach(repo => {
        const repoCard = document.createElement('div');
        repoCard.classList.add('repo-card');

        repoCard.innerHTML = `
            <h3>${repo.name}</h3>
            <p>${repo.description}</p>
            <a href="${repo.url}" target="_blank">View Repository</a>
        `;

        repoContainer.appendChild(repoCard);
    });
});
