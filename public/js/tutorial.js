document.addEventListener("DOMContentLoaded", function() {
    const listItems = document.querySelectorAll('.materi-list li');
    listItems.forEach(item => {
        const videoUrl = item.getAttribute('data-video-url');
        const videoId = videoUrl.split('v=')[1];
        const embedUrl = `https://www.youtube.com/embed/${videoId}`;

        const iframe = document.createElement('iframe');
        iframe.setAttribute('src', embedUrl);
        iframe.setAttribute('title', item.getAttribute('data-title'));
        iframe.setAttribute('frameborder', '0');
        iframe.setAttribute('allow', 'accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture');
        iframe.setAttribute('allowfullscreen', true);

        item.innerHTML = '';
        item.appendChild(iframe);
        const title = document.createElement('p');
        title.textContent = item.getAttribute('data-title');
        item.appendChild(title);
    });
});