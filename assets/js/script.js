let formAdd = document.querySelector('#form-add');
let addStudent = document.querySelector('#add-student');
let closeBtn = document.querySelector('#close-btn');

addStudent.addEventListener('click', (evt)=>{
	evt.preventDefault;
	formAdd.classList.add('active');
});

closeBtn.addEventListener('click', (evt)=>{
	evt.preventDefault;
	formAdd.classList.remove('active');
});