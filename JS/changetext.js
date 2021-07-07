const btn = document.getElementById("btn");

btn.addEventListener("click", ()=>{

    if(btn.innerText === "Welcome"){
        btn.innerText = "Karibu";
    }else{
        btn.innerText= "Herzlich willkommen";
    }
});