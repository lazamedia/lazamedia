@extends('layouts.main')

@section('container')


<link rel="stylesheet" href="css/tutorial.css">
<div class="tutor">
    <div class="box">
        <h2>Pengenalan Lazamedia</h2>
        <ul class="materi-list">
            <li data-video-url="https://www.youtube.com/embed/SRL6VvD-Df8?si=3NeJ9aTjqXeUS1d3" data-title="Cara Akses Materi">Cara Akses Materi</li>
            <li data-video-url="#" data-title="Cara Bayar">Cara Bayar</li>
            <li data-video-url="#" data-title="Materi 1-3">Pengenalan Pemateri</li>
        </ul>
    </div>
</div>

<div class="popup" id="videoPopup">
    <div class="popup-content">
        <h2 id="popupTitle">Title</h2>
        <hr>
        <iframe id="popupIframe" src="" frameborder="0" allowfullscreen></iframe>
        <button class="close-btn" id="closeBtn">Tutup</button>
    </div>
</div>

<style>
    .popup {
        display: none;
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.8);
        justify-content: center;
        align-items: center;
    }
    .popup-content {
        background: white;
        padding: 20px;
        position: relative;
        border-radius: 10px;
    }
    .close-btn {
        position: absolute;
        top: 10px;
        right: 10px;
        background-color: rgb(105, 0, 18);
    }
    .close-btn:hover {
        background-color: rgb(255, 106, 0);
    }

    @media (max-width: 768px) {
            .box {
                width: calc(50% - 40px); /* Adjust width to 1/2 minus margin */
            }
        }

        @media (max-width: 780px) {
            .box {
                width: calc(100% - 40px); /* Adjust width to full minus margin */
            }

            .popup-content {
               width: 100%;
               height: 350px;
            }
            .popup-content iframe {
            width: 100%;
            height: 260px;
            margin-bottom: 10px;
            align-content: center;
        }
        }
</style>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        const materiItems = document.querySelectorAll('.materi-list li');
        const popup = document.getElementById('videoPopup');
        const popupTitle = document.getElementById('popupTitle');
        const popupIframe = document.getElementById('popupIframe');
        const closeBtn = document.getElementById('closeBtn');

        materiItems.forEach(item => {
            item.addEventListener('click', () => {
                const videoUrl = item.getAttribute('data-video-url');
                const title = item.getAttribute('data-title');
                popupTitle.innerText = title;
                popupIframe.src = videoUrl;
                popup.style.display = 'flex';
            });
        });

        closeBtn.addEventListener('click', () => {
            popupIframe.src = "";
            popup.style.display = 'none';
        });

        window.addEventListener('click', (event) => {
            if (event.target === popup) {
                popupIframe.src = "";
                popup.style.display = 'none';
            }
        });
    });
</script>

@endsection