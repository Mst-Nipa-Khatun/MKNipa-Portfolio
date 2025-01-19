document.getElementById('contactForm').addEventListener('submit', function (event) {
    event.preventDefault();
    const formData = new FormData(event.target);
    fetch('php/submit_form.php', {
        method: 'POST',
        body: formData
    })
        .then(response => response.json())
        .then(data => alert(data.message))
        .catch(error => console.error('Error:', error));
});
window.onload = function () {
    fetch('php/get_projects.php')
        .then(response => response.json())
        .then(data => {
            const container = document.getElementById('projects-containers');
            // Ensure the container exists
            if (!container) {
                console.error('projects-container not found');
                return;
            }

            data.projects.forEach(project => {
                const div = document.createElement('div');
                div.className = 'project card border-primary' +
                    ' m-1 col col-md-3';  // Make sure 'project' and 'row' classes are correctly applied
                div.innerHTML = `<br>
                        <h4><b>${project.title}</b></h4>
                        <div>
                            <div>${project.description}</div>
                            <br>
                            <button onclick="window.open('${project.link}', '_blank')" class="btn btn-primary">
                                View Project
                            </button>
                        </div>
                        <br>
                `;
                container.appendChild(div);
            });
        })
        .catch(error => console.error('Error fetching projects:', error));
};
