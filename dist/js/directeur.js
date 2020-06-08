let showEmp = document.querySelector('.showEmployer'),
	addEmp = document.querySelector('.addEmployer'),
	updateEmp = document.querySelector('.updateEmployer'),
	deleteEmp = document.querySelector('.delEmployer'),
	demande = document.querySelector('.demande');

// ***** Show Employers list

document.querySelector('#btn_listEmp').addEventListener('click',evt => {
	evt.preventDefault();
	showEmp.classList.toggle('hidden');
	addEmp.classList.add('hidden');
	updateEmp.classList.add('hidden');
	deleteEmp.classList.add('hidden');
	demande.classList.add('hidden');
});
// ****** Add Employer

document.querySelector('#btn_addEmp').addEventListener('click',evt => {
	evt.preventDefault();
	showEmp.classList.add('hidden');
	addEmp.classList.toggle('hidden');
	updateEmp.classList.add('hidden');
	deleteEmp.classList.add('hidden');
	demande.classList.add('hidden');
	
});
// ******* Update Employer Infos

document.querySelector('#btn_updateEmp').addEventListener('click',evt => {
	evt.preventDefault();
	showEmp.classList.add('hidden');
	addEmp.classList.add('hidden');
	updateEmp.classList.toggle('hidden');
	deleteEmp.classList.add('hidden');
	demande.classList.add('hidden');
	
});
 let secondUpBtn =()=>{
	 showEmp.classList.add('hidden');
	 addEmp.classList.add('hidden');
	 updateEmp.classList.toggle('hidden');
	 deleteEmp.classList.add('hidden');
	 demande.classList.add('hidden');
	
 };
// *****  Delete Employer

document.querySelector('#btn_delEmp').addEventListener('click',evt => {
	evt.preventDefault();
	showEmp.classList.add('hidden');
	addEmp.classList.add('hidden');
	updateEmp.classList.add('hidden');
	deleteEmp.classList.toggle('hidden');
	demande.classList.add('hidden');
	
});
// *****  Delete Employer
let resRequest = ()=>{
	showEmp.classList.add('hidden');
	addEmp.classList.add('hidden');
	updateEmp.classList.add('hidden');
	deleteEmp.classList.add('hidden');
	demande.classList.toggle('hidden');
}



	

