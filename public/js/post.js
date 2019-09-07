class Post {
    constructor() {
        this.boxError = document.querySelector(".error-post");
        this.boxError.style.display = "none";
        this.boxErrorPseudo = document.querySelector(".error-pseudo");
        this.boxErrorPseudo.style.display = "none";
        this.boxErrorCommentaire = document.querySelector(".error-commentaire");
        this.boxErrorCommentaire.style.display = "none";

        this.afficheErrorComment();

    }

    afficheErrorComment() {



        $("#submitComment").click(function(e) {

            if ((document.getElementById("pseudo").value === "") && (document.getElementById("commentaire").value === "")) {
                this.boxError.style.display = "block";
            } else if ((document.getElementById("pseudo").value === "")) {
                this.boxErrorPseudo.style.display = "block";
            } else if ((document.getElementById("commentaire").value === "")) {
                this.boxErrorCommentaire.style.display = "block";
            } else {
                return true;
            }


            e.preventDefault();

        }.bind(this))
    }



}