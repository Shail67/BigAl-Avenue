<html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Entertainment</title>
<style>


body {
margin: 0;
padding: 0;
font-family: Arial, sans-serif;
background-color: #f9f9f9;
color: #333;
text-align: center;
}


.header {
background-color: #007bff;
color: white;
padding: 20px 0;
font-size: 24px;
font-weight: bold;
}


.product-list {
display: grid;
grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
gap: 20px;
padding: 20px;
max-width: 1200px;
margin: 0 auto;
}
.product-item {
background-color: white;
border: 1px solid #ddd;
border-radius: 8px;
box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
padding: 15px;
text-align: center;
transition: transform 0.3s;
}
.product-item:hover {
transform: scale(1.05);
}
.product-item img {
max-width: 100%;
height: auto;
border-radius: 5px;
margin-bottom: 10px;
}
.product-item h3 {
font-size: 18px;
margin: 10px 0;
color: #007bff;
}
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
background-color: #007bff;
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
</style>
<script>
function navigateToPage() {
const category = document.getElementById("category-select").value;
if (category) {
window.location.href = category + ".php";
}
}
</script>
</head>
<body>


<div class="info-bar">


<div class="category-dropdown">
<select id="category-select" onchange="navigateToPage()">
<option value="">Select Category</option>
<option value="HomePage">Home Page</option>
<option value="apparel">Apparel</option>
<option value="home_kitchen">Home & Kitchen</option>
<option value="accessories">Accessories</option>
<option value="collectibles">Collectibles</option>
<option value="stationary">Stationary</option>
<option value="entertainment">Entertainment</option>
</select>
</div>


<div class="logo">
BigAl Avenue
</div>


<div class="shopping-cart">
<img src="https://cdn-icons-png.flaticon.com/512/34/34568.png" alt="Cart Icon">
<span>Cart</span>
</div>
</div>
</style>
</head>
<body>
<div class="header">Entertainment</div>


<div class="product-list">
<div class="product-item">
<img src="https://drive.google.com/file/d/1jtrKZla79GdecDjaVtWz1Kvs_2wO0V1U/view?usp=drive_link" alt="Board games">
<h3>Board games</h3>
<p>$8.99</p>
<form action="cart.php" method="POST">
<input type="hidden" name="product_id" value="1">
<label for="quantity">Quantity</label>
<input type="number" id="quantity" name="quantity" value="1" min="1" size="5" maxlength="2">
<button type="submit">Add to Cart</button>
</div>
<div class="product-item">
<img src="https://api.deepai.org/job-view-file/75f6534c-88d2-444b-b272-e63e15f0d59d/outputs/output.jpg?art-image=true" alt="Puzzle sets">
<h3>Puzzle sets</h3>
<p>$7.99</p>
<form action="cart.php" method="POST">
<input type="hidden" name="product_id" value="1">
<label for="quantity">Quantity</label>
<input type="number" id="quantity" name="quantity" value="1" min="1" size="5" maxlength="2">
<button type="submit">Add to Cart</button>
</div>
<div class="product-item">
<img src="https://drive.google.com/file/d/118MKxci6wPyw7SgrEupyV2mMLTGpdhBm/view?usp=drive_link" alt="DVDs/Blu-rays">
<h3>DVDs/Blu-rays</h3>
<p>$17.99</p>
<form action="cart.php" method="POST">
<input type="hidden" name="product_id" value="1">
<label for="quantity">Quantity</label>
<input type="number" id="quantity" name="quantity" value="1" min="1" size="5" maxlength="2">
<button type="submit">Add to Cart</button>
</div>
<div class="product-item">
<img src="https://drive.google.com/file/ /118MKxci6wPyw7SgrEupyV2mMLTGpdhBm/view?usp=drive_link" alt=”Video game accessories”>
<h3>Video game accessories</h3>
<p>$16.99</p>
<form action="cart.php" method="POST">
<input type="hidden" name="product_id" value="1">
<label for="quantity">Quantity</label>
<input type="number" id="quantity" name="quantity" value="1" min="1" size="5" maxlength="2">
<button type="submit">Add to Cart</button>
</div>
<div class="product-item">
<img src="https://drive.google.com/file/d/1DdDBQwm9Wh8xSLiMiWoaES-GmDJ33W9N/view?usp=drive_link" alt="Soundtrack vinyl records">
<h3>Soundtrack vinyl records</h3>
<p>$12.99</p>
<form action="cart.php" method="POST">
<input type="hidden" name="product_id" value="1">
<label for="quantity">Quantity</label>
<input type="number" id="quantity" name="quantity" value="1" min="1" size="5" maxlength="2">
<button type="submit">Add to Cart</button>
</form>
</div>


</div>
</div>
</body>
</html>

