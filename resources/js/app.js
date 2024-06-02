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

let token = document.querySelector('meta[name="csrf-token"]').getAttribute('content');;
let createButton = document.getElementById('create-button');
let newPost = document.getElementById('new-post');
createButton.addEventListener('click', () => {
    newPost.innerHTML =
        `<form action="{{route('admin.posts.store')}}" method="POST"> <input type="hidden" name="_token" value="${token}" autocomplete="off"> 
  
        <td><input type="text" name="title" class="edit-post" required></td>
        <td><input type="text" name="slug" class="edit-post" required></td>
        <td><input type="text" name="content" class="edit-post" required></td>
        <td><button type="submit" class="btn btn-primary"><i class="fa-solid fa-floppy-disk"></i><td>
        </form>`;
    console.log('ciao');

})