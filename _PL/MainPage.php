<Body>
<div class="Section P1">
    <div class="indexdiv ">
        <section>
            <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="https://i.pinimg.com/originals/7b/b2/88/7bb2880c531d87b44df4ec0690edae9c.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="https://c.wallhere.com/photos/4f/a2/video_games_Battlefield_V_ultrawide_ultra_wide-1405461.jpg!d" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="https://i.redd.it/hdapx2r3tsvy.png" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="http://s1.1zoom.me/b5050/49/Warriors_Fantastic_world_Thor_Ragnarok_Horns_524274_2560x1080.jpg" class="d-block w-100" alt="...">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </section>
    </div>
    <div class="bts ">
        <a href="?page=Genero">
            <button  type="button" class="btn btn-secondary btn-lg btn-block">Generos</button>
        </a>
        <a href="?page=Plataforma">
            <button type="button" class="btn btn-secondary btn-lg btn-block">Plataforma</button>
        </a>
        <a href="?page=Produtos">
            <button type="button" class="btn btn-secondary btn-lg btn-block">Produtos</button>
        </a>
        <a href="?page=Shopping_cart">
            <button type="button" class="btn btn-secondary btn-lg btn-block">Login</button>
        </a>
        <?php if(!empty(UserController::IsUserLoggedAdmin())){
            print'<a href="?page=Admin/AdminMenu">
            <button type="button" class="btn btn-secondary btn-lg btn-block">Menu de Admin</button>
        </a>';}?>

    </div>
</div>

<div class="Section P2">
    <div class="indexdiv ">
        <div id="AboutUs" class="About">
            <article>
                <h1>About Us</h1>
                <h2>
Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam consectetur elit vel felis accumsan, et condimentum mauris tincidunt. Nulla sit amet est at lectus pellentesque vehicula at sit amet ex. Fusce feugiat augue ex, eget suscipit metus tempor quis. Maecenas malesuada euismod faucibus. Nullam eu erat at lectus mattis convallis nec et dui. Nulla vestibulum nibh id leo eleifend auctor eu hendrerit elit. Sed volutpat feugiat mauris quis tristique. Pellentesque tempus molestie ligula sit amet ornare. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Cras eleifend luctus fermentum. Proin tristique efficitur vehicula. Nulla justo mauris, facilisis ut enim id, viverra iaculis purus. Donec sit amet ex risus.
Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Morbi nec ex a purus blandit molestie eu id orci. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur finibus lectus id viverra laoreet. Morbi scelerisque enim non justo ullamcorper, eu aliquam massa tempus. Praesent lacinia porta nibh non fermentum. Nam feugiat bibendum sagittis. Vivamus venenatis gravida purus, facilisis pulvinar ex aliquet eu. Nam posuere, elit non suscipit faucibus, purus ligula rutrum ex, id gravida justo tellus non libero. Vestibulum nec tincidunt nunc, eget aliquet orci. Pellentesque posuere, risus id viverra imperdiet, ex metus scelerisque nunc, non hendrerit nunc tellus vitae orci. Donec id dolor mi. Phasellus aliquet nisi nibh, a imperdiet nisl mattis interdum. Vivamus cursus suscipit nibh eget mollis. Aenean auctor arcu nibh, eu pharetra diam pretium at.
                </h2>
            </article>

        </div>

    </div>
    <div>
        <div id="Customer" class="About">
            <article>
                <h1>Customer Support</h1>
                <h2>
                    <p>Drop a Line</p>
                    <p>Don't hesitate to contact us</p>
                    <p>Ready for offers and cooperation</p>
                    <p>Phone: +1 (0) 000 0000 001</p>
                    <p>Email: youremail@mail.com</p>
                </h2>
                <!--Google map-->
                <div id="map-container-google-2" class="z-depth-1-half map-container" style="height: 500px">
                    <object data="https://maps.google.com/maps?q=chicago&t=&z=13&ie=UTF8&iwloc=&output=embed" width="400" height="300" type="text/html">

                    </object>

                </div>

                <!--Google Maps-->
            </article>



        </div>
    </div>
</div>

<div id="FAQ" class="About">
    <article>
        <h1>FAQ</h1>
        <h2>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam consectetur elit vel felis accumsan, et condimentum mauris tincidunt. Nulla sit amet est at lectus pellentesque vehicula at sit amet ex. Fusce feugiat augue ex, eget suscipit metus tempor quis. Maecenas malesuada euismod faucibus. Nullam eu erat at lectus mattis convallis nec et dui. Nulla vestibulum nibh id leo eleifend auctor eu hendrerit elit. Sed volutpat feugiat mauris quis tristique. Pellentesque tempus molestie ligula sit amet ornare. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Cras eleifend luctus fermentum. Proin tristique efficitur vehicula. Nulla justo mauris, facilisis ut enim id, viverra iaculis purus. Donec sit amet ex risus.
        </h2>
    </article>
</div>
</Body>