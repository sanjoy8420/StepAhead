{{--<h1>HELLO ADMIN: {{Auth::user()->name}}</h1>--}}


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    
    <link href="{{asset('css/adminMain.css')}}" rel="stylesheet"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/freeps2/a7rarpress@main/swiper-bundle.min.css"> -->
    <script src="//cdn.jsdelivr.net/gh/freeps2/a7rarpress@main/swiper-bundle.min.js"></script>
    <script src="//cdn.jsdelivr.net/gh/freeps2/a7rarpress@main/script.js"></script>
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css"/>
    <!-- ===== Fontawesome CDN Link ===== -->
    <link
      href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css"
      rel="stylesheet"
    />
    <!-- ===== CSS ===== -->
    
    <link href="{{asset('css/style.css')}}" rel="stylesheet"/>
  </body>
</head>
<body>
    <!-- Navbar -->
    <div class="adminMain">

    <div class="nav justify-content-between navbar-dark bg-dark">
      <div class="nav-item">
        <a class="nav-link text-light" aria-current="page" href="#"><h4>STEP<span class="text-danger">_AHEAD</span></h4></a>
      </div>
      <div class="nav d-flex flex-row justify-content-end">
      <div class="nav-item">
      
      <a class="nav-link text-warning" aria-current="page" href="#"><h4>{{Auth::user()->name}}</h4></a>
        </div>
        <div class="nav-item">
          <a class="nav-link active" aria-current="page" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgb(255, 255, 255);"><path d="M19 13.586V10c0-3.217-2.185-5.927-5.145-6.742C13.562 2.52 12.846 2 12 2s-1.562.52-1.855 1.258C7.185 4.074 5 6.783 5 10v3.586l-1.707 1.707A.996.996 0 0 0 3 16v2a1 1 0 0 0 1 1h16a1 1 0 0 0 1-1v-2a.996.996 0 0 0-.293-.707L19 13.586zM19 17H5v-.586l1.707-1.707A.996.996 0 0 0 7 14v-4c0-2.757 2.243-5 5-5s5 2.243 5 5v4c0 .266.105.52.293.707L19 16.414V17zm-7 5a2.98 2.98 0 0 0 2.818-2H9.182A2.98 2.98 0 0 0 12 22z"></path></svg></a>
        </div>
        <div class="nav-item">
          <a class="nav-link" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgb(255, 255, 255);"><path d="M19.023 16.977a35.13 35.13 0 0 1-1.367-1.384c-.372-.378-.596-.653-.596-.653l-2.8-1.337A6.962 6.962 0 0 0 16 9c0-3.859-3.14-7-7-7S2 5.141 2 9s3.14 7 7 7c1.763 0 3.37-.66 4.603-1.739l1.337 2.8s.275.224.653.596c.387.363.896.854 1.384 1.367l1.358 1.392.604.646 2.121-2.121-.646-.604c-.379-.372-.885-.866-1.391-1.36zM9 14c-2.757 0-5-2.243-5-5s2.243-5 5-5 5 2.243 5 5-2.243 5-5 5z"></path></svg></a>
        </div>
        <div class="nav-item">
          <a class="nav-link" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgb(255, 255, 255);"><circle cx="9.5" cy="9.5" r="1.5"></circle><circle cx="14.5" cy="9.5" r="1.5"></circle><path d="M12 2C6.486 2 2 5.589 2 10c0 2.908 1.897 5.515 5 6.934V22l5.34-4.004C17.697 17.852 22 14.32 22 10c0-4.411-4.486-8-10-8zm0 14h-.333L9 18v-2.417l-.641-.247C5.671 14.301 4 12.256 4 10c0-3.309 3.589-6 8-6s8 2.691 8 6-3.589 6-8 6z"></path></svg></i></a>
        </div>
        <div class="nav-item">
          <a class="nav-link" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgb(255, 255, 255);"><circle cx="12" cy="6" r="2"></circle><path d="M14 9h-4a1 1 0 0 0-.8.4l-3 4 1.6 1.2L9 13v7h2v-4h2v4h2v-7l1.2 1.6 1.6-1.2-3-4A1 1 0 0 0 14 9z"></path></svg></a>
        </div>
        <div class="nav-item">
          <a class="nav-link" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgb(255, 255, 255);"><path d="M4 6h16v2H4zm0 5h16v2H4zm0 5h16v2H4z"></path></svg></a>
        </div>
        <div class="nav-item">
        <a href="{{url('logout')}}" class="btn btn-outline-primary" aria-current="page">logout</a>
        </div>
      </div>
    </div>

      <div class="navSearch bg-light navbar-light">
        <form class="d-flex">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
      </div>

      <!-- USER SLIDER -->
      <div class="postSlider">

        <section>
          <div class="swiper mySwiper container">
            <div class="swiper-wrapper content">
                <div class="swiper-slide card">
                  <div class="card-content">
                    <div class="userDetailsAndIcons">
                      <img
                        src="https://images.unsplash.com/photo-1495344517868-8ebaf0a2044a?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxleHBsb3JlLWZlZWR8MXx8fGVufDB8fHx8fA%3D%3D&w=1000&q=80"
                        alt=""
                        class="userDp"
                      />
                      <span class="userName">Anagh</span>
                      <p class="date">2nd Sep, 2012</p>
                      <i class="bx bx-expand"></i>
                    </div>
                    <div class="image">
                      <img
                        src="https://images.pexels.com/photos/268533/pexels-photo-268533.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500"
                        alt=""
                      />
                    </div>
        
                    <p>
                      Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi
                      tenetur expedita officiis reiciendis est? Eum, iusto voluptas
                    </p>
                    <div class="button">
                      <i class="bx bx-like"></i>
                      <i class="bx bx-comment"></i>
                      <i class="bx bx-share"></i>
                      <svg
                        xmlns="http://www.w3.org/2000/svg"
                        x="0px"
                        y="0px"
                        width="13"
                        height="13"
                        viewBox="0 0 24 24"
                      >
                        <path
                          d="M 10 2 L 9 3 L 3 3 L 3 5 L 4.109375 5 L 5.8925781 20.255859 L 5.8925781 20.263672 C 6.023602 21.250335 6.8803207 22 7.875 22 L 16.123047 22 C 17.117726 22 17.974445 21.250322 18.105469 20.263672 L 18.107422 20.255859 L 19.890625 5 L 21 5 L 21 3 L 15 3 L 14 2 L 10 2 z M 6.125 5 L 17.875 5 L 16.123047 20 L 7.875 20 L 6.125 5 z"
                        ></path>
                      </svg>
                    </div>
                  </div>
                </div>
                <div class="swiper-slide card">
                  <div class="card-content">
                    <div class="userDetailsAndIcons">
                      <img
                        src="https://images.unsplash.com/photo-1495344517868-8ebaf0a2044a?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxleHBsb3JlLWZlZWR8MXx8fGVufDB8fHx8fA%3D%3D&w=1000&q=80"
                        alt=""
                        class="userDp"
                      />
                      <span class="userName">Anagh</span>
                      <p class="date">2nd Sep, 2012</p>
                      <i class="bx bx-expand"></i>
                    </div>
                    <div class="image">
                      <img
                        src="https://images.pexels.com/photos/268533/pexels-photo-268533.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500"
                        alt=""
                      />
                    </div>
        
                    <p>
                      Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi
                      tenetur expedita officiis reiciendis est? Eum, iusto voluptas
                    </p>
                    <div class="button">
                      <i class="bx bx-like"></i>
                      <i class="bx bx-comment"></i>
                      <i class="bx bx-share"></i>
                      <svg
                        xmlns="http://www.w3.org/2000/svg"
                        x="0px"
                        y="0px"
                        width="13"
                        height="13"
                        viewBox="0 0 24 24"
                      >
                        <path
                          d="M 10 2 L 9 3 L 3 3 L 3 5 L 4.109375 5 L 5.8925781 20.255859 L 5.8925781 20.263672 C 6.023602 21.250335 6.8803207 22 7.875 22 L 16.123047 22 C 17.117726 22 17.974445 21.250322 18.105469 20.263672 L 18.107422 20.255859 L 19.890625 5 L 21 5 L 21 3 L 15 3 L 14 2 L 10 2 z M 6.125 5 L 17.875 5 L 16.123047 20 L 7.875 20 L 6.125 5 z"
                        ></path>
                      </svg>
                    </div>
                  </div>
                </div>
                <div class="swiper-slide card">
                  <div class="card-content">
                    <div class="userDetailsAndIcons">
                      <img
                        src="https://images.unsplash.com/photo-1495344517868-8ebaf0a2044a?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxleHBsb3JlLWZlZWR8MXx8fGVufDB8fHx8fA%3D%3D&w=1000&q=80"
                        alt=""
                        class="userDp"
                      />
                      <span class="userName">Anagh</span>
                      <p class="date">2nd Sep, 2012</p>
                      <i class="bx bx-expand"></i>
                    </div>
                    <div class="image">
                      <img
                        src="https://images.pexels.com/photos/268533/pexels-photo-268533.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500"
                        alt=""
                      />
                    </div>
        
                    <p>
                      Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi
                      tenetur expedita officiis reiciendis est? Eum, iusto voluptas
                    </p>
                    <div class="button">
                      <i class="bx bx-like"></i>
                      <i class="bx bx-comment"></i>
                      <i class="bx bx-share"></i>
                      <svg
                        xmlns="http://www.w3.org/2000/svg"
                        x="0px"
                        y="0px"
                        width="13"
                        height="13"
                        viewBox="0 0 24 24"
                      >
                        <path
                          d="M 10 2 L 9 3 L 3 3 L 3 5 L 4.109375 5 L 5.8925781 20.255859 L 5.8925781 20.263672 C 6.023602 21.250335 6.8803207 22 7.875 22 L 16.123047 22 C 17.117726 22 17.974445 21.250322 18.105469 20.263672 L 18.107422 20.255859 L 19.890625 5 L 21 5 L 21 3 L 15 3 L 14 2 L 10 2 z M 6.125 5 L 17.875 5 L 16.123047 20 L 7.875 20 L 6.125 5 z"
                        ></path>
                      </svg>
                    </div>
                  </div>
                </div>
                <div class="swiper-slide card">
                  <div class="card-content">
                    <div class="userDetailsAndIcons">
                      <img
                        src="https://images.unsplash.com/photo-1495344517868-8ebaf0a2044a?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxleHBsb3JlLWZlZWR8MXx8fGVufDB8fHx8fA%3D%3D&w=1000&q=80"
                        alt=""
                        class="userDp"
                      />
                      <span class="userName">Anagh</span>
                      <p class="date">2nd Sep, 2012</p>
                      <i class="bx bx-expand"></i>
                    </div>
                    <div class="image">
                      <img
                        src="https://images.pexels.com/photos/268533/pexels-photo-268533.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500"
                        alt=""
                      />
                    </div>
        
                    <p>
                      Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi
                      tenetur expedita officiis reiciendis est? Eum, iusto voluptas
                    </p>
                    <div class="button">
                      <i class="bx bx-like"></i>
                      <i class="bx bx-comment"></i>
                      <i class="bx bx-share"></i>
                      <svg
                        xmlns="http://www.w3.org/2000/svg"
                        x="0px"
                        y="0px"
                        width="13"
                        height="13"
                        viewBox="0 0 24 24"
                      >
                        <path
                          d="M 10 2 L 9 3 L 3 3 L 3 5 L 4.109375 5 L 5.8925781 20.255859 L 5.8925781 20.263672 C 6.023602 21.250335 6.8803207 22 7.875 22 L 16.123047 22 C 17.117726 22 17.974445 21.250322 18.105469 20.263672 L 18.107422 20.255859 L 19.890625 5 L 21 5 L 21 3 L 15 3 L 14 2 L 10 2 z M 6.125 5 L 17.875 5 L 16.123047 20 L 7.875 20 L 6.125 5 z"
                        ></path>
                      </svg>
                    </div>
                  </div>
                </div>
                <div class="swiper-slide card">
                  <div class="card-content">
                    <div class="userDetailsAndIcons">
                      <img
                        src="https://images.unsplash.com/photo-1495344517868-8ebaf0a2044a?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxleHBsb3JlLWZlZWR8MXx8fGVufDB8fHx8fA%3D%3D&w=1000&q=80"
                        alt=""
                        class="userDp"
                      />
                      <span class="userName">Anagh</span>
                      <p class="date">2nd Sep, 2012</p>
                      <i class="bx bx-expand"></i>
                    </div>
                    <div class="image">
                      <img
                        src="https://images.pexels.com/photos/268533/pexels-photo-268533.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500"
                        alt=""
                      />
                    </div>
        
                    <p>
                      Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi
                      tenetur expedita officiis reiciendis est? Eum, iusto voluptas
                    </p>
                    <div class="button">
                      <i class="bx bx-like"></i>
                      <i class="bx bx-comment"></i>
                      <i class="bx bx-share"></i>
                      <svg
                        xmlns="http://www.w3.org/2000/svg"
                        x="0px"
                        y="0px"
                        width="13"
                        height="13"
                        viewBox="0 0 24 24"
                      >
                        <path
                          d="M 10 2 L 9 3 L 3 3 L 3 5 L 4.109375 5 L 5.8925781 20.255859 L 5.8925781 20.263672 C 6.023602 21.250335 6.8803207 22 7.875 22 L 16.123047 22 C 17.117726 22 17.974445 21.250322 18.105469 20.263672 L 18.107422 20.255859 L 19.890625 5 L 21 5 L 21 3 L 15 3 L 14 2 L 10 2 z M 6.125 5 L 17.875 5 L 16.123047 20 L 7.875 20 L 6.125 5 z"
                        ></path>
                      </svg>
                    </div>
                  </div>
                </div>
                <div class="swiper-slide card">
                  <div class="card-content">
                    <div class="userDetailsAndIcons">
                      <img
                        src="https://images.unsplash.com/photo-1495344517868-8ebaf0a2044a?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxleHBsb3JlLWZlZWR8MXx8fGVufDB8fHx8fA%3D%3D&w=1000&q=80"
                        alt=""
                        class="userDp"
                      />
                      <span class="userName">Anagh</span>
                      <p class="date">2nd Sep, 2012</p>
                      <i class="bx bx-expand"></i>
                    </div>
                    <div class="image">
                      <img
                        src="https://images.pexels.com/photos/268533/pexels-photo-268533.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500"
                        alt=""
                      />
                    </div>
        
                    <p>
                      Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi
                      tenetur expedita officiis reiciendis est? Eum, iusto voluptas
                    </p>
                    <div class="button">
                      <i class="bx bx-like"></i>
                      <i class="bx bx-comment"></i>
                      <i class="bx bx-share"></i>
                      <svg
                        xmlns="http://www.w3.org/2000/svg"
                        x="0px"
                        y="0px"
                        width="13"
                        height="13"
                        viewBox="0 0 24 24"
                      >
                        <path
                          d="M 10 2 L 9 3 L 3 3 L 3 5 L 4.109375 5 L 5.8925781 20.255859 L 5.8925781 20.263672 C 6.023602 21.250335 6.8803207 22 7.875 22 L 16.123047 22 C 17.117726 22 17.974445 21.250322 18.105469 20.263672 L 18.107422 20.255859 L 19.890625 5 L 21 5 L 21 3 L 15 3 L 14 2 L 10 2 z M 6.125 5 L 17.875 5 L 16.123047 20 L 7.875 20 L 6.125 5 z"
                        ></path>
                      </svg>
                    </div>
                  </div>
                </div>
                <div class="swiper-slide card">
                  <div class="card-content">
                    <div class="userDetailsAndIcons">
                      <img
                        src="https://images.unsplash.com/photo-1495344517868-8ebaf0a2044a?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxleHBsb3JlLWZlZWR8MXx8fGVufDB8fHx8fA%3D%3D&w=1000&q=80"
                        alt=""
                        class="userDp"
                      />
                      <span class="userName">Anagh</span>
                      <p class="date">2nd Sep, 2012</p>
                      <i class="bx bx-expand"></i>
                    </div>
                    <div class="image">
                      <img
                        src="https://images.pexels.com/photos/268533/pexels-photo-268533.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500"
                        alt=""
                      />
                    </div>
        
                    <p>
                      Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi
                      tenetur expedita officiis reiciendis est? Eum, iusto voluptas
                    </p>
                    <div class="button">
                      <i class="bx bx-like"></i>
                      <i class="bx bx-comment"></i>
                      <i class="bx bx-share"></i>
                      <svg
                        xmlns="http://www.w3.org/2000/svg"
                        x="0px"
                        y="0px"
                        width="13"
                        height="13"
                        viewBox="0 0 24 24"
                      >
                        <path
                          d="M 10 2 L 9 3 L 3 3 L 3 5 L 4.109375 5 L 5.8925781 20.255859 L 5.8925781 20.263672 C 6.023602 21.250335 6.8803207 22 7.875 22 L 16.123047 22 C 17.117726 22 17.974445 21.250322 18.105469 20.263672 L 18.107422 20.255859 L 19.890625 5 L 21 5 L 21 3 L 15 3 L 14 2 L 10 2 z M 6.125 5 L 17.875 5 L 16.123047 20 L 7.875 20 L 6.125 5 z"
                        ></path>
                      </svg>
                    </div>
                  </div>
                </div>
                <div class="swiper-slide card">
                  <div class="card-content">
                    <div class="userDetailsAndIcons">
                      <img
                        src="https://images.unsplash.com/photo-1495344517868-8ebaf0a2044a?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxleHBsb3JlLWZlZWR8MXx8fGVufDB8fHx8fA%3D%3D&w=1000&q=80"
                        alt=""
                        class="userDp"
                      />
                      <span class="userName">Anagh</span>
                      <p class="date">2nd Sep, 2012</p>
                      <i class="bx bx-expand"></i>
                    </div>
                    <div class="image">
                      <img
                        src="https://images.pexels.com/photos/268533/pexels-photo-268533.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500"
                        alt=""
                      />
                    </div>
        
                    <p>
                      Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi
                      tenetur expedita officiis reiciendis est? Eum, iusto voluptas
                    </p>
                    <div class="button">
                      <i class="bx bx-like"></i>
                      <i class="bx bx-comment"></i>
                      <i class="bx bx-share"></i>
                      <svg
                        xmlns="http://www.w3.org/2000/svg"
                        x="0px"
                        y="0px"
                        width="13"
                        height="13"
                        viewBox="0 0 24 24"
                      >
                        <path
                          d="M 10 2 L 9 3 L 3 3 L 3 5 L 4.109375 5 L 5.8925781 20.255859 L 5.8925781 20.263672 C 6.023602 21.250335 6.8803207 22 7.875 22 L 16.123047 22 C 17.117726 22 17.974445 21.250322 18.105469 20.263672 L 18.107422 20.255859 L 19.890625 5 L 21 5 L 21 3 L 15 3 L 14 2 L 10 2 z M 6.125 5 L 17.875 5 L 16.123047 20 L 7.875 20 L 6.125 5 z"
                        ></path>
                      </svg>
                    </div>
                  </div>
                </div>
                <div class="swiper-slide card">
                  <div class="card-content">
                    <div class="userDetailsAndIcons">
                      <img
                        src="https://images.unsplash.com/photo-1495344517868-8ebaf0a2044a?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxleHBsb3JlLWZlZWR8MXx8fGVufDB8fHx8fA%3D%3D&w=1000&q=80"
                        alt=""
                        class="userDp"
                      />
                      <span class="userName">Anagh</span>
                      <p class="date">2nd Sep, 2012</p>
                      <i class="bx bx-expand"></i>
                    </div>
                    <div class="image">
                      <img
                        src="https://images.pexels.com/photos/268533/pexels-photo-268533.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500"
                        alt=""
                      />
                    </div>
        
                    <p>
                      Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi
                      tenetur expedita officiis reiciendis est? Eum, iusto voluptas
                    </p>
                    <div class="button">
                      <i class="bx bx-like"></i>
                      <i class="bx bx-comment"></i>
                      <i class="bx bx-share"></i>
                      <svg
                        xmlns="http://www.w3.org/2000/svg"
                        x="0px"
                        y="0px"
                        width="13"
                        height="13"
                        viewBox="0 0 24 24"
                      >
                        <path
                          d="M 10 2 L 9 3 L 3 3 L 3 5 L 4.109375 5 L 5.8925781 20.255859 L 5.8925781 20.263672 C 6.023602 21.250335 6.8803207 22 7.875 22 L 16.123047 22 C 17.117726 22 17.974445 21.250322 18.105469 20.263672 L 18.107422 20.255859 L 19.890625 5 L 21 5 L 21 3 L 15 3 L 14 2 L 10 2 z M 6.125 5 L 17.875 5 L 16.123047 20 L 7.875 20 L 6.125 5 z"
                        ></path>
                      </svg>
                    </div>
                  </div>
                </div>
                <div class="swiper-slide card">
                  <div class="card-content">
                    <div class="userDetailsAndIcons">
                      <img
                        src="https://images.unsplash.com/photo-1495344517868-8ebaf0a2044a?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxleHBsb3JlLWZlZWR8MXx8fGVufDB8fHx8fA%3D%3D&w=1000&q=80"
                        alt=""
                        class="userDp"
                      />
                      <span class="userName">Anagh</span>
                      <p class="date">2nd Sep, 2012</p>
                      <i class="bx bx-expand"></i>
                    </div>
                    <div class="image">
                      <img
                        src="https://images.pexels.com/photos/268533/pexels-photo-268533.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500"
                        alt=""
                      />
                    </div>
        
                    <p>
                      Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi
                      tenetur expedita officiis reiciendis est? Eum, iusto voluptas
                    </p>
                    <div class="button">
                      <i class="bx bx-like"></i>
                      <i class="bx bx-comment"></i>
                      <i class="bx bx-share"></i>
                      <svg
                        xmlns="http://www.w3.org/2000/svg"
                        x="0px"
                        y="0px"
                        width="13"
                        height="13"
                        viewBox="0 0 24 24"
                      >
                        <path
                          d="M 10 2 L 9 3 L 3 3 L 3 5 L 4.109375 5 L 5.8925781 20.255859 L 5.8925781 20.263672 C 6.023602 21.250335 6.8803207 22 7.875 22 L 16.123047 22 C 17.117726 22 17.974445 21.250322 18.105469 20.263672 L 18.107422 20.255859 L 19.890625 5 L 21 5 L 21 3 L 15 3 L 14 2 L 10 2 z M 6.125 5 L 17.875 5 L 16.123047 20 L 7.875 20 L 6.125 5 z"
                        ></path>
                      </svg>
                    </div>
                  </div>
                </div>
            </div>
          </div>
    
          <div class="swiper-button-next"></div>
          <div class="swiper-button-prev"></div>
        </section>
      </div>

      <!-- POST SLIDER SCRIPT  -->
      <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

      <!-- Initialize Swiper -->
      <script>
        var swiper = new Swiper(".mySwiper", {
          slidesPerView: 3,
          spaceBetween: 30,
          slidesPerGroup: 3,
          loop: true,
          loopFillGroupWithBlank: true,
          pagination: {
            el: ".swiper-pagination",
            clickable: true,
          },
          navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
          },
        });
      </script>
    </div>
    </body>
    </html>