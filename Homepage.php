<html lang="en">




<head>


<meta charset="UTF-8">


<meta name="viewport" content="width=device-width, initial-scale=1.0">


<title>Home - BigAl Avenue</title>


<style>


body {


margin: 0;


padding: 0;


font-family: Arial, sans-serif;


background-color: #f4f4f4;


}






.info-bar {


display: flex;


justify-content: space-between;


align-items: center;


background-color: #FF0000;


padding: 10px 20px;


color: white;


}






.category-dropdown {


position: relative;


display: inline-block;


}


.category-dropdown select {


padding: 8px;


border: none;


background-color: #0056b3;


color: white;


border-radius: 5px;


cursor: pointer;


font-size: 14px;


}






.logo {


font-size: 24px;


font-weight: bold;


text-align: center;


}






.shopping-cart {


display: flex;


align-items: center;


cursor: pointer;


}


.shopping-cart img {


width: 24px;


height: 24px;


margin-right: 8px;


}


.shopping-cart span {


font-size: 16px;


}






.main-content {


padding: 20px;


text-align: center;


}






.image-section {


text-align: center;


margin-top: 20px;


}


.image-section img {


max-width: 100%;


height: auto;


border-radius: 8px;


box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);


}






.account-link {


margin-left: 20px;


font-size: 16px;


color: white;


text-decoration: none;


background-color: #0056b3;


padding: 10px 15px;


border-radius: 5px;


cursor: pointer;


}


.account-link:hover {


background-color: #003f8c;


}


</style>


<script>


function navigateToPage() {


const category = document.getElementById("category-select").value;


if (category) {


window.location.href = category + ".php";


}


}


function viewCart() {


window.location.href = "viewcart.php";


}


function logout() {


window.location.href = "logout.php";


}






</script>


</head>


<body>






<div class="info-bar">






<div class="category-dropdown">


<select id="category-select" onchange="navigateToPage()">


<option value="">Select Category</option>


<option value="HomePage">Home Page</option>


<option value="accessories">Accessories</option>


<option value="home_kitchen">Home & Kitchen</option>


<option value="apparel">Apparel</option>


<option value="collectibles">Collectibles</option>


<option value="stationary">Stationary</option>


<option value="entertainment">Entertainment</option>


</select>


</div>






<div class="logo">


BigAl Avenue


</div>






<div class="shopping-cart" onclick="viewCart()">


<img src="https://cdn-icons-png.flaticon.com/512/34/34568.png" alt="Cart Icon">


<span>Cart</span>


</div>






<div class="logout" style="cursor: pointer;" onclick="logout()">


<span>Sign Out</span>


</div>


</div>






<div class="main-content">


<h1>Welcome to BigAl Avenue</h1>


<p>Shop the best deals and categories just for you!</p>


</div>






<div class="image-section">


<img src="https://www.alumnihall.com/prodimages/76982-DEFAULT-l.jpg" alt="BigAl Avenue Welcome Image">


</div>


</body>


</html>

