const form = document.querySelector(".login form"),
continueBtn = form.querySelector(".button input"),
errorText = form.querySelector(".error-txt");

form.onsubmit =(e)=>{
    e.preventDefault();
}
continueBtn.onclick = () =>{
    let xhr = new XMLHttpRequest();
    xhr.open("POST", "../Controller/login.php",true);
    xhr.onload = () =>{
        if(xhr.readyState === XMLHttpRequest.DONE){
            if(xhr.status === 200){
                let data = xhr.response;
                if(data=="sucess"){
                    location.href = "users.php";
                }else{
                    errorText.textContent = data;
                    errorText.style.display = "block";
                }
            }
        }

    }
    let formData = new formData(form);
    xhr.send(formData);
}