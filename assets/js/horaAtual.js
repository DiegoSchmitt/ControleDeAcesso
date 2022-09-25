function atualizarHorario(){
    let data = new Date().toLocaleString("pt-br", {
        timeZone: "America/Sao_Paulo"
    })
    document.getElementById("time_now").innerHTML = data.replace(","," - ")
}

setInterval(atualizarHorario, 1000)