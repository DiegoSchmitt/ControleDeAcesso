let nav = document.querySelector("nav")
nav.style.marginLeft = '-400px'
function menuToggle(){
    if(nav.style.marginLeft == '-400px'){
        nav.style.marginLeft = '0px';
    }else{
        nav.style.marginLeft = '-400px';
    }
}

document.querySelector("#alter_user .sub_menu").style.display = 'none'
document.querySelector("#alter_user a").addEventListener('click', function(e){
    e.preventDefault()
    if(document.querySelector("#alter_user .sub_menu").style.display == "none"){
        document.querySelector("#alter_user .sub_menu").style.display = "block"
    }else{
        document.querySelector("#alter_user .sub_menu").style.display = "none"
    }
})


document.querySelector("#edit_form_name").style.display = "none"
document.querySelector("#edit_user_name a").addEventListener('click', function(e){
    e.preventDefault()
    if(document.querySelector("#edit_form_name").style.display == "none"){
        document.querySelector("#edit_form_name").style.display = "block"
    }else{
        document.querySelector("#edit_form_name").style.display = "none"
    }
})

document.querySelector("#edit_form_id").style.display = "none"
document.querySelector("#edit_user_id a").addEventListener('click', function(e){
    e.preventDefault()
    if(document.querySelector("#edit_form_id").style.display == "none"){
        document.querySelector("#edit_form_id").style.display = "block"
    }else{
        document.querySelector("#edit_form_id").style.display = "none"
    }
})

document.querySelector("#edit_form_email").style.display = "none"
document.querySelector("#edit_user_email a").addEventListener('click', function(e){
    e.preventDefault()
    if(document.querySelector("#edit_form_email").style.display == "none"){
        document.querySelector("#edit_form_email").style.display = "block"
    }else{
        document.querySelector("#edit_form_email").style.display = "none"
    }
})


/*document.querySelector("#del_user .sub_menu").style.display = "none"
document.querySelector("#del_user a").addEventListener('click', function(e){
    e.preventDefault()
    if(document.querySelector("#del_user .sub_menu").style.display == "none"){
        document.querySelector("#del_user .sub_menu").style.display = "block"
    }else{
        document.querySelector("#del_user .sub_menu").style.display = "none"
    }
})

document.querySelector("#del_form_name").style.display = "none"
document.querySelector("#del_user_name a").addEventListener('click', function(e){
    e.preventDefault()
    if(document.querySelector("#del_form_name").style.display == "none"){
        document.querySelector("#del_form_name").style.display = "block"
    }else{
        document.querySelector("#del_form_name").style.display = "none"
    }
})

document.querySelector("#del_form_id").style.display = "none"
document.querySelector("#del_user_id a").addEventListener('click', function(e){
    e.preventDefault()
    if(document.querySelector("#del_form_id").style.display == "none"){
        document.querySelector("#del_form_id").style.display = "block"
    }else{
        document.querySelector("#del_form_id").style.display = "none"
    }
})

document.querySelector("#del_form_email").style.display = "none"
document.querySelector("#del_user_email a").addEventListener('click', function(e){
    e.preventDefault()
    if(document.querySelector("#del_form_email").style.display == "none"){
        document.querySelector("#del_form_email").style.display = "block"
    }else{
        document.querySelector("#del_form_email").style.display = "none"
    }
})*/


document.querySelector("#alter_adm .sub_menu").style.display = "none"
document.querySelector("#alter_adm a").addEventListener('click', function(e){
    e.preventDefault()
    if(document.querySelector("#alter_adm .sub_menu").style.display == "none"){
        document.querySelector("#alter_adm .sub_menu").style.display = "block"
    }else{
        document.querySelector("#alter_adm .sub_menu").style.display = "none"
    }
})

document.querySelector("#edit_form_adm_name").style.display = "none"
document.querySelector("#edit_adm_name a").addEventListener('click', function(e){
    e.preventDefault()
    if(document.querySelector("#edit_form_adm_name").style.display == "none"){
        document.querySelector("#edit_form_adm_name").style.display = "block"
    }else{
        document.querySelector("#edit_form_adm_name").style.display = "none"
    }
})

document.querySelector("#edit_form_adm_id").style.display = "none"
document.querySelector("#edit_adm_id a").addEventListener('click', function(e){
    e.preventDefault()
    if(document.querySelector("#edit_form_adm_id").style.display == "none"){
        document.querySelector("#edit_form_adm_id").style.display = "block"
    }else{
        document.querySelector("#edit_form_adm_id").style.display = "none"
    }
})

document.querySelector("#edit_form_adm_email").style.display = "none"
document.querySelector("#edit_adm_email a").addEventListener('click', function(e){
    e.preventDefault()
    if(document.querySelector("#edit_form_adm_email").style.display == "none"){
        document.querySelector("#edit_form_adm_email").style.display = "block"
    }else{
        document.querySelector("#edit_form_adm_email").style.display = "none"
    }
})

document.querySelector("#del_adm .sub_menu").style.display = "none"
document.querySelector("#del_adm a").addEventListener('click', function(e){
    e.preventDefault()
    if(document.querySelector("#del_adm .sub_menu").style.display == "none"){
        document.querySelector("#del_adm .sub_menu").style.display = "block"
    }else{
        document.querySelector("#del_adm .sub_menu").style.display = "none"
    }
})

document.querySelector("#del_form_adm_name").style.display = "none"
document.querySelector("#del_adm_name a").addEventListener('click', function(e){
    e.preventDefault()
    if(document.querySelector("#del_form_adm_name").style.display == "none"){
        document.querySelector("#del_form_adm_name").style.display = "block"
    }else{
        document.querySelector("#del_form_adm_name").style.display = "none"
    }
})

document.querySelector("#del_form_adm_id").style.display = "none"
document.querySelector("#del_adm_id a").addEventListener('click', function(e){
    e.preventDefault()
    if(document.querySelector("#del_form_adm_id").style.display == "none"){
        document.querySelector("#del_form_adm_id").style.display = "block"
    }else{
        document.querySelector("#del_form_adm_id").style.display = "none"
    }
})

document.querySelector("#del_form_adm_email").style.display = "none"
document.querySelector("#del_adm_email a").addEventListener('click', function(e){
    e.preventDefault()
    if(document.querySelector("#del_form_adm_email").style.display == "none"){
        document.querySelector("#del_form_adm_email").style.display = "block"
    }else{
        document.querySelector("#del_form_adm_email").style.display = "none"
    }
})