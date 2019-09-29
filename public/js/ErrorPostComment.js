class ErrorPostComment {
    constructor() {
        this.boxError = document.getElementById("error_post");

        this.afficheErrorComment();
    }

    afficheErrorComment() {

        $("#submitComment").click(function(e) {


            if ((document.getElementById("pseudo").value === "") && (document.getElementById("commentaire").value === "")) {
                this.boxError.innerHTML = 'Veuillez remplir le champ Pseudo et Commentaire';
                this.boxError.setAttribute("class", "error-post p-2 mb-2 bg-danger text-white rounded");

            } else if ((document.getElementById("pseudo").value === "")) {
                this.boxError.innerHTML = 'Veuillez remplir le champ Pseudo';
                this.boxError.setAttribute("class", "error-post p-2 mb-2 bg-danger text-white rounded");

            } else if ((document.getElementById("commentaire").value === "")) {

                this.boxError.innerHTML = 'Veuillez remplir le champ Commentaire';
                this.boxError.setAttribute("class", "error-post p-2 mb-2 bg-danger text-white rounded");

            } else {
                return true;
            }


            e.preventDefault();

        }.bind(this))
    }
}