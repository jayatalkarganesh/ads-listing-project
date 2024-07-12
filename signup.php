<?php
session_start();
include('parts/header.php')
?>
    <!-- Header Area wrapper End -->

    <!-- Page Header Start -->
    <div class="page-header" style="background: url(assets/img/hero2-area.jpg);">
      <div class="container">
        <div class="row">         
          <div class="col-md-12">
            <div class="breadcrumb-wrapper">
              <h2 class="product-title">Join Us</h2>
              <ol class="breadcrumb">
                <li><a href="#">Home /</a></li>
                <li class="current">Register</li>
              </ol>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Page Header End -->  

    <!-- Content section Start --> 
    <section class="register section-padding">

      <div class="container">
       

<!DOCTYPE html>
<html lang="en">
<head>
<script src="cities.js"></script>
	<title>Login V1</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="login/images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="login/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="login/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="login/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="login/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="login/vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="login/css/util.css">
	<link rel="stylesheet" type="text/css" href="login/css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt>
					<img src="login/images/img-01.png" alt="IMG">
				</div>

				<form class="login100-form validate-form"  method='post' action="con_register.php">
					<span class="login100-form-title">
					Sign Up
          
          </span>
          
          <?php
if(isset($_SESSION['signup']))
{
  ?>
  <div style="padding-bottom: 20px">
   <h6 style="padding-left:45px;color:red">Account alredy exist <a href="login.php" style="color:green">Login!</a></h6>
</div>
<?php
session_unset();
}  

?>

          <div class="wrap-input100 validate-input" data-validate = "Username is required">
						<input class="input100" type="text" name="username" placeholder="Username">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="lni-user" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input100" type="text" name="email" placeholder="Email">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Password is required">
						<input class="input100" type="password" name="password" placeholder="Password">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
          </div>
          <div class="wrap-input100 validate-input" data-validate = "Phone is required">
						<input class="input100" type="phone" name="phone" placeholder="Phone">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
            <i class="fa fa-mobile" aria-hidden="true"></i>
						</span>
					</div>
					<div class="wrap-input100 validate-input" data-validate = "State is required">

						<select class="input100" name="state" class="form-control" id="state">
      					  <option>---Select State---</option>
							print_state(state_id)
      					  <option value="andhra_pradesh">Andhra Pradesh</option>
<option value="arunachal_pradesh">Arunachal Pradesh</option>
<option value="assam">Assam</option>
<option value="bihar">Bihar</option>
<option value="chhattisgarh">Chhattisgarh</option>
<option value="goa">Goa</option>
<option value="gujarat">Gujarat</option>
<option value="haryana">Haryana</option>
<option value="himachal_pradesh">Himachal Pradesh</option>
<option value="jammu_and_kashmir">Jammu and Kashmir</option>
<option value="jharkhand">Jharkhand</option>
<option value="karnataka">Karnataka</option>
<option value="kerala">Kerala</option>
<option value="madhya_pradesh">Madhya Pradesh</option>
<option value="maharashtra">Maharashtra</option>
<option value="manipur">Manipur</option>
<option value="meghalaya">Meghalaya</option>
<option value="mizoram">Mizoram</option>
<option value="nagaland">Nagaland</option>
<option value="odisha">Odisha</option>
<option value="punjab">Punjab</option>
<option value="rajasthan">Rajasthan</option>
<option value="sikkim">Sikkim</option>
<option value="tamil_nadu">Tamil Nadu</option>
<option value="telangana">Telangana</option>
<option value="tripura">Tripura</option>
<option value="uttar_pradesh">Uttar Pradesh</option>
<option value="uttarakhand">Uttarakhand</option>
<option value="west_bengal">West Bengal</option>
<option value="andaman_and_nicobar_islands">Andaman and Nicobar Islands</option>
<option value="chandigarh">Chandigarh</option>
<option value="dadra_and_nagar_haveli_and_daman_and_diu">Dadra and Nagar Haveli and Daman and Diu</option>
<option value="delhi">Delhi</option>
<option value="lakshadweep">Lakshadweep</option>
<option value="puducherry">Puducherry</option>
      					  
      					</select>
						<span class="focus-input100"></span>
						<span class="symbol-input100">
						<i class="fa fa-globe" aria-hidden="true"></i>
						</span>
					</div>
					<div class="wrap-input100 validate-input" required>
					<select class="input100" name="city"class="mdb-select md-form" class="form-control" id="city" required>
      					  <option>---Select City---</option>
							
      					  
      					</select>
						<span class="focus-input100"></span>
						<span class="symbol-input100">
						<i class="fa fa-globe" aria-hidden="true"></i>
						</span>
					</div>
					
					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							Sign Up
						</button>
					</div>

					<!-- <div class="text-center p-t-12">
						<span class="txt1">
							Forgot
						</span>
						<a class="txt2" href="#">
							Username / Password?
						</a>
					</div> -->

					<div class="text-center p-t-136">
						<a class="txt2" href="login.php">
						Login
							<i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	
	
