<template>
    <main>
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
        <img src="/img/logo.png" width="30px" height="30px">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">

            <li>
                <router-link exact-active-class="active" to="/" class="nav-link active">Home</router-link>
                </li>
            <li>
                <router-link exact-active-class="active" to="/mostrar" class="nav-link ">Users</router-link>
                </li>
            <li>
                <hr class="dropdown-divider">
                </li>


      </ul>
      
    </div>
  </div>
        </nav>
        <div>
            <router-view></router-view>
        </div>
    </main>
</template>

