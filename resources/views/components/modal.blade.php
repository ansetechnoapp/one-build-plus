<style>
    .modal-container {
        display: flex;
        flex-direction: column;
        justify-content: center;
        gap: 0.4rem;
        width: 450px;
        padding: 1.3rem;
        position: absolute;
        z-index: 2;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        background-color: white;
        border: 1px solid #ddd;
        border-radius: 15px;
    }

    .modal-container .flex-container {
        display: flex;
        align-items: center;
        justify-content: space-between;
    }

    .modal-container .input-field {
        padding: 0.7rem 1rem;
        border: 1px solid #ddd;
        border-radius: 5px;
        font-size: 0.9em;
    }

    .modal-container .description {
        font-size: 0.9rem;
        color: #777;
        margin: 0.4rem 0 0.2rem;
    }

    .overlay-container {
        position: fixed;
        top: 0;
        bottom: 0;
        left: 0;
        right: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.5);
        backdrop-filter: blur(3px);
        z-index: 1;
    }

    .hidden {
        display: none;
    }
</style>

<section class="modal-container hidden">
    <div class="flex-container">
        <h3 id="modal-title">{{ $title }}</h3>
        <a href="#" class="btn-close" aria-label="Fermer">⨉</a>
    </div>
    <div>
        <p class="description">
            {{ $message }}
        </p>
    </div>
    <a id="modal-link" href="#" class="btn">{{$btn1}}</a>
    <a href="#" class="btn" onclick="closeModal()">{{$btn2}}</a>
</section>

<div class="overlay-container hidden" onclick="closeModal()"></div>

<script>
    const modal = document.querySelector(".modal-container");
    const overlay = document.querySelector(".overlay-container");
    const openModalBtn = document.querySelector(".btn-open");
    const closeModalBtn = document.querySelector(".btn-close");

    const closeModal = function() {
        modal.classList.add("hidden");
        overlay.classList.add("hidden");
    };

    const openModal = function(link) {
        const modal = document.querySelector(".modal-container");
        const overlay = document.querySelector(".overlay-container");
        const modalLink = document.querySelector("#modal-link");
        modalLink.href = link;

        modal.classList.remove("hidden");
        overlay.classList.remove("hidden");
    };




    closeModalBtn.addEventListener("click", closeModal);
    overlay.addEventListener("click", closeModal);
    document.addEventListener("keydown", function(e) {
        if (e.key === "Escape" && !modal.classList.contains("hidden")) {
            closeModal();
        }
    });
</script>
