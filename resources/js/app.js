import "./bootstrap";
import "~resources/scss/app.scss";
import * as bootstrap from "bootstrap";
import.meta.glob(["../img/**", "../fonts/**"]);

let editPost = document.querySelectorAll('.edit-post');
let editPostButton = document.querySelectorAll('.edit-post-button');
let td = document.querySelectorAll('.td');
editPostButton.forEach(function (editButton) {
    editButton.addEventListener('click', (e) => {
        e.preventDefault();
        let idButton = editButton.id.toString();
        /*  console.log(idButton); */
        editPost.forEach(function (post) {
            /*console.log(post.classList); */
            if (post.classList.contains(idButton)) {
                /*  console.log('true'); */
                post.classList.toggle('display-none');
            }
            else { console.log('false') }

        });
        td.forEach(function (rowtd) {
            let idButton = editButton.id.toString();
            console.log(idButton);
            if (rowtd.classList.contains(idButton)) {
                console.log('true');
                rowtd.classList.toggle('d-none');
            }
            else { console.log('false') }

        });
    })
})


let createButton = document.getElementById('create-button');
let newPost = document.getElementById('new-post');
createButton.addEventListener('click', () => {
   
        newPost.classList.toggle('d-none')
    console.log('ciao');
    })
    
