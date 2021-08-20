
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="../img/fav.png">
  <link rel="icon" type="image/png" href="../img/favicons.png">
  
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    @yield('title')
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  <!-- CSS Files -->
<link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" />
<link href="{{ asset('assets/css/now-ui-dashboard.css?v=1.5.0') }}" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="{{ asset('assets/demo/demo.css')}}" rel="stylesheet" />
  @yield('CustomCSS')
</head>

<body class="">
    <div class="wrapper ">
      <div class="sidebar" data-color="red">
        <!--
          Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"
      -->
      <div class="logo">
        <a href="#" class="simple-text logo-mini" style="">
            <img src="../img/favicons.png" width="30" height="30" class="d-inline-block align-top">
        </a>
        <a href="http://127.0.0.1:8000" class="simple-text logo-normal">
            <strong>MHY SERVICE</strong>
        </a>
      </div>
        <div class="sidebar-wrapper" id="sidebar-wrapper">
          <ul class="nav">
            <!---------->
            <li @if( request()->is('http://127.0.0.1:8000') ) class="activeItem" @endif>
              <a class="icon-link" href="http://127.0.0.1:8000">
                <svg  class= "icon " version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                 height="33.699px" viewBox="0 0 63.699 63.699" style="enable-background:new 0 0 63.699 63.699;"
                xml:space="preserve">
                       <g>
                        <path d="M63.663,29.424c-0.143-1.093-0.701-2.065-1.575-2.737l-11.715-9.021V8.608c0-2.275-1.851-4.126-4.125-4.126
                        c-2.273,0-4.125,1.851-4.125,4.126v2.705l-7.758-5.975c-0.718-0.551-1.612-0.856-2.517-0.856c-0.906,0-1.801,0.304-2.519,0.857
                        L1.606,26.687c-1.802,1.389-2.139,3.983-0.751,5.785c0.788,1.022,1.979,1.608,3.271,1.608c0.664,0,1.302-0.153,1.88-0.451V55.09
                        c0,2.275,1.851,4.127,4.126,4.127h18.534V39.732h6.351v19.482h18.271c2.274,0,4.125-1.85,4.125-4.127V33.472
                        c0.649,0.399,1.387,0.608,2.157,0.608c1.289,0,2.482-0.586,3.27-1.606C63.514,31.601,63.807,30.518,63.663,29.424z M59.819,30.144
                        c-0.08,0.105-0.189,0.122-0.247,0.122c-0.069,0-0.132-0.021-0.188-0.065L53.6,25.748V55.09c0,0.173-0.14,0.312-0.311,0.312H38.832
                        l0.001-19.484H24.852v19.484H10.132c-0.171,0-0.31-0.141-0.31-0.312V25.96L4.315,30.2c-0.056,0.043-0.119,0.065-0.188,0.065
                        c-0.059,0-0.167-0.017-0.248-0.121c-0.065-0.084-0.07-0.171-0.062-0.229c0.007-0.058,0.034-0.141,0.118-0.205L31.661,8.363
                        c0.138-0.105,0.239-0.106,0.379,0l13.899,10.703V8.608c0-0.172,0.14-0.311,0.311-0.311s0.312,0.139,0.312,0.311v10.935
                        l13.205,10.166c0.084,0.064,0.108,0.147,0.116,0.205C59.891,29.975,59.885,30.062,59.819,30.144z"/>
                      </g>
                  </svg>

                  <div>Home</div>
              </a>
          </li>
          
               
            
            <li @if( request()->is('homeAdmin') ) class="activeItem" @endif>
              <a class="icon-link" href="/dash">
                  <svg class="icon" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                       viewBox="0 0 512 512" ><g><path d="M336.067,208.92l-40.96,24.747c-14.507,8.533-29.867,16.213-44.373,23.04c-4.267,1.707-9.387,4.267-14.507,6.827
  c-17.92,9.387-27.307,29.013-23.04,48.64c3.413,15.36,16.213,28.16,31.573,31.573c3.413,0.853,6.827,0.853,10.24,0.853
  c16.213,0,30.72-9.387,38.4-23.893c1.707-4.267,4.267-9.387,6.827-14.507c7.68-14.507,14.507-29.867,23.04-44.373l24.747-40.96
  c1.707-3.413,0.853-6.827-1.707-10.24C343.747,207.213,339.48,207.213,336.067,208.92z M308.76,252.44
  c-9.387,15.36-17.067,30.72-23.893,46.08c-1.707,5.12-4.267,9.387-6.827,14.507c-5.12,11.093-17.067,16.213-29.013,13.653
  c-9.387-1.707-17.067-9.387-18.773-18.773c-2.56-11.947,2.56-23.893,13.653-29.013c4.267-2.56,9.387-4.267,14.507-6.827
  c15.36-7.68,31.573-15.36,46.08-23.893l11.093-6.827L308.76,252.44z"/>
                          <path d="M492.719,207.208c-0.108-0.575-0.27-1.146-0.492-1.702c-0.223-0.558-0.507-1.069-0.837-1.537
  c-12.787-30.616-31.365-58.265-54.348-81.565c-0.324-0.482-0.701-0.944-1.135-1.378s-0.896-0.811-1.378-1.135
  C388.233,74.226,324.764,45.933,255,45.933c-33.418,0-65.389,6.5-94.725,18.281c-0.575,0.108-1.146,0.27-1.701,0.492
  c-0.557,0.223-1.069,0.507-1.537,0.837c-30.616,12.787-58.265,31.365-81.565,54.348c-0.482,0.324-0.944,0.701-1.378,1.135
  s-0.812,0.896-1.135,1.378C27.293,168.7-1,232.169-1,301.933c0,58.027,18.773,113.493,55.467,158.72
  c1.707,2.56,4.267,3.413,6.827,3.413h387.413c2.56,0,5.12-0.853,6.827-3.413C492.227,415.427,511,359.96,511,301.933
  C511,268.515,504.5,236.544,492.719,207.208z M445.293,447H65.56c-11.539-14.88-21.122-30.844-28.695-47.616l23.575-9.557
  c4.267-1.707,5.973-6.827,4.267-11.093c-1.707-4.267-6.827-5.973-11.093-4.267l-23.11,9.369
  c-8.574-23.342-13.394-48.021-14.278-73.369H75.8c5.12,0,8.533-3.413,8.533-8.533S80.92,293.4,75.8,293.4H16.237
  c0.957-26.907,6.416-52.715,15.648-76.694L55.32,226.84c0.853,0.853,2.56,0.853,3.413,0.853c3.413,0,5.973-1.707,7.68-5.12
  c1.707-4.267,0-9.387-4.267-11.093l-23.672-10.237c10.699-22.831,24.906-43.721,41.922-61.967l17.59,17.59
  c1.707,1.707,3.413,2.56,5.973,2.56s4.267-0.853,5.973-2.56c3.413-3.413,3.413-8.533,0-11.947l-17.59-17.59
  c19.117-17.828,41.131-32.581,65.244-43.438l9.52,23.482c0.853,3.413,4.267,5.12,7.68,5.12c0.853,0,1.707,0,3.413-0.853
  c4.267-1.707,5.973-6.827,4.267-11.093l-9.329-23.012c23.021-8.463,47.679-13.452,73.329-14.364v59.563
  c0,5.12,3.413,8.533,8.533,8.533s8.533-3.413,8.533-8.533V63.17c26.907,0.957,52.715,6.416,76.694,15.648l-10.134,23.436
  c-1.707,4.267,0,9.387,4.267,11.093c0.853,0.853,2.56,0.853,3.413,0.853c3.413,0,6.827-2.56,7.68-5.12l10.237-23.672
  c22.831,10.699,43.721,24.906,61.967,41.922l-17.59,17.59c-3.413,3.413-3.413,8.533,0,11.947c1.707,1.707,3.413,2.56,5.973,2.56
  c1.707,0,4.267-0.853,5.973-2.56l17.59-17.59c17.828,19.117,32.581,41.131,43.438,65.244l-23.482,9.52
  c-4.267,1.707-5.973,6.827-4.267,11.093c0.853,3.413,4.267,5.12,7.68,5.12c0.853,0,1.707-0.853,3.413-0.853l23.013-9.329
  c8.463,23.021,13.452,47.679,14.364,73.329H434.2c-5.12,0-8.533,3.413-8.533,8.533s3.413,8.533,8.533,8.533h59.575
  c-0.927,26.593-6.172,52.45-15.418,76.799l-23.677-10.239c-4.267-1.707-9.387,0-11.093,4.267c-1.707,4.267,0,9.387,4.267,11.093
  l23.981,10.37C464.644,418.298,455.773,433.121,445.293,447z"/>
                      </g>
                  </svg>

                  <div>Dashboard</div>
              </a>
          </li>
              <!-------->
            <li @if( request()->is('role-users') ) class="activeItem" @endif>
              <a class="icon-link" href="/role-users">
                  <svg class="icon" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                       viewBox="0 0 512.003 512.003" style="enable-background:new 0 0 512.003 512.003;" xml:space="preserve">
