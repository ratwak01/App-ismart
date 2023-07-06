const allSideMenu = document.querySelectorAll('.sidenav li a');

allSideMenu.forEach(item=> {
	const li = item.parentElement;

	item.addEventListener('click', function () {
		allSideMenu.forEach(i=> {
			i.parentElement.classList.remove('active');
		})
		li.classList.add('active');
	})
});


// SIDEBAR
const menuBar = document.querySelector('#navbar nav .bx.bx-menu');
const sidebar = document.getElementById('sidebar');
menuBar.addEventListener('click', function(){
    sidebar.classList.toggle('hide');
})