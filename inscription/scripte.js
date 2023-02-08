    let msg = document.querySelector(".confirme");
    let str = document.querySelector(".password");
    let pseudo = document.querySelector(".pseudo");
    let email = document.querySelector(".email");
    function validate(){
        // while(!pseudo.value){
        //     msg.style.color = "red";
        //     msg.innerHTML = "Rentrer un pseudo ";
        // }
        // while(!email.value){
        //     msg.style.color = "red";
        //     msg.innerHTML = "Rentrer un email ";
        // }
        // while(!str.value){
        //     msg.style.color = "red";
        //     msg.innerHTML = "Rentrer un mot de passe ";
        // }
        // if (str.value.match( /[0-9]/g) && 
        //     str.value.match( /[A-Z]/g) && 
        //     str.value.match(/[a-z]/g) && 
        //     str.value.match( /[^a-zA-Z\d]/g) &&
        //     str.value.length >= 10) 
        //     {
        //         msg.innerHTML = "Mot de passe fort."; 
        //         msg.style.color = "green";
        //     }
        // else {
        //         msg.innerHTML = "Mot de passe faible."; 
        //         msg.style.color = "red";
        //     }
    
    if(pseudo.value ){
        if(email.value){
            if(str.value){
                if (str.value.match( /[0-9]/g) && 
                str.value.match( /[A-Z]/g) && 
                str.value.match(/[a-z]/g) && 
                str.value.match( /[^a-zA-Z\d]/g) &&
                str.value.length >= 10) 
                {
                msg.innerHTML = "Mot de passe fort."; 
                msg.style.color = "green";
                }
                else {
                msg.innerHTML = "Mot de passe faible."; 
                msg.style.color = "red";
                }}
            else{
                msg.style.color = "red";
                msg.innerHTML = "Rentrer un mot de passe ";
            }
        }
        else {
            msg.style.color = "red";
            msg.innerHTML = "Rentrer un email ";
        }
    }
    else {
        msg.style.color = "red";
        msg.innerHTML = "Rentrer un pseudo ";
    }

}