<g>
<g>
  <path d="M207.906,160.322c-4.142,0-7.5,3.357-7.5,7.5v8.017c0,4.143,3.358,7.5,7.5,7.5c4.142,0,7.5-3.357,7.5-7.5v-8.017
C215.406,163.68,212.047,160.322,207.906,160.322z"/>
</g>
</g>
                      <g>
                          <g>
                              <path d="M304.098,160.322c-4.143,0-7.5,3.357-7.5,7.5v8.017c0,4.143,3.357,7.5,7.5,7.5s7.5-3.357,7.5-7.5v-8.017
C311.598,163.68,308.24,160.322,304.098,160.322z"/>
                          </g>
                      </g>
                      <g>
                          <g>
                              <path d="M285.389,218.669c-2.908-2.951-7.657-2.981-10.605-0.072c-2.738,2.7-9.3,5.854-18.782,5.854
c-9.482,0-16.043-3.154-18.781-5.854c-2.95-2.911-7.699-2.878-10.606,0.071c-2.909,2.949-2.877,7.697,0.071,10.606
c6.459,6.372,17.418,10.177,29.316,10.177c11.897,0,22.856-3.805,29.315-10.177C288.266,226.366,288.298,221.617,285.389,218.669z
"/>
                          </g>
                      </g>
                      <g>
                          <g>
                              <path d="M215.921,136.274H199.89c-4.142,0-7.5,3.357-7.5,7.5s3.358,7.5,7.5,7.5h16.032c4.142,0,7.5-3.357,7.5-7.5
