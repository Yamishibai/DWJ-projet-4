class ErrorPostCreateUpdate {
    constructor() {
        this.boxErrorCreate = document.getElementById("error_create");
        this.boxErrorUpdate = document.getElementById("error_update");


        this.afficheErrorCreate();
        this.afficheErrorUpdate();
    }

    afficheErrorCreate() {


        $("#chapitre").click(function(e) {


            if ((document.getElementById("titre").value === "") && (tinymce.get('editor').getContent() === '')) {

                this.boxErrorCreate.innerHTML = 'Veuillez remplir le champ Titre et Chapitre';
                this.boxErrorCreate.setAttribute("class", "error-post p-2 mb-2 bg-danger text-white rounded");

            } else if ((document.getElementById("titre").value === "")) {
                this.boxErrorCreate.innerHTML = 'Veuillez remplir le champ Titre';
                this.boxErrorCreate.setAttribute("class", "error-post p-2 mb-2 bg-danger text-white rounded");

            } else if (tinymce.get('editor').getContent() === '') {

                this.boxErrorCreate.innerHTML = 'Veuillez remplir le champ Chapitre';
                this.boxErrorCreate.setAttribute("class", "error-post p-2 mb-2 bg-danger text-white rounded");

            } else {
                return true;
            }

            e.preventDefault();
        }.bind(this))
    }

    afficheErrorUpdate() {


        $("#change_chapitre").click(function(e) {


            if ((document.getElementById("change_titre").value === "") && (tinymce.get('editor').getContent() === '')) {

                this.boxErrorUpdate.innerHTML = 'Veuillez remplir le champ Titre et Chapitre';
                this.boxErrorUpdate.setAttribute("class", "error-post p-2 mb-2 bg-danger text-white rounded");

            } else if ((document.getElementById("change_titre").value === "")) {
                this.boxErrorUpdate.innerHTML = 'Veuillez remplir le champ Titre';
                this.boxErrorUpdate.setAttribute("class", "error-post p-2 mb-2 bg-danger text-white rounded");

            } else if (tinymce.get('editor').getContent() === '') {

                this.boxErrorUpdate.innerHTML = 'Veuillez remplir le champ Chapitre';
                this.boxErrorUpdate.setAttribute("class", "error-post p-2 mb-2 bg-danger text-white rounded");

            } else {
                return true;
            }

            e.preventDefault();
        }.bind(this))
    }
}