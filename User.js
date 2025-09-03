class User{
    constructor(nom, email, dateInscription) {
        this.nom = nom;
        this.email = email;
        this.dateInscription = dateInscription;
    }

    afficherInfos() {
        console.log('')
    }

    
}

class StandartUser extends User {
        
}
class PremiunUser extends User {
    
}