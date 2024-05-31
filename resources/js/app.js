import "./bootstrap";
import "~resources/scss/app.scss";
import * as bootstrap from "bootstrap";
import.meta.glob(["../img/**", "../fonts/**"]);

let editPost = document.querySelectorAll('.edit-post');
let editPostButton = document.querySelectorAll('.edit-post-button');
editPostButton.forEach(function (editButton) {
    editButton.addEventListener('click', (e) => {
        e.preventDefault();
        let idButton = editButton.id.toString();
        console.log(idButton);
        editPost.forEach(function (post) {
           /*console.log(post.classList); */
            if (post.classList.contains(idButton)){
                console.log('true');
            post.classList.toggle('display-none');}
            else {console.log('false')}
        });
    })
})
