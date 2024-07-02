import './bootstrap';

const btn = document.getElementById('logout');
const box = document.querySelector('.logout-box'); 
  
btn.addEventListener('click', function() {
  
    box.classList.add('active');
});

document.querySelector("#show-logout").addEventListener("click",function(){
    document.querySelector(".popup").classList.add("active");
})