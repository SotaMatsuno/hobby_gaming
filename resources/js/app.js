import './bootstrap';

const lb = document.getElementById('lb');
const p = document.querySelector('.popup');
if(lb != null){
    lb.addEventListener('click', function() {
        p.classList.add('active');
    });
}

const btn = document.getElementById('logout');
const box = document.querySelector('.logout-box');
if(btn != null){
    btn.addEventListener('click', function() {
        box.classList.add('active');
    });    
}
