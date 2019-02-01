<script>
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!-- //meta-tags -->

	<script>
		var stateObject = {
		"Chittangong": { 
		"Chittagong": ["Anowara", "Chandanaish","Patiya","Fatikchhari","Banshkhali","Boalkhali",
		"Mirsharai","Raozan","Rangunia","Lohagara","Sandwip","Satkania","Sitakunda","Hathazari"],
		
		"Comilla": ["Barura", "Brahmanpara","Burichong","Comilla Sadar","Comilla Sadar Dakshin",
		"Chandina","Chauddagram","Daudkandi","Debidwar","Homna","Manoharganj","Muradnagar","Meghna",
		"Nangalkot","Laksam","Lalmai","Titas"],
		
		"Noakhali": ["Sonpur", "Maijdee","Begumgong"],
		
		"Feni": ["Songaji", "Dagon Buiya"],
		
		"Laksimpur":["Raypur","Ramgong","Chondrogong","Ramgoti"],
		
		"Chandpur":["Hajigong","Matlab uttor","Matlab dokkin"],
		
		"Bhramonbaria":["Kosba"]
		
		}, //end of Chittagong Division list
		
		"Dhaka": {
		"Naraongong": ["Dunstan", "Mitchell"],
		"gulsan-2": ["Altona", "Euroa"]
		
		},//end of Dhaka Division list 
		
		"Shylet": {
		"Alberta": ["Acadia", "Bighorn"],
		"Columbia": ["Washington", ""]
		},
		
		}
		window.onload = function () {
		var countySel = document.getElementById("countySel"),
		stateSel = document.getElementById("stateSel"),
		districtSel = document.getElementById("districtSel");

		for (var country in stateObject) {
		countySel.options[countySel.options.length] = new Option(country, country);
		}
		countySel.onchange = function () {
		stateSel.length = 1; // remove all options bar first
		districtSel.length = 1; // remove all options bar first
		if (this.selectedIndex < 1) return; // done
		for (var state in stateObject[this.value]) {
		stateSel.options[stateSel.options.length] = new Option(state, state);
		}
		}
		countySel.onchange(); // reset in case page is reloaded
		stateSel.onchange = function () {
		districtSel.length = 1; // remove all options bar first
		if (this.selectedIndex < 1) return; // done
		var district = stateObject[countySel.value][this.value];
		for (var i = 0; i < district.length; i++) {
		districtSel.options[districtSel.options.length] = new Option(district[i], district[i]);
		}
		}
		}
		</script>