S220.063,136.274,215.921,136.274z"/>
                          </g>
                      </g>
                      <g>
                          <g>
                              <path d="M312.114,136.274h-16.032c-4.143,0-7.5,3.357-7.5,7.5s3.358,7.5,7.5,7.5h16.032c4.143,0,7.5-3.357,7.5-7.5
S316.257,136.274,312.114,136.274z"/>
                          </g>
                      </g>
                      <g>
                          <g>
                              <path d="M416.63,357.239l-54.059-16.62c0.088-1.633-0.032-3.285-0.417-4.917c-1.184-5.011-4.503-9.206-9.108-11.509
l-33.432-16.715V283.64c25.013-17.396,42.617-44.741,47.019-76.253h4.458c14.617,0,27.155-10.861,28.543-24.728
c0.778-7.771-1.764-15.529-6.974-21.286c-2.521-2.787-5.568-4.992-8.917-6.533V71.629c0-30.656-24.94-55.597-55.597-55.597
c-0.039,0-0.561,0-1.268,0.001C313.375,6.073,293.538,0,271.533,0c-46.849,0-68.372,9.76-93.292,21.061
c-13.313,6.037-27.078,12.279-46.59,17.985c-2.048,0.599-3.745,2.042-4.664,3.969c-0.919,1.926-0.974,4.153-0.151,6.122
c0.228,0.546,3.579,8.325,12.224,17.775c-3.733,4.595-10.799,16.346-10.799,39.453v48.809c-8.63,4.115-14.929,12.266-15.89,21.857
c-0.779,7.771,1.762,15.53,6.972,21.289c5.213,5.762,12.658,9.066,20.426,9.066h5.598c4.398,31.522,22.003,58.87,47.022,76.264
v23.827l-33.433,16.715c-4.605,2.304-7.925,6.499-9.108,11.51c-0.385,1.631-0.504,3.283-0.417,4.916l-54.059,16.62
c-23.481,7.22-39.258,28.575-39.258,53.142v94.12c0,4.143,3.358,7.5,7.5,7.5c4.142,0,7.5-3.357,7.5-7.5v-94.119
c0-17.938,11.52-33.532,28.667-38.804l56.231-17.288l9.925,13.234L154.661,378.8c-7.174,7.173-8.946,18.089-4.409,27.164
l21.47,42.939h-20.445v-8.532c0-4.143-3.358-7.5-7.5-7.5c-4.142,0-7.5,3.357-7.5,7.5v8.532h-32.581c-4.142,0-7.5,3.357-7.5,7.5
V504.5c0,4.143,3.358,7.5,7.5,7.5h80.162c4.142,0,7.5-3.357,7.5-7.5v-16.326l9.84,19.681c1.314,2.628,3.962,4.147,6.714,4.147
c1.127,0,2.271-0.256,3.348-0.794c3.705-1.853,5.207-6.357,3.354-10.063l-50.945-101.891c-1.645-3.29-1.002-7.247,1.599-9.849
l15.877-15.878c2.639-2.639,2.936-6.817,0.697-9.803l-16.992-22.655c-0.565-0.754-0.494-1.527-0.401-1.921
c0.093-0.395,0.375-1.118,1.218-1.54l29.54-14.77l20.854,71.499c1.16,3.978,5.322,6.258,9.3,5.101c3.977-1.16,6.26-5.323,5.1-9.3
l-3.287-11.27c9.222,3.205,18.973,4.873,28.83,4.873c9.861,0,19.608-1.663,28.828-4.868l-28.829,98.84l-16.186-55.494
c-1.16-3.978-5.323-6.261-9.3-5.101s-6.26,5.324-5.1,9.3l23.386,80.18c0.934,3.2,3.867,5.4,7.2,5.4c3.333,0,6.267-2.2,7.2-5.4
l53.597-183.76l29.539,14.77c0.844,0.422,1.125,1.146,1.219,1.539c0.093,0.395,0.164,1.168-0.401,1.922l-16.992,22.655
c-2.239,2.985-1.942,7.164,0.696,9.804l15.878,15.878c2.602,2.601,3.243,6.559,1.599,9.848L297.39,501.146
c-1.853,3.705-0.351,8.21,3.354,10.063c1.077,0.539,2.222,0.794,3.349,0.794c2.751,0,5.4-1.52,6.714-4.147l50.945-101.891
c4.537-9.074,2.766-19.99-4.407-27.164l-11.278-11.278l9.924-13.233l56.232,17.289c17.146,5.271,28.666,20.865,28.666,38.804
V504.5c0,4.143,3.357,7.5,7.5,7.5s7.5-3.357,7.5-7.5v-94.119C455.888,385.814,440.112,364.458,416.63,357.239z M176.356,497
h-65.162v-33.097h25.081v0.516c0,4.143,3.358,7.5,7.5,7.5c4.142,0,7.5-3.357,7.5-7.5v-0.516h25.081V497z M184.435,34.722
C208.734,23.703,227.926,15,271.533,15c27.67,0,52.396,11.58,57.515,26.937c1.311,3.93,5.555,6.051,9.487,4.743
c3.929-1.31,6.053-5.558,4.743-9.487c-0.431-1.294-0.946-2.563-1.529-3.809c15.714,5.606,26.995,20.63,26.995,38.245v80.678
h-8.532c-4.705,0-8.532-3.827-8.532-8.532v-8.017c0-34.771-25.174-60.344-26.246-61.416c-1.977-1.978-4.892-2.687-7.562-1.849
c-41.634,13.148-100.337,24.229-143.555,2.362c-15.379-7.782-24.46-17.671-29.236-24.274
C161.002,45.349,173.343,39.752,184.435,34.722z M304.615,311.042l-14.324,49.112c-10.496,5.624-22.288,8.589-34.288,8.589
c-11.993,0-23.796-2.961-34.287-8.581l-14.327-49.12v-18.607c14.705,7.137,31.199,11.147,48.613,11.147
c17.412,0,33.906-4.012,48.613-11.154V311.042z M256.002,288.581c-53.326,0-96.709-43.384-96.709-96.71c0-4.143-3.358-7.5-7.5-7.5
c-4.142,0-7.5,3.357-7.5,7.5v0.516h-4.524c-3.537,0-6.928-1.506-9.303-4.131c-2.406-2.659-3.532-6.114-3.17-9.729
c0.631-6.292,6.613-11.221,13.619-11.221h10.878c12.976,0,23.532-10.557,23.532-23.532v-28.308c0-4.143-3.358-7.5-7.5-7.5
c-4.142,0-7.5,3.357-7.5,7.5v28.308c0,4.705-3.828,8.532-8.532,8.532h-8.532v-45.941c0-17.451,4.69-26.129,6.856-29.206
c4.582,3.614,9.956,7.194,16.246,10.472c16.997,8.859,37.227,13.765,60.127,14.581c26.841,0.965,57.519-3.743,91.24-13.973
c5.952,7.208,18.951,25.475,18.951,47.518v8.017c0,12.976,10.557,23.532,23.532,23.532h12.024c3.537,0,6.928,1.506,9.303,4.131
c2.406,2.659,3.532,6.113,3.17,9.728c-0.63,6.293-6.611,11.222-13.617,11.222h-3.384v-0.438c0-4.141-3.356-7.498-7.497-7.5
c-0.001,0-0.002,0-0.003,0c-4.14,0-7.497,3.354-7.5,7.494C352.668,245.229,309.286,288.581,256.002,288.581z"/>
                          </g>
                      </g>
                      <g>
                          <g>
                              <path d="M408.309,452.911h-12.54v-12.54c0-4.143-3.357-7.5-7.5-7.5s-7.5,3.357-7.5,7.5v12.54h-12.541c-4.143,0-7.5,3.357-7.5,7.5
