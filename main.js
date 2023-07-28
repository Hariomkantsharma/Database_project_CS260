// const form = document.querySelector("form"),
//     nextBtn = form.querySelector(".nextBtn"),
//     backBtn = form.querySelector(".backBtn"),
//     allInput = form.querySelectorAll(".first input");


// nextBtn.addEventListener("click", () => {
//     allInput.forEach(input => {
//         if (input.value != "") {
//             form.classList.add('secActive');
//         } else {
//             form.classList.remove('secActive');
//         }
//     })
// })

// backBtn.addEventListener("click", () => form.classList.remove('secActive'));


var a;
function register()
{
    document.getElementById('register').style.display='block';
    document.getElementById('login').style.display='none';

    const elements = document.querySelectorAll('form' , '.fields' , '.input-field');

    elements.forEach((element) => {
        element.style.width = 'calc(100% / 1 - 15px)';
      });


    return a=0;
}