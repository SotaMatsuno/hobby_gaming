import './bootstrap';

const lb = document.getElementById('lb');
const p = document.querySelector('.popup');
if(lb != null){
    lb.addEventListener('click', function() {
        p.classList.add('active');
    });
}
const bc = document.querySelector('.btn-close');

    bc.addEventListener('click', function() {
        p.classList.remove('active');
    });


const btn = document.getElementById('logout');     //同じページにidがない場合jsがえらーをおこすのでif文で分岐させる
const box = document.querySelector('.logout-box');
if(btn != null){
    btn.addEventListener('click', function() {
        box.classList.add('active');
    });    
}