s3.357,7.5,7.5,7.5h12.541v12.54c0,4.143,3.357,7.5,7.5,7.5s7.5-3.357,7.5-7.5v-12.54h12.54c4.143,0,7.5-3.357,7.5-7.5
S412.45,452.911,408.309,452.911z"/>
                          </g>
                      </g>
</svg>
                  <div>Ajouter un client</div>
              </a>
          </li>

           <!-------->
           <li @if( request()->is('client') ) class="activeItem" @endif>
            <a class="icon-link" href="/client">
                <svg class="icon" style="margin-right: 15px" viewBox="0 0 496 496" xmlns="http://www.w3.org/2000/svg"><path d="m472 16h-73.472656c-3.3125-9.289062-12.113282-16-22.527344-16h-112c-10.414062 0-19.214844 6.710938-22.527344 16h-73.472656c-13.230469 0-24 10.769531-24 24v104h-27.246094c-9.738281 0-19.347656 2.550781-27.792968 7.382812l-43.089844 24.617188h-45.871094v144h53.574219l33.890625 22.59375c9.230468 6.160156 19.976562 9.40625 31.0625 9.40625h25.472656v120c0 13.230469 10.769531 24 24 24h304c13.230469 0 24-10.769531 24-24v-432c0-13.230469-10.769531-24-24-24zm-280 192h16c17.648438 0 32-14.351562 32-32s-14.351562-32-32-32h-16v-80h49.472656c3.3125 9.289062 12.113282 16 22.527344 16h112c10.414062 0 19.214844-6.710938 22.527344-16h49.472656v384h-256zm64-184c0-4.414062 3.585938-8 8-8h112c4.414062 0 8 3.585938 8 8v32c0 4.414062-3.585938 8-8 8h-112c-4.414062 0-8-3.585938-8-8zm-96 16c0-4.414062 3.585938-8 8-8h72v16h-64v96h-16zm-41.472656 296c-7.917969 0-15.589844-2.320312-22.183594-6.71875l-37.917969-25.28125h-42.425781v-112h34.128906l46.773438-26.726562c6.035156-3.449219 12.898437-5.273438 19.851562-5.273438h91.246094c8.824219 0 16 7.175781 16 16s-7.175781 16-16 16h-96v8c0 22.054688-17.945312 40-40 40v16c28.167969 0 51.535156-20.894531 55.433594-48h16.566406v128zm361.472656 136c0 4.414062-3.585938 8-8 8h-304c-4.414062 0-8-3.585938-8-8v-264h16v256h288v-416h-64v-16h72c4.414062 0 8 3.585938 8 8zm0 0"/><path d="m272 32h16v16h-16zm0 0"/><path d="m352 32h16v16h-16zm0 0"/><path d="m378.984375 369.671875-27-7.710937-.007813-4.058594c14.503907-10.125 24.023438-26.910156 24.023438-45.902344v-16c0-30.871094-25.128906-56-56-56s-56 25.128906-56 56v16c0 18.976562 9.511719 35.753906 24 45.886719v4.082031l-26.992188 7.703125c-17.078124 4.886719-29.007812 20.703125-29.007812 38.472656v23.855469h176v-23.855469c0-17.769531-11.929688-33.585937-29.015625-38.472656zm-98.984375-57.671875v-16c0-22.054688 17.945312-40 40-40s40 17.945312 40 40v16c0 22.054688-17.945312 40-40 40s-40-17.945312-40-40zm55.71875 53.710938-15.71875 20.953124-15.71875-20.953124c4.992188 1.464843 10.261719 2.289062 15.71875 2.289062s10.726562-.824219 15.71875-2.289062zm56.28125 50.289062h-144v-7.855469c0-10.65625 7.160156-20.152343 17.40625-23.082031l27.496094-7.855469 27.097656 36.128907 27.097656-36.128907 27.496094 7.855469c10.246094 2.929688 17.40625 12.425781 17.40625 23.082031zm0 0"/><path d="m208 96h16v16h-16zm0 0"/><path d="m240 96h192v16h-192zm0 0"/><path d="m256 128h176v16h-176zm0 0"/><path d="m256 160h176v16h-176zm0 0"/><path d="m416 192h16v16h-16zm0 0"/><path d="m256 192h144v16h-144zm0 0"/></svg>
                <div>Liste des client</div>
            </a>
           </li>
           <li @if( request()->is('inscriptionA') ) class="activeItem" @endif>
              <a class="icon-link" href="/inscriptionA">
                    <svg class="icon" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 474.565 474.565" >
                        <g>
                            <path d="M255.204,102.3c-0.606-11.321-12.176-9.395-23.465-9.395C240.078,95.126,247.967,98.216,255.204,102.3z"/>
                            <path d="M134.524,73.928c-43.825,0-63.997,55.471-28.963,83.37c11.943-31.89,35.718-54.788,66.886-63.826
                              C163.921,81.685,150.146,73.928,134.524,73.928z"/>
                            <path d="M43.987,148.617c1.786,5.731,4.1,11.229,6.849,16.438L36.44,179.459c-3.866,3.866-3.866,10.141,0,14.015l25.375,25.383
                            c1.848,1.848,4.38,2.888,7.019,2.888c2.61,0,5.125-1.04,7.005-2.888l14.38-14.404c2.158,1.142,4.55,1.842,6.785,2.827
                            c0-0.164-0.016-0.334-0.016-0.498c0-11.771,1.352-22.875,3.759-33.302c-17.362-11.174-28.947-30.57-28.947-52.715
                            c0-34.592,28.139-62.739,62.723-62.739c23.418,0,43.637,13.037,54.43,32.084c11.523-1.429,22.347-1.429,35.376,1.033
                            c-1.676-5.07-3.648-10.032-6.118-14.683l14.396-14.411c1.878-1.856,2.918-4.38,2.918-7.004c0-2.625-1.04-5.148-2.918-7.004
                            l-25.361-25.367c-1.94-1.941-4.472-2.904-7.003-2.904c-2.532,0-5.063,0.963-6.989,2.904l-14.442,14.411
                            c-5.217-2.764-10.699-5.078-16.444-6.825V9.9c0-5.466-4.411-9.9-9.893-9.9h-35.888c-5.451,0-9.909,4.434-9.909,9.9v20.359
                            c-5.73,1.747-11.213,4.061-16.446,6.825L75.839,22.689c-1.942-1.941-4.473-2.904-7.005-2.904c-2.531,0-5.077,0.963-7.003,2.896
                            L36.44,48.048c-1.848,1.864-2.888,4.379-2.888,7.012c0,2.632,1.04,5.148,2.888,7.004l14.396,14.403
                            c-2.75,5.218-5.063,10.708-6.817,16.438H23.675c-5.482,0-9.909,4.441-9.909,9.915v35.889c0,5.458,4.427,9.908,9.909,9.908H43.987z"
                            />
                            <path d="M354.871,340.654c15.872-8.705,26.773-25.367,26.773-44.703c0-28.217-22.967-51.168-51.184-51.168
                              c-9.923,0-19.118,2.966-26.975,7.873c-4.705,18.728-12.113,36.642-21.803,52.202C309.152,310.022,334.357,322.531,354.871,340.654z
                              "/>
                            <path d="M460.782,276.588c0-5.909-4.799-10.693-10.685-10.693H428.14c-1.896-6.189-4.411-12.121-7.393-17.75l15.544-15.544
                              c2.02-2.004,3.137-4.721,3.137-7.555c0-2.835-1.118-5.553-3.137-7.563l-27.363-27.371c-2.08-2.09-4.829-3.138-7.561-3.138
                              c-2.734,0-5.467,1.048-7.547,3.138l-15.576,15.552c-5.623-2.982-11.539-5.481-17.751-7.369v-21.958
                              c0-5.901-4.768-10.685-10.669-10.685H311.11c-2.594,0-4.877,1.04-6.739,2.578c3.26,11.895,5.046,24.793,5.046,38.552
                              c0,8.735-0.682,17.604-1.956,26.423c7.205-2.656,14.876-4.324,22.999-4.324c36.99,0,67.086,30.089,67.086,67.07
                              c0,23.637-12.345,44.353-30.872,56.303c13.48,14.784,24.195,32.324,31.168,51.976c1.148,0.396,2.344,0.684,3.54,0.684
                              c2.733,0,5.467-1.04,7.563-3.13l27.379-27.371c2.004-2.004,3.106-4.721,3.106-7.555s-1.102-5.551-3.106-7.563l-15.576-15.552
                              c2.982-5.621,5.497-11.555,7.393-17.75h21.957c2.826,0,5.575-1.118,7.563-3.138c2.004-1.996,3.138-4.72,3.138-7.555
                              L460.782,276.588z"/>
                            <path d="M376.038,413.906c-16.602-48.848-60.471-82.445-111.113-87.018c-16.958,17.958-37.954,29.351-61.731,29.351
                            c-23.759,0-44.771-11.392-61.713-29.351c-50.672,4.573-94.543,38.17-111.145,87.026l-9.177,27.013
                            c-2.625,7.773-1.368,16.338,3.416,23.007c4.783,6.671,12.486,10.631,20.685,10.631h315.853c8.215,0,15.918-3.96,20.702-10.631
                            c4.767-6.669,6.041-15.234,3.4-23.007L376.038,413.906z"/>
                            <path d="M120.842,206.782c0,60.589,36.883,125.603,82.352,125.603c45.487,0,82.368-65.014,82.368-125.603
                            C285.563,81.188,120.842,80.939,120.842,206.782z"/>
                        </g>
                    </svg>
                  <div>Gestion des aministrateurs</div>
              </a>
        </li>
           
           
           
            
           
            
            
            <li @if( request()->is('#') ) class="activeItem" @endif>
              <a class="icon-link" href="/#">
              <svg   class="icon" style="margin-right: 15px" viewBox="0 0 496 496" xmlns="http://www.w3.org/2000/svg"><g><path d="m416 8h-320a48.051 48.051 0 0 0 -48 48v440a8 8 0 0 0 8 8h320a8 8 0 0 0 8-8v-248h72a8 8 0 0 0 8-8v-184a48.051 48.051 0 0 0 -48-48zm-48 48v432h-304v-432a32.03 32.03 0 0 1 32-32h284.26a47.8 47.8 0 0 0 -12.26 32zm80 176h-64v-176a32 32 0 0 1 64 0z"/><path d="m336 232h-240a8 8 0 0 0 -8 8v120a8 8 0 0 0 8 8h240a8 8 0 0 0 8-8v-120a8 8 0 0 0 -8-8zm-8 24h-168v-8h168zm-184-8v8h-40v-8zm-40 24h40v80h-40zm56 80v-80h168v80z"/><path d="m336 64h-240a8 8 0 0 0 -8 8v40a8 8 0 0 0 8 8h240a8 8 0 0 0 8-8v-40a8 8 0 0 0 -8-8zm-8 40h-224v-24h224z"/><path d="m128 160h136a8 8 0 0 0 0-16h-136a8 8 0 0 0 0 16z"/><path d="m96 160h8a8 8 0 0 0 0-16h-8a8 8 0 0 0 0 16z"/><path d="m128 184h136a8 8 0 0 0 0-16h-136a8 8 0 0 0 0 16z"/><path d="m96 184h8a8 8 0 0 0 0-16h-8a8 8 0 0 0 0 16z"/><path d="m128 208h136a8 8 0 0 0 0-16h-136a8 8 0 0 0 0 16z"/><path d="m96 208h8a8 8 0 0 0 0-16h-8a8 8 0 0 0 0 16z"/><path d="m336 424h-80a8 8 0 0 0 0 16h80a8 8 0 0 0 0-16z"/><path d="m336 448h-40a8 8 0 0 0 0 16h40a8 8 0 0 0 0-16z"/></g></svg>
                  <div>Facture</div>
              </a>
          </li>
                
            
                
            
            <!--li>
              <a href="./typography.html">
                <i class="now-ui-icons text_caps-small"></i>
                <p>Typography</p>
              </a>
            </li-->
          </ul>
        </div>
      </div>
      <div class="main-panel" id="main-panel">
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-transparent  bg-primary  navbar-absolute">
          <div class="container-fluid">
            <div class="navbar-wrapper">
              <div class="navbar-toggle">
                <button type="button" class="navbar-toggler">
                  <span class="navbar-toggler-bar bar1"></span>
                  <span class="navbar-toggler-bar bar2"></span>
                  <span class="navbar-toggler-bar bar3"></span>
                </button>
              </div>
              <a class="navbar-brand" >@yield('titlePage')</a>
            </div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-bar navbar-kebab"></span>
              <span class="navbar-toggler-bar navbar-kebab"></span>
              <span class="navbar-toggler-bar navbar-kebab"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navigation">
              <form>
                <div class="input-group no-border">
                  <input type="text" value="" class="form-control" placeholder="Search...">
                  <div class="input-group-append">
                    <div class="input-group-text">
                      <i class="now-ui-icons ui-1_zoom-bold"></i>
                    </div>
                  </div>
                </div>
              </form>
              <ul class="navbar-nav">
                <li class="nav-item">
                  <a class="nav-link" href="#pablo">
                    <i class="now-ui-icons media-2_sound-wave"></i>
                    <p>
                      <span class="d-lg-none d-md-block">Stats</span>
                    </p>
                  </a>
                </li>

                  <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                      <i class="now-ui-icons users_single-02"></i>
                      {{ Auth::user()->name }} 
                    </a>
    
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}"
                          onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>
    
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                </li>
                
              </ul>
            </div>
          </div>
        </nav>
        <!-- End Navbar -->
        

          @yield('Content-fluid')
          <div class="content" style="padding-top: 80px">
              @yield('content')
              <br><br>
        <footer class="footer">
          <div class=" container-fluid ">
            <nav>
              <ul>
                <li>
                  <a >
                    Mohamed Benyahia
                  </a>
                </li>
                <li>
                  <a >
                    Anouar Hamali
                
                  </a>
                </li>
                <li>
                  <a >
                    4iir2
                  </a>
                </li>
              </ul>
            </nav>
            <div class="copyright" id="copyright">
              &copy; <script>
                document.getElementById('copyright').appendChild(document.createTextNode(new Date().getFullYear()))
              </script>, Designed by  MB . Coded by MB .
            </div>
          </div>
        </footer>
      </div>
    </div>
    <!--   Core JS Files   -->
    <script src="../assets/js/core/jquery.min.js"></script>
    <script src="../assets/js/core/popper.min.js"></script>
    <script src="../assets/js/core/bootstrap.min.js"></script>
    <script src="../assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
    <!--  Google Maps Plugin    -->
    <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
    <!-- Chart JS -->
    <script src="../assets/js/plugins/chartjs.min.js"></script>
    <!--  Notifications Plugin    -->
    <script src="../assets/js/plugins/bootstrap-notify.js"></script>
    <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
    <script src="../assets/js/now-ui-dashboard.min.js?v=1.5.0" type="text/javascript"></script><!-- Now Ui Dashboard DEMO methods, don't include it in your project! -->
    <script src="../assets/demo/demo.js"></script>
    <script>
      $(document).ready(function() {
        // Javascript method's body can be found in assets/js/demos.js
        demo.initDashboardPageCharts();

      });
    </script>
    @yield('scripts')
</body>

</html>