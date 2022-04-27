
<style>
  *
  {
    box-sizing: border-box;
  }
  nav {
      background:white;
      display: flex;
      flex-wrap: wrap;
      align-items: center;
      justify-content: space-between;
      height: 70px;
      padding: 0 100px;
    }

    /* Styling the logo */
    nav .logo {
      color: #9D49FC;
      font-size: 150%;
      font-weight: 600;
      letter-spacing: -1px;
      font-family:  Brush Script MT;
    }

    /* Styling all the nav items as a whole */
    nav .nav-items {
      display: flex;
      flex: 1;
      padding: 0 0 0 200px;
    }

    /* Styling the list items in the nav tag */
    nav .nav-items li {
      list-style: none;
      padding: 0 10px;
    }

    /* Styling each list items */
    nav .nav-items li a {
      color: #9D49FC;
      font-size: 15px;
      font-weight: bold;
      text-decoration: none;
    }

    /* Setting the hover colour on the list items*/
    
    nav .nav-items li a:hover {
      color: #19191b;
    }
    
    nav .searchbar {
      position: relative;
    }

    /* Styling the search box where the
      input would be given */
    nav .searchbar input[type="text"] {
      border: 0;
      padding: 0;
      width: 0px;
      height: 35px;
      border-radius: 3px;
      transition: all 0.3s ease;
    }

    /* Styling the search bar icon */
    nav .searchbar .icon {
      display: flex;
      position: absolute;
      top: 0;
      right: 0;
      width: 35px;
      height: 100%;
      background: none;
      border-radius: 3px;
      color:#9D49FC;
      transition: all 0.5s 0.3s ease;
    }
    
    nav .searchbar .icon i {
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      cursor: pointer;
    }
    
    nav .searchbar .icon.active {
      background: #062333;
      transition: all 0.3s ease;
    }
    
    nav .searchbar input[type="text"].active {
      width: 250px;
      padding: 0 10px;
      transition: all 0.5s 0.2s ease;
    }
    
    nav .licon li {
      list-style: none;
      display: flex;
    }
    
    nav .licon li a {
      padding: 0 20px;
    }

    /* Changing the colour of the login
      icon when hovered over*/
    
    .fa-user-circle:hover {
      color: #0e0d0d !important;
    }
  
@media screen and (max-width: 800px) {
nav {

      height: 70px; padding: 0 5px;
   
    }

   
    nav .logo {
      color: #9D49FC;
      font-size: 15px;
    /*  font-weight: 600;*/
    /*  letter-spacing: -1px;*/
    font-family:  Brush Script MT;
    }

    /* Styling all the nav items as a whole */
    nav .nav-items {
      display: flex;
      flex: 1;
      padding: 0 0 0 20px;
    }

    /* Styling the list items in the nav tag */
    nav .nav-items li {
      list-style: none;
      padding: 0 10px;
    }

    /* Styling each list items */
    nav .nav-items li a {
      color: #9D49FC;
      font-size: 5px;
      font-weight: bold;
      text-decoration: none;
    }

    /* Setting the hover colour on the list items*/
    
    nav .nav-items li a:hover {
      color: #19191b;
    }
    
    nav .searchbar {
      position: relative;
    }

    /* Styling the search box where the
      input would be given */
    nav .searchbar input[type="text"] {
      border: 0;
      padding: 0;
      width: 0px;
      height: 35px;
      border-radius: 3px;
      transition: all 0.3s ease;
    }

    /* Styling the search bar icon */
    nav .searchbar .icon {
      display: flex;
      position: absolute;
      top: 0;
      right: 0;
      width: 35px;
      height: 100%;
      background: none;
      border-radius: 3px;
      color:#9D49FC;
      transition: all 0.5s 0.3s ease;
    }
    
    nav .searchbar .icon i {
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      cursor: pointer;
    }
    
    nav .searchbar .icon.active {
      background: #062333;
      transition: all 0.3s ease;
    }
    
    
    nav .licon li {
      list-style: none;
      display: flex;
    }
    
    nav .licon li a {
      padding: 0 20px;
    }

    /* Changing the colour of the login
      icon when hovered over*/
    
    .fa-user-circle:hover {
      color: #0e0d0d !important;
    }
  
}
 </style>
 
 <nav>
    <div class="logo">
    <img src="images\digida.jpg" width="120px" height="30px" alt="img" class="fh5co_logo_width">
      <br><p style="float: left;
      font-family: serif;font-size: 16px;">
      <?php echo date("d.m.Y");?></p>
    </div>

    <div class="nav-items">

     
      <li><a href="#">Home</a>


      </li>
      <li><a href="aboutus\index.html">About</a></li>
      <li><a href="ContactFrom\index.html">Contact Us</a></li>
<!-- 
<div id="debug"></div>

<script>

// JSON- JavaScript Object Notation

fetch("customerbot-dialog.json")

.then(response => response.json())

.then(data =>
{

console.log(data.sentence)

document.querySelector("#debug").innerText = data.sentence
})
</script>
    </div> -->

 
    </div><div class="searchbar">
      <input type="text" placeholder="search">
      <div class="icon">
        <i class="fa fa-search fa-1x"></i>
      </div>
    </div>

    <div class="licon">
      <li>
        <a href="login.php">
          <i class="fa fa-user-circle
            fa-1x"  style="color:#9D49FC ; ">   
    </i></a>
          </li>
        </div>
      </nav>