<!--===============================================================================================-->
<script>
  const citiesByState = {
    andhra_pradesh: ["Visakhapatnam", "Vijayawada", "Guntur", "Nellore", "Kurnool", "Kakinada", "Rajahmundry", "Tirupati", "Kadapa", "Anantapur", "Vizianagaram", "Eluru"],
    arunachal_pradesh: ["Itanagar", "Naharlagun", "Pasighat", "Namsai", "Roing", "Ziro", "Tezu", "Tawang", "Bomdila"],
    assam: ["Guwahati", "Silchar", "Dibrugarh", "Jorhat", "Nagaon", "Tezpur", "Sivasagar", "Tinsukia", "Bongaigaon", "Dhubri", "Goalpara", "Kokrajhar"],
    bihar: ["Patna", "Gaya", "Bhagalpur", "Muzaffarpur", "Purnia", "Darbhanga", "Bihar Sharif", "Arrah", "Begusarai", "Katihar", "Munger", "Chhapra", "Danapur", "Bettiah", "Saharsa", "Sasaram", "Hajipur"],
    chhattisgarh: ["Raipur", "Bhilai", "Bilaspur", "Korba", "Raigarh", "Jagdalpur", "Ambikapur", "Dhamtari", "Durg", "Rajnandgaon", "Mahasamund", "Bhatapara", "Chirmiri"],
    goa: ["Panaji", "Margao", "Vasco da Gama", "Mapusa", "Ponda", "Bicholim", "Curchorem"],
    gujarat: ["Ahmedabad", "Surat", "Vadodara", "Rajkot", "Bhavnagar", "Jamnagar", "Junagadh", "Anand", "Navsari", "Surendranagar", "Morbi", "Gandhidham", "Nadiad", "Bharuch", "Porbandar", "Godhra"],
    haryana: ["Faridabad", "Gurgaon", "Panipat", "Ambala", "Yamunanagar", "Rohtak", "Hisar", "Karnal", "Sonipat", "Panchkula", "Bhiwani", "Sirsa", "Bahadurgarh", "Jind", "Thanesar", "Kaithal", "Rewari"],
    himachal_pradesh: ["Shimla", "Mandi", "Solan", "Dharamshala", "Kullu", "Chamba", "Hamirpur", "Una", "Bilaspur", "Nahan", "Nurpur", "Palampur"],
    jammu_and_kashmir: ["Srinagar", "Jammu", "Anantnag", "Baramulla", "Udhampur", "Kathua", "Sopore", "Bandipora", "Pulwama", "Rajauri", "Kupwara", "Ramnagar", "Kishtwar", "Ramban", "Doda"],
    jharkhand: ["Ranchi", "Jamshedpur", "Dhanbad", "Bokaro Steel City", "Deoghar", "Phusro", "Hazaribagh", "Giridih", "Ramgarh", "Medininagar", "Chirkunda", "Jhumri Tilaiya"],
    karnataka: ["Bangalore", "Mysore", "Hubli", "Mangalore", "Belgaum", "Gulbarga", "Davanagere", "Bellary", "Bijapur", "Shimoga", "Tumkur", "Raichur", "Bidar", "Hospet", "Hassan", "Udupi", "Bijapur"],
    kerala: ["Thiruvananthapuram", "Kochi", "Kozhikode", "Thrissur", "Kollam", "Palakkad", "Alappuzha", "Kannur", "Kottayam", "Manjeri", "Kasaragod", "Pathanamthitta", "Malappuram", "Thalassery", "Wadakkanchery", "Kottakkal"],
    madhya_pradesh: ["Bhopal", "Indore", "Jabalpur", "Gwalior", "Ujjain", "Sagar", "Dewas", "Satna", "Ratlam", "Rewa", "Murwara (Katni)", "Singrauli", "Burhanpur", "Khandwa", "Bhind", "Chhindwara", "Guna"],
    maharashtra: ["Mumbai", "Pune", "Nagpur", "Thane", "Nashik", "Kalyan-Dombivli", "Vasai-Virar", "Aurangabad", "Navi Mumbai", "Solapur", "Bhiwandi", "Amravati", "Nanded", "Kolhapur", "Sangli", "Jalgaon"],
    manipur: ["Imphal", "Thoubal", "Bishnupur", "Churachandpur", "Kakching", "Lilong", "Mayang Imphal", "Nambol", "Wangoi", "Yaithibi Loukol"],
    meghalaya: ["Shillong", "Tura", "Nongstoin", "Jowai", "Baghmara", "Nongpoh", "Resubelpara", "Williamnagar"],
    mizoram: ["Aizawl", "Lunglei", "Saiha", "Champhai", "Serchhip", "Kolasib", "Lawngtlai"],
    nagaland: ["Kohima", "Dimapur", "Mokokchung", "Tuensang", "Wokha", "Zunheboto", "Phek", "Chumukedima"],
    odisha: ["Bhubaneswar", "Cuttack", "Rourkela", "Brahmapur", "Sambalpur", "Puri", "Balasore", "Bhadrak", "Baripada", "Jharsuguda", "Jeypore", "Bargarh", "Rayagada", "Bhawanipatna", "Dhenkanal", "Sunabeda", "Balangir"],
    punjab: ["Ludhiana", "Amritsar", "Jalandhar", "Patiala", "Bathinda", "Hoshiarpur", "Mohali", "Batala", "Pathankot", "Moga", "Abohar", "Malerkotla", "Khanna", "Phagwara", "Muktsar"],
    rajasthan: ["Jaipur", "Jodhpur", "Udaipur", "Kota", "Ajmer", "Bikaner", "Alwar", "Bhilwara", "Ganganagar", "Bharatpur", "Sikar", "Pali", "Tonk", "Kishangarh", "Beawar"],
    sikkim: ["Gangtok", "Namchi", "Gyalshing", "Rangpo", "Jorethang", "Mangan"],
    tamil_nadu: ["Chennai", "Coimbatore", "Madurai", "Tiruchirappalli", "Salem", "Tiruppur", "Erode", "Tirunelveli", "Vellore", "Thoothukudi", "Thanjavur", "Dindigul", "Ranipet", "Sivakasi", "Karur", "Ooty"],
    telangana: ["Hyderabad", "Warangal", "Nizamabad", "Karimnagar", "Ramagundam", "Khammam", "Mahbubnagar", "Nalgonda", "Adilabad", "Suryapet", "Miryalaguda", "Jagtial", "Vikarabad", "Wanaparthy", "Sangareddy", "Bodhan"],
    tripura: ["Agartala", "Dharmanagar", "Pratapgarh", "Udaipur", "Kailasahar", "Ambassa", "Khowai", "Belonia", "Sabroom"],
    uttar_pradesh: ["Lucknow", "Kanpur", "Agra", "Varanasi", "Meerut", "Allahabad", "Bareilly", "Aligarh", "Moradabad", "Saharanpur", "Gorakhpur", "Noida", "Firozabad", "Jhansi", "Muzaffarnagar", "Mathura", "Budaun"],
    uttarakhand: ["Dehradun", "Haridwar", "Rishikesh", "Nainital", "Haldwani", "Kashipur", "Rudrapur", "Roorkee", "Ranikhet", "Pithoragarh", "Ramnagar", "Mussoorie", "Srinagar", "Tehri", "Kotdwara"],
    west_bengal: ["Kolkata", "Howrah", "Durgapur", "Asansol", "Siliguri", "Maheshtala", "Rajpur Sonarpur", "South Dumdum", "Gopalpur", "Bhatpara", "Panihati", "Kamarhati", "Bardhaman", "Kulti", "Bally"],
    andaman_and_nicobar_islands: ["Port Blair", "Bamboo Flat", "Garacharma", "Bombooflat", "Car Nicobar", "Mayabunder", "Nancowry", "Diglipur", "Kavaratti"],
    chandigarh: ["Chandigarh"],
    dadra_and_nagar_haveli_and_daman_and_diu: ["Silvassa", "Daman", "Diu", "Amli", "Naroli"],
    delhi: ["New Delhi", "Delhi Cantonment", "Nangloi Jat", "Bawana", "Palam", "Mundka", "Karawal Nagar", "Sultanpur Majra", "Gokalpur", "Mustafabad", "Kirari Suleman Nagar", "Sultanpuri", "Narela", "Alipur", "Burari", "Pooth Khurd", "Barwala"],
    lakshadweep: ["Kavaratti", "Minicoy", "Andrott", "Kalpeni", "Amini", "Agatti", "Kadmat"],
    puducherry: ["Puducherry", "Karaikal", "Yanam", "Mahe", "Ozhukarai", "Villianur", "Bahour", "Nedungadu"]
  };

  const stateSelect = document.getElementById("state");
  const citySelect = document.getElementById("city");

  stateSelect.addEventListener("change", function() {
    const selectedState = stateSelect.value;
    citySelect.innerHTML = "<option>---Select City---</option>";
    if (selectedState !== "---Select State---") {
      const cities = citiesByState[selectedState];
      cities.forEach(function(city) {
        const option = document.createElement("option");
        option.textContent = city;
        citySelect.appendChild(option);
      });
    }
  });
</script>
	
<!--===============================================================================================-->	
	<script src="login/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="login/vendor/bootstrap/js/popper.js"></script>
	<script src="login/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="login/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="login/vendor/tilt/tilt.jquery.min.js"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
<!--===============================================================================================-->
	<script src="login/js/main.js"></script>
<!--===============================================================================================-->

</body>
</html>
      </div>
    </section>
    <!-- Content section End --> 
<?php
include('parts/footer.php')
?>