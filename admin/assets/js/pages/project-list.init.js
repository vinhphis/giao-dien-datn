var favouriteBtn = document.querySelectorAll(".favourite-btn"),
    removeProduct = (favouriteBtn && Array.from(document.querySelectorAll(".favourite-btn")).forEach(function (e) {
        e.addEventListener("click", function (e) {
            this.classList.toggle("active")
        })
    }), document.getElementById("removeProjectModal"));
removeProduct && removeProduct.addEventListener("show.bs.modal", function (t) {
    document.getElementById("remove-project").addEventListener("click", function (e) {
        t.relatedTarget.closest(".project-card").remove(), document.getElementById("close-modal").click()
    })
});