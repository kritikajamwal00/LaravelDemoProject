
@extends('layout.header')

@section('title')
About 
@endsection

@section('content')
    <!--about car  -->
    <div class="container">
        <div class="mt-lg-5">
            <h1 class="fw-bold fs-1">About Car Safe</h1>

            <p class="parafontsize lh-lg">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quam urna id at ac
                senectus ultrices mollis. Semper senectus egestas sem nisl sapien.<br>
                Adipiscing sed vestibulum quam at fringilla velit sed nulla egestas.Aliquam odio sem enim urna. Tortor
                proin faucibus urna pellentesque velit massa
                blandit in. Amet, tempor, nisi nisi nullam.</p>
        </div>

        <div class="row">
            <div class="col-lg-6 col-md-12 col-12">
                <p class=" parafontsize lh-lg">
                    Adipiscing erat eu phasellus dignissim at tellus, a vulputate a. Odio at elit et
                    arcu pulvinar magna blandit at enim. Posuere etiam porta tellus nulla<br>
                    feugiat amet lorem etiam. Lorem tortor, neque mattis eget purus. Lorem <br>
                    diam feugiat eu mollis tristique bibendum. Vel quis vitae id mi auctor <br>
                    malesuada ac, dolor penatibus. Lacus sed aliquet enim, risus, arcu.<br>
                    Commodo, ornare massa lacus quam massa. Netus sit pulvinar amet, odio.<br>
                    Sit ut pellentesque amet velit morbi. Felis, neque adipiscing ipsum eget quis<br>
                    gravida mattis lacus. Tempor ante dui cursus amet. Nam aliquet nibh nibh<br>
                    aliquam. Mi ornare non pellentesque pellentesque eget natoque pulvinar <br>
                    velit metus. Pellentesque ornare placerat tincidunt at. Diam erat urna at <br>
                    non. Praesent viverra aliquet iaculis diam tristique diam sit turpis magnis.<br>
                    Odio non, feugiat nunc mollis blandit pellentesque magna ut tortor.<br>
                    Id in sed dolor dignissim aliquet id. Lacinia congue gravida tellus sagittis leo<br>
                    morbi nulla nisi. viverra donec vel sapien aliquam.<br>
                </p>
            </div>
            <div class="col-lg-6 col-md-12 col-12">
                <span>
                    <img src="../images/aboutusCar1.png" class="img-fluid">
                </span>
            </div>
        </div>

        <div>
            <p class=" parafontsize lh-lg">
                Vitae purus sed senectus magna est turpis a posuere praesent. Vestibulum tristique suspendisse sit
                suscipit nulla duis semper nulla rutrum. Amet aclacus, tortor
                id nisl aliquam. Vivamus vulputate sit ut nisl felis. Eu egestas malesuada purus proin ornare. Senectus
                et, volutpat magna mauris amet. Adipiscing<br>
                neque, iaculis scelerisque risus nunc eu. Scelerisque aenean sit quisque at ut. Nullam ultrices ut
                consectetur tortor. Magna mattis vitae <br>
                maecenas nunc. In sed tincidunt mi nisi tellus praesent malesuada mauris purus.<br>
                Adipiscing luctus tempor eu vitae. Nisl scelerisque ante auctor scelerisque. Metus mauris aliquet sed
                semper. Eget ultricies varius sit nunc <br>
                scelerisque. Et auctor tortor vestibulum purus massa nulla.<br>
                Id congue egestas eu felis quis varius ut dignissim. Fringilla enim, faucibus faucibus senectus egestas.
                Amet, orci at in commodo. Massa purus sapien, diam amet
                ultrices purus non urna egestas. Leo vel aliquet egestas nunc viverra amet. Neque quam amet lobortis
                dictum praesent gravida. Cras egestas bhdrtsz<br>
                lobortis morbi proin viverra tristique morbi.<br>
                Ipsum, nisl vel luctus nibh. Turpis at integer ipsum pellentesque est lacinia gravida. Turpis id vitae
                vitae turpis vestibulum, sed arcu. A augue <br>
                scelerisque felis non dui commodo, ultrices amet arcu. Eget nunc vitae enim in amet ipsum. Augue feugiat
                magna dignissim nunc sit neque.<br>
                Fermentum orci in pellentesque eleifend sit arcu nibh fringilla. Sodales vel sollicitudin ornare blandit
                iaculis fermentum praesent tincidunt risus.<br>
                Mattis erat leo pretium vulputate. Blandit id semper amet at nisi nec facilisis. Sodales fusce sit purus
                non molestie nunc. Sed feugiat sit sapien risus ut<br>
                turpis. At at
            </p>
        </div>

    </div>

    <div class="container mt-lg-5">
        <div class="row justify-content-between">
            <div class="col-lg-3">
                <span class="">
                    <img src="../images/aboutuscar2.png" class="img-fluid">
                </span>
            </div>

            <div class="col-lg-5 pt-lg-3 ps-lg-4">
                <h1 class="pt-lg-4 ps-lg-4"> We know</h1>
                <p class="parafontsize lh-lg ps-lg-4 ">Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                    Tempus dui viverra fringilla orci neque sem. Amet mauris 
                    habitant elit, ut proin varius quam. </p>
                    <img src="../images/aboutusbar.png" class="img-fluid  ps-lg-4">
            </div>
            <span class="vr p-0" ></span> 
            <div class="col-lg-3  pt-lg-3 ps-lg-4">
                <h4 class="fw-bold ps-lg-4">Call Now</h4>
                <h3 class="fw-bold fs-2 ps-lg-4" style="color: #015FEB;">236-895-4732</h3>

               <span class="ps-lg-4"><button class="aboutusbtn ">Contact Us</button></span>
            </div>

        </div>
    </div>

    @include('layout.footer')
    @endsection

   