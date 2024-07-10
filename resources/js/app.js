import './bootstrap';

const lb = document.getElementById('lb');
const p = document.querySelector('.popup');
if(lb != null){
    lb.addEventListener('click', function() {
        p.classList.add('active');
    });
}

const eb = document.getElementById('eb');
const pE = document.querySelector('.popupEmail');
if(eb != null){
    eb.addEventListener('click', function() {
        pE.classList.add('active');
    });
}

const pb = document.getElementById('pb');
const pP = document.querySelector('.popupPassword');
if(pb != null){
    pb.addEventListener('click', function() {
        pP.classList.add('active');
    });
}

const bc = document.querySelector('.btn-close-logout');

    bc.addEventListener('click', function() {
        p.classList.remove('active');
    });

const bce = document.querySelector('.btn-close-email');

    bce.addEventListener('click', function() {
        pE.classList.remove('active');
    });

const bcp = document.querySelector('.btn-close-password');

    bcp.addEventListener('click', function() {
        pP.classList.remove('active');
    });

const btn = document.getElementById('logout');     //同じページにidがない場合jsがえらーをおこすのでif文で分岐させる
const box = document.querySelector('.logout-box');
if(btn != null){
    btn.addEventListener('click', function() {
        box.classList.add('active');
    });    
}
