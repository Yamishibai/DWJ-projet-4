class ErrorPassword {
    constructor() {
        this.boxError = document.getElementById("error_password");

        this.afficheErrorPassword();
    }

    afficheErrorPassword() {

        $("#connexion").click(function(e) {


            if ((document.getElementById("pseudoAdmin").value === "") && (document.getElementById("loginAdmin").value === "")) {
                this.boxError.innerHTML = 'Veuillez remplir le champ Pseudo et Mot de passe';
                this.boxError.setAttribute("class", "error-post p-2 mb-2 bg-danger text-white rounded");

            } else if ((document.getElementById("pseudoAdmin").value === "")) {
                this.boxError.innerHTML = 'Veuillez remplir le champ Pseudo';
                this.boxError.setAttribute("class", "error-post p-2 mb-2 bg-danger text-white rounded");

            } else if ((document.getElementById("loginAdmin").value === "")) {

                this.boxError.innerHTML = 'Veuillez remplir le champ Mot de passe';
                this.boxError.setAttribute("class", "error-post p-2 mb-2 bg-danger text-white rounded");

            } else {
                return true;
            }


            e.preventDefault();

        }.bind(this))
    }
}