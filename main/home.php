<?php
echo "<title>Home | Kato</title>";
$homeUrl = $baseUrl;
?>
<style>
#logo {
    display: none;
}
</style>
<div class="container-fluid text-center p-0">
    <div id="mySidepanel" class="sidepanel">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <h3 class="text-light">Welcome, <?php echo $_SESSION['NAME']; ?></h3>
        <a href="#">Account</a>
        <a href="#">Wishlist</a>
        <a href="#">Cart</a>
        <a href="#">Orders</a>
        <a href="#" class="text-danger logout">Logout</a>
    </div>
    <nav class="navbar navbar-expand-sm bg-dark p-1 row m-0">
        <div class="col-sm-3 col-12" style="display: contents;">
            <button onclick="openNav()" class="btn border border-light ml-1 mr-1">
                <i class="fas fa-sliders-h logocolor"></i>
            </button>
            <a class="navbar-brand text-center" href=<?php echo $homeUrl; ?>>
                <h2 class="logocolor pl-2"><i class="fas fa-shopping-cart" id="logoi"></i> Kato</h2>
            </a>
            <button class="logout btn ml-1 mr-1 f20 text-light d-sm-none d-block" data-toggle="tooltip" title="Logout">
                <i class="fas fa-sign-out-alt"></i>
            </button>
        </div>
        <div class="col-sm-9 col-12" style="display: contents;">
            <div class="input-group mr-1 ml-1 mb-1 m-sm-auto">
                <div class="input-group-prepend">
                    <select id="category" class="btn btn-outline-secondary text-light bg-dark" data-toggle="tooltip"
                        title="Category">
                        <option value="All" selected>All</option>
                        <option value="Clothes">Clothes</option>
                        <option value="Mobiles">Mobiles</option>
                        <option value="Laptops">Laptops</option>
                        <option value="Grocery">Grocery</option>
                    </select>
                </div>
                <input type="text" class="form-control" placeholder="Search">
                <div class="input-group-append">
                    <button class="btn  logobgcolor text-light" data-toggle="tooltip" title="Search"><i
                            class="fas fa-search"></i></button>
                </div>
            </div>
            <button class="btn ml-2 mr-1 f20 text-light d-sm-block d-none" data-toggle="tooltip" title="Account">
                <span class="d-flex align-items-center"><i class="fas fa-user"></i><span
                        class="f15 ml-2"><?php echo $_SESSION['NAME']; ?></span></span>
            </button>
            <button class="btn ml-1 mr-1 f20 text-light d-sm-block d-none" data-toggle="tooltip" title="Your Cart">
                <i class="fas fa-cart-arrow-down"></i>
            </button>
            <button class="btn ml-1 mr-1 f20 text-light d-sm-block d-none logout" data-toggle="tooltip" title="Logout">
                <i class="fas fa-sign-out-alt"></i>
            </button>
        </div>
    </nav>
    <!-- <div class="container p-0 row m-auto w-auto" style="height: 84vh;overflow-y:auto">
        <div class="col-md-4 bg-light col-sm-6 col-12 p-0">
            <div class="bg-dark m-2 p-2 text-light">
                Lorem ipsum dolor sit amet, consectetur adipisicing
                elit. In
                officia
                nesciunt
                ducimus
                illum
                impedit, nisi
                ab distinctio veniam dicta dolore alias culpa quisquam aliquam, voluptates non sed error, laudantium
                nihil!
            </div>
        </div>
    </div> -->
</div>
<script>
function openNav() {
    document.getElementById("mySidepanel").style.width = "250px";
}

function closeNav() {
    document.getElementById("mySidepanel").style.width = "0";
}

let logoutBtn = $(".logout");
logoutBtn.click(function() {
    window.location = baseUrl + "/user/logout.php";
});
</script>