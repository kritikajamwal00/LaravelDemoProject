<!-- img green -->
<div class="container-fluid p-0">
    <img src="images/lake.png" class="img-fluid ">
</div>

<div class="container mt-lg-5">
    <div class="row">
        <div class="col-lg-6">
            <p class=" parafontsize lh-lg" style="color: #585C65;">Lorem ipsum dolor sit amet, consectetur
                adipiscing elit. Molestie
                ultricies <br>pretium, enim id amet, dapibus sit nullam. Vel, facilisi interdum morbi id. </p>
        </div>

        <div class="col-lg-6 col-12 mt-lg-3  text-lg-center text-center">

            <span class="pe-lg-0 me-4"> <a href="userprofile"><button
                        class=" btn  btn-primary rounded-0 btn-lg carpagebtn  align-item-center">Profile</button></a></span>

            <span class="pe-lg-0 me-4"><a href="album"><button
                        class="btn   btn-outline-primary border-2 btn-lg rounded-0 carpagebtn ps-lg-3 ">Album</button></a></span>
                        {{-- <span class="pe-lg-0 me-4"><a href="album"><button
                            class="btn   btn-outline-primary border-2 btn-lg rounded-0 carpagebtn ps-lg-3 ">Album</button></a></span> --}}

                        <span class="pe-lg-0 me-4"><a  href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                          document.getElementById('logout-form').submit();" ><button
                                    class=" btn btn-outline-primary rounded-0 btn-lg carpagebtn ps-lg-3  border-2 align-item-center">  Logout</button></span></a>
                        
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
<!-- 
          <span class="pe-lg-3 "><a href="changepass.php"><button
                        class=" btn btn-outline-primary rounded-0 btn-lg carpagebtn ps-lg-3  border-2 align-item-center">Change Password?</button></span></a>  -->
             <!-- <div class=" ms-auto  pe-lg-3 pt-lg-4"> <a href="changepass.php" class="">Change Password?</a></div> -->

        </div>
    </div>

</div>

<hr class="mt-lg-3">

